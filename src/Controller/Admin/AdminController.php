<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Model\Table\StoreTypesTable;

/**
 * Class AdminController
 *
 * @package App\Controller\Admin

 * @property StoreTypesTable StoreTypes
 *
 * @method \App\Model\Entity\StoreType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdminController extends AppController {

    public function isAuthorized($user): bool {
        return $user['type'] == 3;
    }

    public function index() {
        $storeTypes = $this->paginate($this->StoreTypes);

        $this->set(compact("storeTypes"));
    }

}
