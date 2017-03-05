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
        $general->title = 'Ministries and Govermental Institutions';
        $general->save();

        $general = new \App\Catpart();
        $general->id = 2;
        $general->title = 'CSOs: NGOs, Academia';
        $general->save();
       
        $general = new \App\Catpart();
        $general->id = 3;
        $general->title = 'Private Sector';
        $general->save();

        $general = new \App\Catpart();
        $general->id = 4;
        $general->title = 'INGOs';
        $general->save();

        $general = new \App\Catpart();
        $general->id = 5;
        $general->title = 'Donors';
        $general->save();
    }
}
