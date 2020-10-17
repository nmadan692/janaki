<?php


namespace App\Services;


use App\Entities\User;

class UserService extends BaseService
{
    public function model()
    {
        return User::class;
    }
}
