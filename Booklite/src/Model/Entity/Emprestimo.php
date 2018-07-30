<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Emprestimo Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string $matricula
 * @property string $nome
 * @property string $curso
 * @property string $tutor
 * @property string $telfixo
 * @property string $telcelular
 * @property \Cake\I18n\FrozenTime $dataemprestimo
 * @property \Cake\I18n\FrozenTime $datadevolucao
 * @property string $situacao
 * @property int $codigo
 */
class Emprestimo extends Entity
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
        'titulo' => true,
        'matricula' => true,
        'nome' => true,
        'curso' => true,
        'tutor' => true,
        'telfixo' => true,
        'telcelular' => true,
        'dataemprestimo' => true,
        'datadevolucao' => true,
        'situacao' => true,
        'codigo' => true
    ];
}
