<?php

use Illuminate\Database\Seeder;

class IntroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $general = new \App\Intro();
        $general->id = 1;
        $general->narrative = 'FAMILY PLANNING 2020 (FP2020) is global movement that supports the rights of women and children to decide freely and for themselves - whether when know many children they want to have.';
        $general->save();

    }
}
