<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $general = new \App\Category();
        $general->id = 1;
        $general->name = 'Strategy';
        $general->save();

        $general = new \App\Category();
        $general->id = 2;
        $general->name = 'Workplans';
        $general->save();

        $general = new \App\Category();
        $general->id = 3;
        $general->name = 'Reports';
        $general->save();

        $general = new \App\Category();
        $general->id = 4;
        $general->name = 'Power Point';
        $general->save();

        $general = new \App\Category();
        $general->id = 5;
        $general->name = 'TOR and MoM';
        $general->save();

    }
}
