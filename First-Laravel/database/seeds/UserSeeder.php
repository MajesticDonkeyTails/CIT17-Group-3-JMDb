<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    
    //Default users
    public function run () {
        User::create([
            'username' => 'Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('password')
        ]);
    }
    
}
