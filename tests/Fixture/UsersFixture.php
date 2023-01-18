<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'employee_id' => 1,
                'role_id' => 1,
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'raw_password' => 'Lorem ipsum dolor sit amet',
                'quest_one' => 'Lorem ipsum dolor sit amet',
                'ans_one' => 'Lorem ipsum dolor sit amet',
                'quest_two' => 'Lorem ipsum dolor sit amet',
                'ans_two' => 'Lorem ipsum dolor sit amet',
                'passwdIsValid' => 1,
                'created' => '2023-01-17 02:14:21',
                'modified' => '2023-01-17 02:14:21',
            ],
        ];
        parent::init();
    }
}
