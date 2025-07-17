<?php 
// src/Model/Entity/User.php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity 
{
    protected $_accesible = [
        '*',
        'id' => false
    ];

    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            /**
             * This works like:
             * $hasher = new DefaultPasswordHasher;
             * return $hasher->hash($password)
             */
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}