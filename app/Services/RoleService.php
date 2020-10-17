<?php


namespace App\Services;


use App\Entities\Role;

class RoleService extends BaseService
{
    public function model()
    {
        return Role::class;
    }

}
