<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)->create([
            'name'     => 'admin',
            'password' => bcrypt('admin'),
            'email'    => 'admin@keklik.io',
        ]);
    }
}
