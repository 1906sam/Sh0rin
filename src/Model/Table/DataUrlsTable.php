<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DataUrls Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\HasMany $UrlInformations
 *
 * @method \App\Model\Entity\DataUrl get($primaryKey, $options = [])
 * @method \App\Model\Entity\DataUrl newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DataUrl[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DataUrl|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DataUrl patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DataUrl[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DataUrl findOrCreate($search, callable $callback = null)
 */
class DataUrlsTable extends Table
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

        $this->table('data_urls');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('UrlInformations', [
            'foreignKey' => 'data_url_id'
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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
