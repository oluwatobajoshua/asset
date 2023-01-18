<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property int $employee_id
 * @property int $role_id
 * @property string $username
 * @property string $password
 * @property string $raw_password
 * @property string|null $quest_one
 * @property string|null $ans_one
 * @property string|null $quest_two
 * @property string|null $ans_two
 * @property bool $passwdIsValid
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Employee[] $employees
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Bidding[] $biddings
 * @property \App\Model\Entity\Grade[] $grades
 * @property \App\Model\Entity\Profile[] $profiles
 */
class User extends Entity

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
        'employee_id' => true,
        'role_id' => true,
        'username' => true,
        'password' => true,
        'raw_password' => true,
        'quest_one' => true,
        'ans_one' => true,
        'quest_two' => true,
        'ans_two' => true,
        'passwdIsValid' => true,
        'created' => true,
        'modified' => true,
        'employees' => true,
        'role' => true,
        'biddings' => true,
        'grades' => true,
        'profiles' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
    
    protected function _setPassword(string $password)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
    }
}
