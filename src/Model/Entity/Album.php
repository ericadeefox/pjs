<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Album Entity
 *
 * @property int $id
 * @property string $name
 * @property int $photo_id
 * @property \Cake\I18n\FrozenTime $date
 * @property string $description
 *
 * @property \App\Model\Entity\Photo $photo
 */
class Album extends Entity
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
        'name' => true,
        'photo_id' => true,
        'date' => true,
        'description' => true,
        'photo' => true
    ];
}