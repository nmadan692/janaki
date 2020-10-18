<?php


namespace App\Services\General\Password;


use App\Entities\User;
use App\Services\BaseService;

class PasswordService extends BaseService
{
    public function model()
    {
        return User::class;
    }
}
