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
        // $this->call(UsersTableSeeder::class);
        //$this->call(GeneralTableSeeder::class);
        //$this->call(CategoryTableSeeder::class);
        //$this->call(UserTableSeeder::class);
        //$this->call(AboutTableSeeder::class);
        //$this->call(GroupTableSeeder::class);
        $this->call(CatpartTableSeeder::class);
    }
}
