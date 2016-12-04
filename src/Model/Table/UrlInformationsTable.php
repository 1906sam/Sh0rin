<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UrlInformations Model
 *
 * @property \Cake\ORM\Association\BelongsTo $DataUrls
 *
 * @method \App\Model\Entity\UrlInformation get($primaryKey, $options = [])
 * @method \App\Model\Entity\UrlInformation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UrlInformation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UrlInformation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UrlInformation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UrlInformation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UrlInformation findOrCreate($search, callable $callback = null)
 */
class UrlInformationsTable extends Table
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

        $this->table('url_informations');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('DataUrls', [
            'foreignKey' => 'data_url_id',
            'joinType' => 'INNER'
        ]);
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
            ->allowEmpty('browser');

        $validator
            ->allowEmpty('device');

        $validator
            ->allowEmpty('ip_address');

        $validator
            ->allowEmpty('location');

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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['data_url_id'], 'DataUrls'));

        return $rules;
    }
}
