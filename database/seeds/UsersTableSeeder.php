<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$CnarPIUoeLw1kY3akyRwbeBQmI0IDtxLGxV6vuo1UPW1vH5345t26',
                'remember_token' => null,
                'approved'       => 1,
                'workphone'      => '',
            ],
        ];

        User::insert($users);
    }
}
