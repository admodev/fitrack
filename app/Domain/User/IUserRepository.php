<?php

namespace App\Domain\User;

use App\Domain\IRepository;

interface IUserRepository extends IRepository {
    public function getAllUsers();
}
