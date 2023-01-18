<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BiddingDetailsFixture
 */
class BiddingDetailsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'bidding_id' => 1,
                'asset_id' => 1,
                'qty' => 1,
                'qty_approved' => 1,
                'price' => 1,
                'total_payable' => 1.5,
                'qty_met' => 1,
                'approved_payable' => 1.5,
                'reviewed_payable' => 1,
                'qty_reviewed' => 1,
                'status_id' => 1,
                'remark' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-01-17 02:14:10',
                'modified' => '2023-01-17 02:14:10',
            ],
        ];
        parent::init();
    }
}
