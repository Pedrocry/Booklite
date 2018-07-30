<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Emprestimos Model
 *
 * @method \App\Model\Entity\Emprestimo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Emprestimo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Emprestimo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Emprestimo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Emprestimo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo findOrCreate($search, callable $callback = null, $options = [])
 */
class EmprestimosTable extends Table
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

        $this->setTable('emprestimos');
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
            ->scalar('titulo')
            ->maxLength('titulo', 220)
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->scalar('matricula')
            ->maxLength('matricula', 220)
            ->requirePresence('matricula', 'create')
            ->notEmpty('matricula');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 220)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->scalar('curso')
            ->maxLength('curso', 220)
            ->requirePresence('curso', 'create')
            ->notEmpty('curso');

        $validator
            ->scalar('tutor')
            ->maxLength('tutor', 220)
            ->requirePresence('tutor', 'create')
            ->notEmpty('tutor');

        $validator
            ->scalar('telfixo')
            ->maxLength('telfixo', 220)
            ->allowEmpty('telfixo');

        $validator
            ->scalar('telcelular')
            ->maxLength('telcelular', 220)
            ->requirePresence('telcelular', 'create')
            ->notEmpty('telcelular');

        $validator
            ->dateTime('dataemprestimo')
            ->requirePresence('dataemprestimo', 'create')
            ->notEmpty('dataemprestimo');

        $validator
            ->dateTime('datadevolucao')
            ->requirePresence('datadevolucao', 'create')
            ->notEmpty('datadevolucao');

        $validator
            ->scalar('situacao')
            ->maxLength('situacao', 220)
            ->requirePresence('situacao', 'create')
            ->notEmpty('situacao');

        $validator
            ->integer('codigo')
            ->requirePresence('codigo', 'create')
            ->notEmpty('codigo');

        return $validator;
    }
}
