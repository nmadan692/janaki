<?php

use App\Services\RoleService;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * @var RoleService
     */
    private $roleService;

    /**
     * RoleTableSeeder constructor.
     * @param RoleService $roleService
     */
    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin'
            ],
            [
                'name' => 'front'
            ]
        ];
        foreach ($roles as $role) {
            $this->roleService->updateOrCreate(['name' => $role['name']], $role);
        }
    }
}
