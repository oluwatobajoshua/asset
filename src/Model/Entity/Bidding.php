<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bidding Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $asset_qty
 * @property string $amount
 * @property int|null $remark
 * @property string|null $approved_amount
 * @property int|null $reviewed_amount
 * @property int $status_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\BiddingDetail[] $bidding_details
 * @property \App\Model\Entity\Permit[] $permits
 */
class Bidding extends Entity
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
        'user_id' => true,
        'asset_qty' => true,
        'amount' => true,
        'remark' => true,
        'approved_amount' => true,
        'reviewed_amount' => true,
        'status_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'status' => true,
        'bidding_details' => true,
        'permits' => true,
    ];
}
