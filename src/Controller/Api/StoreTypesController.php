<?php

namespace App\Controller\Api;

// src/Controller/StoreTypesController.php
use App\Controller\Api\AppController;

class StoreTypesController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->Auth->allow(['index']);

        $this->loadComponent('RequestHandler');
    }

    public function isAuthorized($user): bool
    {
        $type = $user['type'];
        $action = $this->request->getParam('action');

        return $action != 'view' ? ($type == 3) : false;
    }

    public function index()
    {
        $storeTypes = $this->StoreTypes->find('all');
        $this->set([
            'storeTypes' => $storeTypes,
            '_serialize' => 'storeTypes'
        ]);
    }

    public function view($id)
    {
        $storeType = $this->StoreTypes->get($id);
        $this->set([
            'storeType' => $storeType,
            '_serialize' => ['storeType']
        ]);
    }

    public function add()
    {
        $this->request->allowMethod(['post', 'put']);
        $storeType = $this->StoreTypes->newEntity($this->request->getData());
        if ($this->StoreTypes->save($storeType)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'storeType' => $storeType,
            '_serialize' => ['message', 'storeType']
        ]);
    }

    public function edit($id)
    {
        $this->request->allowMethod(['patch', 'post', 'put']);
        $storeType = $this->StoreTypes->get($id);
        $storeType = $this->StoreTypes->patchEntity($storeType, $this->request->getData());
        if ($this->StoreTypes->save($storeType)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['delete']);
        $storeType = $this->StoreTypes->get($id);
        $message = 'Deleted';
        if (!$this->StoreTypes->delete($storeType)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }
}?>
