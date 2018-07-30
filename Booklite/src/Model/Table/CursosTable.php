<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cursos Model
 *
 * @method \App\Model\Entity\Curso get($primaryKey, $options = [])
 * @method \App\Model\Entity\Curso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Curso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Curso|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Curso|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Curso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Curso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Curso findOrCreate($search, callable $callback = null, $options = [])
 */
class CursosTable extends Table
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

        $this->setTable('cursos');
        $this->setDisplayField('id');
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('tutor')
            ->maxLength('tutor', 220)
            ->requirePresence('tutor', 'create')
            ->notEmpty('tutor');

        $validator
            ->scalar('valorinicial')
            ->maxLength('valorinicial', 220)
            ->requirePresence('valorinicial', 'create')
            ->notEmpty('valorinicial');

        $validator
            ->scalar('valoratual')
            ->maxLength('valoratual', 220)
            ->requirePresence('valoratual', 'create')
            ->notEmpty('valoratual');

        $validator
            ->scalar('faculdade')
            ->maxLength('faculdade', 220)
            ->requirePresence('faculdade', 'create')
            ->notEmpty('faculdade');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 220)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->scalar('valorvagas')
            ->maxLength('valorvagas', 220)
            ->requirePresence('valorvagas', 'create')
            ->notEmpty('valorvagas');

        return $validator;
    }
}
