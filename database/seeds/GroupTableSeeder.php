<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $general = new \App\Group();
        $general->id = 1;
        $general->name = 'Country Committe';
        $general->role = 'The London Summit on Family Planning brought together partners representing country governments, donors, multilateral agencies, civil society and private sector organisations around an ambitious goal: to provide an additional 120 million women in the world’s poorest countries with access to voluntary family planning by 2020. Developing country leaders and other partners made transformative financial, policy and delivery commitments and $2.6bn in donor financing was pledged to enable millions more girls and women to use family planning information, services and supplies.';
         $general->function = 'The London Summit on Family Planning brought together partners representing country governments, donors, multilateral agencies, civil society and private sector organisations around an ambitious goal: to provide an additional 120 million women in the world’s poorest countries with access to voluntary family planning by 2020. Developing country leaders and other partners made transformative financial, policy and delivery commitments and $2.6bn in donor financing was pledged to enable millions more girls and women to use family planning information, services and supplies.';
        $general->save();

        $general = new \App\Group();
        $general->id = 2;
        $general->name = 'Working Groups';
        $general->role = 'The London Summit on Family Planning brought together partners representing country governments, donors, multilateral agencies, civil society and private sector organisations around an ambitious goal: to provide an additional 120 million women in the world’s poorest countries with access to voluntary family planning by 2020. Developing country leaders and other partners made transformative financial, policy and delivery commitments and $2.6bn in donor financing was pledged to enable millions more girls and women to use family planning information, services and supplies.';
         $general->function = 'The London Summit on Family Planning brought together partners representing country governments, donors, multilateral agencies, civil society and private sector organisations around an ambitious goal: to provide an additional 120 million women in the world’s poorest countries with access to voluntary family planning by 2020. Developing country leaders and other partners made transformative financial, policy and delivery commitments and $2.6bn in donor financing was pledged to enable millions more girls and women to use family planning information, services and supplies.';
        $general->save();

        $general = new \App\Group();
        $general->id = 3;
        $general->name = 'Secretariate';
        $general->role = 'The London Summit on Family Planning brought together partners representing country governments, donors, multilateral agencies, civil society and private sector organisations around an ambitious goal: to provide an additional 120 million women in the world’s poorest countries with access to voluntary family planning by 2020. Developing country leaders and other partners made transformative financial, policy and delivery commitments and $2.6bn in donor financing was pledged to enable millions more girls and women to use family planning information, services and supplies.';
         $general->function = 'The London Summit on Family Planning brought together partners representing country governments, donors, multilateral agencies, civil society and private sector organisations around an ambitious goal: to provide an additional 120 million women in the world’s poorest countries with access to voluntary family planning by 2020. Developing country leaders and other partners made transformative financial, policy and delivery commitments and $2.6bn in donor financing was pledged to enable millions more girls and women to use family planning information, services and supplies.';
        $general->save();


        

    }
}
