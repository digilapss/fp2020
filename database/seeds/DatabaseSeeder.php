<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        //$this->call(CatpartTableSeeder::class);
        //$this->call(GroupTableSeeder::class);
        //$this->call(IntroTableSeeder::class);
        //$this->call(CategoryTableSeeder::class);
        //$this->call(ProfileTableSeeder::class);
    }
}
