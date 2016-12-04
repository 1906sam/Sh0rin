<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GuestUsers Model
 *
 * @method \App\Model\Entity\GuestUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\GuestUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GuestUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GuestUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GuestUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GuestUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GuestUser findOrCreate($search, callable $callback = null)
 */
class GuestUsersTable extends Table
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

        $this->table('guest_users');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('ip_address', 'create')
            ->notEmpty('ip_address');

        $validator
            ->requirePresence('long_url', 'create')
            ->notEmpty('long_url');

        $validator
            ->allowEmpty('short_url');

        $validator
            ->allowEmpty('custom_url');

        $validator
            ->dateTime('created_date')
            ->requirePresence('created_date', 'create')
            ->notEmpty('created_date');

        $validator
            ->dateTime('modified_date')
            ->requirePresence('modified_date', 'create')
            ->notEmpty('modified_date');

        return $validator;
    }
}
