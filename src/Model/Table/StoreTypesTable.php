<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StoreTypes Model
 *
 * @property \App\Model\Table\StoresTable&\Cake\ORM\Association\BelongsToMany $Stores
 *
 * @method \App\Model\Entity\StoreType get($primaryKey, $options = [])
 * @method \App\Model\Entity\StoreType newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\StoreType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StoreType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StoreType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StoreType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StoreType[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\StoreType findOrCreate($search, callable $callback = null, $options = [])
 */
class StoreTypesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('store_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }
}
