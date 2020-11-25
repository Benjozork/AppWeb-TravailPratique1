<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StoreTypes Controller
 *
 * @property \App\Model\Table\StoreTypesTable $StoreTypes
 *
 * @method \App\Model\Entity\StoreType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StoreTypesController extends AppController
{

    public function initialize()
    {
        parent::initialize();

        $this->Auth->allow(['list']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $storeTypes = $this->paginate($this->StoreTypes);

        $this->set(compact('storeTypes'));
    }

    public function list() {
        $this->autoRender = false;

        $storeTypes = $this->paginate($this->StoreTypes);

        echo json_encode($storeTypes->map(function ($el) {
            return $el;
        }));

        return null;
    }

    /**
     * View method
     *
     * @param string|null $id Store Type id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $storeType = $this->StoreTypes->get($id, [
            'contain' => ['Stores'],
        ]);

        $this->set('storeType', $storeType);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $storeType = $this->StoreTypes->newEntity();
        if ($this->request->is('post')) {
            $storeType = $this->StoreTypes->patchEntity($storeType, $this->request->getData());
            if ($this->StoreTypes->save($storeType)) {
                $this->Flash->success(__('The store type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The store type could not be saved. Please, try again.'));
        }
        $stores = $this->StoreTypes->Stores->find('list', ['limit' => 200]);
        $this->set(compact('storeType', 'stores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Store Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $storeType = $this->StoreTypes->get($id, [
            'contain' => ['Stores'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $storeType = $this->StoreTypes->patchEntity($storeType, $this->request->getData());
            if ($this->StoreTypes->save($storeType)) {
                $this->Flash->success(__('The store type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The store type could not be saved. Please, try again.'));
        }
        $stores = $this->StoreTypes->Stores->find('list', ['limit' => 200]);
        $this->set(compact('storeType', 'stores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Store Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $storeType = $this->StoreTypes->get($id);
        if ($this->StoreTypes->delete($storeType)) {
            $this->Flash->success(__('The store type has been deleted.'));
        } else {
            $this->Flash->error(__('The store type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
