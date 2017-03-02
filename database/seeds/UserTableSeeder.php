<?php

use Illuminate\Database\Seeder;
use App\User as User;
  
class UserTableSeeder extends Seeder {
  
    public function run() {
        User::truncate();
  
        User::create( [
            'email' => 'admin@admin.com',
            'password' => bcrypt("password"),
            'name' => 'Administrator'
        ] );

        User::create( [
            'email' => 'ikhsan@admin.com',
            'password' => bcrypt("ikhsanikhsan"),
            'name' => 'Ikhsan'
        ] );
    }
}

?>