<?php

use Illuminate\Database\Seeder;

class CatpartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $general = new \App\Catpart();
        $general->id = 1;
        $general->title = 'Ministries and Government Institutions';
        $general->save();

        $general = new \App\Catpart();
        $general->id = 2;
        $general->title = 'Professional Organizations';
        $general->save();
       
        $general = new \App\Catpart();
        $general->id = 3;
        $general->title = 'Private Sector';
        $general->save();

        $general = new \App\Catpart();
        $general->id = 4;
        $general->title = 'NGO/Civil Society Organizations';
        $general->save();

        $general = new \App\Catpart();
        $general->id = 5;
        $general->title = 'Academia';
        $general->save();

         $general = new \App\Catpart();
        $general->id = 6;
        $general->title = 'International Development Partners';
        $general->save();
    }
}
