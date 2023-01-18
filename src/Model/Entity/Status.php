<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Status Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 *
 * @property \App\Model\Entity\Asset[] $assets
 * @property \App\Model\Entity\BiddingDetail[] $bidding_details
 * @property \App\Model\Entity\Bidding[] $biddings
 * @property \App\Model\Entity\Employee[] $employees
 * @property \App\Model\Entity\Leave[] $leaves
 */
class Status extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'assets' => true,
        'bidding_details' => true,
        'biddings' => true,
        'employees' => true,
        'leaves' => true,
    ];
}
