<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    
    //Add every seeder class here
    public function run () {
        $this->call([
            UserSeeder::class,
            MovieSeeder::class
        ]);
    }
    
}
