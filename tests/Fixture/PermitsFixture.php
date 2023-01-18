<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PermitsFixture
 */
class PermitsFixture extends TestFixture
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
                'receipt_no' => 1,
                'created' => '2023-01-17 02:11:11',
                'modified' => '2023-01-17 02:11:11',
            ],
        ];
        parent::init();
    }
}
