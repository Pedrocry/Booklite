<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aluno Entity
 *
 * @property int $matricula
 * @property string $curso
 * @property string $faculdade
 * @property string $tutor
 * @property string $nome
 * @property string $endereco
 * @property string $bairro
 * @property string $referencia
 * @property string $telfixo
 * @property string $telcelular
 * @property string $email
 * @property string $observacoes
 * @property string $rg
 * @property string $cpf
 * @property string $cidade
 */
class Aluno extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'curso' => true,
        'faculdade' => true,
        'tutor' => true,
        'nome' => true,
        'endereco' => true,
        'bairro' => true,
        'referencia' => true,
        'telfixo' => true,
        'telcelular' => true,
        'email' => true,
        'observacoes' => true,
        'rg' => true,
        'cpf' => true,
        'cidade' => true
    ];
}
