<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $general = new \App\Profile();
        $general->id = 1;
        $general->title = 'Global FP2020';
        $general->body = 'The London Summit on Family Planning brought together partners representing country governments, donors, multilateral agencies, civil society and private sector organisations around an ambitious goal: to provide an additional 120 million women in the world’s poorest countries with access to voluntary family planning by 2020. Developing country leaders and other partners made transformative financial, policy and delivery commitments and $2.6bn in donor financing was pledged to enable millions more girls and women to use family planning information, services and supplies.';
        $general->image = 'image';
        $general->save();

        $general = new \App\Profile();
        $general->id = 2;
        $general->title = 'FP2020 Indonesia';
        $general->body = 'As part of its follow-up on commitments made at FP2020, Indonesia established the FP2020 Indonesia Country Committee to realize rights-based and gender-sensitive comprehensive FP programme. As the focal link to the global FP2020 architecture, the Country Committee coordinates information, plans and action at the country level towards fulfillment of FP2020 commitments. The Committee will facilitate the sharing of information, best practices and opportunities for collaboration among partners. To carry out its roles and function, the Country Committee is supported by:';
        $general->image = 'image';
        $general->save();

    }
}
