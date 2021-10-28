<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Veiculo Entity
 *
 * @property int $id
 * @property string $descricao_veiculo
 * @property string $ano
 * @property int $marca_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Marca $marca
 */
class Veiculo extends Entity
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
        'descricao_veiculo' => true,
        'ano' => true,
        'marca_id' => true,
        'created' => true,
        'modified' => true,
        'marca' => true,
    ];
}
