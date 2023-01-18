<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BiddingsFixture
 */
class BiddingsFixture extends TestFixture
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
                'user_id' => 1,
                'asset_qty' => 1,
                'amount' => 1.5,
                'remark' => 1,
                'approved_amount' => 1.5,
                'reviewed_amount' => 1,
                'status_id' => 1,
                'created' => '2023-01-17 02:14:00',
                'modified' => '2023-01-17 02:14:00',
            ],
        ];
        parent::init();
    }
}
