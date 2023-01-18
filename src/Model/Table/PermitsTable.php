<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Permits Model
 *
 * @property \App\Model\Table\BiddingsTable&\Cake\ORM\Association\BelongsTo $Biddings
 *
 * @method \App\Model\Entity\Permit newEmptyEntity()
 * @method \App\Model\Entity\Permit newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Permit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Permit get($primaryKey, $options = [])
 * @method \App\Model\Entity\Permit findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Permit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Permit[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Permit|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Permit saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Permit[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Permit[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Permit[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Permit[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PermitsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('permits');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Biddings', [
            'foreignKey' => 'bidding_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('bidding_id')
            ->notEmptyString('bidding_id');

        $validator
            ->integer('receipt_no')
            ->requirePresence('receipt_no', 'create')
            ->notEmptyString('receipt_no');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('bidding_id', 'Biddings'), ['errorField' => 'bidding_id']);

        return $rules;
    }
}
