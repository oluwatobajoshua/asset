<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BiddingDetail Entity
 *
 * @property int $id
 * @property int $bidding_id
 * @property int $asset_id
 * @property int $qty
 * @property int|null $qty_approved
 * @property int $price
 * @property string $total_payable
 * @property int|null $qty_met
 * @property string|null $approved_payable
 * @property int|null $reviewed_payable
 * @property int|null $qty_reviewed
 * @property int $status_id
 * @property string|null $remark
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Bidding $bidding
 * @property \App\Model\Entity\Asset $asset
 * @property \App\Model\Entity\Status $status
 */
class BiddingDetail extends Entity
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
        'bidding_id' => true,
        'asset_id' => true,
        'qty' => true,
        'qty_approved' => true,
        'price' => true,
        'total_payable' => true,
        'qty_met' => true,
        'approved_payable' => true,
        'reviewed_payable' => true,
        'qty_reviewed' => true,
        'status_id' => true,
        'remark' => true,
        'created' => true,
        'modified' => true,
        'bidding' => true,
        'asset' => true,
        'status' => true,
    ];
}
