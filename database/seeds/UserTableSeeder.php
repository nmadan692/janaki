<?php

use App\Constants\RoleConstant;
use App\Services\UserService;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * @var UserService
     */
    private $userService;

    /**
     * UserTableSeeder constructor.
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'role_id' => RoleConstant::ADMIN_ID,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),

            ],
            [
                'role_id' => RoleConstant::FRONT_ID,
                'name' => 'Customer',
                'email' => 'customer@customer.com',
                'password' => bcrypt('password'),
            ]
        ];

        foreach ($users as $user) {
            $this->userService->updateOrCreate(['email' => $user['email']], $user);
        }
    }
}
