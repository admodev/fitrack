<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Domain\User\IUserRepository;
use App\Domain\User\UserRepository;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function index() {
        return $this->userRepository->getAllUsers();
    }
}
