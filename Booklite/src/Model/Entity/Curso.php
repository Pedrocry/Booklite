<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Curso Entity
 *
 * @property int $id
 * @property string $tutor
 * @property string $valorinicial
 * @property string $valoratual
 * @property string $faculdade
 * @property string $nome
 * @property string $valorvagas
 */
class Curso extends Entity
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
        'tutor' => true,
        'valorinicial' => true,
        'valoratual' => true,
        'faculdade' => true,
        'nome' => true,
        'valorvagas' => true
    ];
}
