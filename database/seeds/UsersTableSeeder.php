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
                'password'       => '$2y$10$LUsQ4Xt4zYRWRXR9VNTHieP341/vcU5CtgYMbbhPia0p.P/yt0pG.',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
