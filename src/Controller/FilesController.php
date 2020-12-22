<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\File;
use App\Model\Table\FilesTable;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Datasource\ResultSetInterface;
use Cake\Http\Response;

/**
 * Files Controller
 *
 * @property FilesTable $Files
 *
 * @method File[]|ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilesController extends AppController
{

    public function isAuthorized($user)
    {
        $action = $this->request->getParam('action');

        if ($action == 'add') {
            // New pas autoriser si pas admin ou propriétaire
            return $user['type'] >= 2;
        } else return true;
    }

    /**
     * Index method
     *
     * @return Response|null
     */
    public function index()
    {
        $files = $this->paginate($this->Files);

        $this->set(compact('files'));
    }

    /**
     * View method
     *
     * @param string|null $id File id.
     * @return Response|null
     * @throws RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $file = $this->Files->get($id, [
            'contain' => ['Products'],
        ]);

        $this->set('file', $file);
    }

    /**
     * Add method
     *
     * @return Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $uploadData = '';

        if ($this->request->is('post')) {
            if (!empty($this->request->getData()['file']['name'])) {
                $fileName = $this->request->getData()['file']['name'];
                $uploadPath = WWW_ROOT . '/img/';
                $uploadFile = $uploadPath . $fileName;

                if (move_uploaded_file($this->request->getData()['file']['tmp_name'], $uploadFile)) {
                    $uploadData = $this->Files->newEntity();
                    $uploadData->name = $fileName;
                    $uploadData->path = $uploadPath;
                    $uploadData->created = date("Y-m-d H:i:s");
                    $uploadData->modified = date("Y-m-d H:i:s");

                    if ($this->Files->save($uploadData)) {
                        $this->Flash->success(__('File has been uploaded and inserted successfully.'));
                    } else {
                        $this->Flash->error(__('Unable to save uploaded file, please try again.'));
                    }
                } else {
                    $this->Flash->error(__('Unable to process uploaded file, please try again.'));
                }
            } else {
                $this->Flash->error(__('Please choose a file to upload.'));
            }

        }
        $this->set('uploadData', $uploadData);

        $files = $this->Files->find('all', ['order' => ['Files.created' => 'DESC']]);
        $filesRowNum = $files->count();
        $this->set('files', $files);
        $this->set('filesRowNum', $filesRowNum);

        $products = $this->Files->Products->find('list', ['limit' => 200]);
        $this->set(compact('file', 'products'));
    }

    public function drop()
    {
        $this->viewBuilder()->setTemplate('add');

        if ($this->request->is(array('post', 'put'))) {
            if (!empty($_FILES)) {
                $fileName = $_FILES['file']['name'];
                $file_full = WWW_ROOT . 'img/';
                $file = basename($fileName);
                $ext = pathinfo($file, PATHINFO_EXTENSION);
                $file_temp_name = $_FILES['file']['tmp_name'];
                $new_file_name = time() . '.' . $ext;

                if (move_uploaded_file($file_temp_name, $file_full . $new_file_name)) {
                    $uploadData = $this->Files->newEntity();
                    $uploadData->name = $fileName;
                    $uploadData->path = $file_full;
                    $uploadData->created = date("Y-m-d H:i:s");
                    $uploadData->modified = date("Y-m-d H:i:s");

                    if ($this->Files->save($uploadData)) {
                        $this->Flash->success(__('File has been uploaded and inserted successfully.'));
                    } else {
                        $this->Flash->error(__('Unable to save uploaded file, please try again.'));
                    }
                } else {
                    $this->Flash->error(__('Unable to process uploaded file, please try again.'));
                }
            }
        }
    }

    private function createFile() {

    }

    /**
     * Edit method
     *
     * @param string|null $id File id.
     * @return Response|null Redirects on successful edit, renders view otherwise.
     * @throws RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $file = $this->Files->get($id, [
            'contain' => ['Products'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $file = $this->Files->patchEntity($file, $this->request->getData());
            if ($this->Files->save($file)) {
                $this->Flash->success(__('The file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The file could not be saved. Please, try again.'));
        }
        $products = $this->Files->Products->find('list', ['limit' => 200]);
        $this->set(compact('file', 'products'));
    }

    /**
     * Delete method
     *
     * @param string|null $id File id.
     * @return Response|null Redirects to index.
     * @throws RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $file = $this->Files->get($id);
        if ($this->Files->delete($file)) {
            $this->Flash->success(__('The file has been deleted.'));
        } else {
            $this->Flash->error(__('The file could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
