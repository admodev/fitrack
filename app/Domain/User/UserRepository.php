<?php

namespace App\Domain\User;

use App\Models\User;
use App\Domain\Repository;
use App\Domain\User\IUserRepository;

class UserRepository extends Repository implements IUserRepository {
    protected $modelClassName = User::class;

    public function getAllUsers() {
        try {
            return $this->model->all();
        } catch (Exception $error) {
            return $error;
        }
    }
}
