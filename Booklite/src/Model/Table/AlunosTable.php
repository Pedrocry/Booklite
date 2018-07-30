<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alunos Model
 *
 * @method \App\Model\Entity\Aluno get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aluno newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Aluno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aluno|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aluno|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aluno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno findOrCreate($search, callable $callback = null, $options = [])
 */
class AlunosTable extends Table
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

        $this->setTable('alunos');
        $this->setDisplayField('matricula');
        $this->setPrimaryKey('matricula');
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
            ->integer('matricula')
            ->allowEmpty('matricula', 'create');

        $validator
            ->scalar('curso')
            ->maxLength('curso', 220)
            ->requirePresence('curso', 'create')
            ->notEmpty('curso');

        $validator
            ->scalar('faculdade')
            ->maxLength('faculdade', 220)
            ->requirePresence('faculdade', 'create')
            ->notEmpty('faculdade');

        $validator
            ->scalar('tutor')
            ->maxLength('tutor', 220)
            ->requirePresence('tutor', 'create')
            ->notEmpty('tutor');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 220)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 220)
            ->requirePresence('endereco', 'create')
            ->notEmpty('endereco');

        $validator
            ->scalar('bairro')
            ->maxLength('bairro', 220)
            ->requirePresence('bairro', 'create')
            ->notEmpty('bairro');

        $validator
            ->scalar('referencia')
            ->maxLength('referencia', 220)
            ->requirePresence('referencia', 'create')
            ->notEmpty('referencia');

        $validator
            ->scalar('telfixo')
            ->maxLength('telfixo', 220)
            ->requirePresence('telfixo', 'create')
            ->notEmpty('telfixo');

        $validator
            ->scalar('telcelular')
            ->maxLength('telcelular', 220)
            ->requirePresence('telcelular', 'create')
            ->notEmpty('telcelular');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('observacoes')
            ->maxLength('observacoes', 220)
            ->requirePresence('observacoes', 'create')
            ->notEmpty('observacoes');

        $validator
            ->scalar('rg')
            ->maxLength('rg', 220)
            ->requirePresence('rg', 'create')
            ->notEmpty('rg');

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 220)
            ->requirePresence('cpf', 'create')
            ->notEmpty('cpf');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 220)
            ->requirePresence('cidade', 'create')
            ->notEmpty('cidade');

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
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
