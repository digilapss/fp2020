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
        $general->id = 4;
        $general->name = 'FP Strategy';
        $general->narrative = 'The main purpose of the Family Planning Strategy working group is to develop a framework for a rights-based national family planning strategy, building on existing strategies and plans, to accelerate progress towards achieving the National Mid-term Development Plan (RPJMN) targets. The members of this working group includes government agencies, professional organizations, UNFPA, and the Working Group on Rights and Empowerment.';
        $general->save();

        $general = new \App\Group();
        $general->id = 5;
        $general->name = 'Rights & Empowerment';
        $general->narrative = 'In complementing the work of the Family Planning Working Group, the main purpose of the Working Group on Rights and Empowerment is to ensure that the framework for accelerating progress towards family planning is rights-based. The working group aims to include the perspective of clients and ensure comprehensive and accurate information as well as informed consent. Similar to the Working Group on Family Planning Strategy, this working group is also comprised of a diverse membership, including representatives from civil society, religious, medical, and youth groups.';
        $general->save();

        $general = new \App\Group();
        $general->id = 6;
        $general->name = 'Data, Monitoring and Evaluation';
        $general->narrative = 'Following the establishment of the Working Groups on Family Planning Strategy and Rights and Empowerment, the Indonesian FP2020 Country Committee is now in the process of establishing the Working Group on Data, Monitoring and Evaluation. The purpose of this working group is to provide technical advice and support to Indonesia’s FP2020 Country Committee to facilitate consensus on data to be used for monitoring progress towards reaching the FP2020 goal. Members for this working group will consist of representatives from government agencies, universities, and international NGOs.';
        $general->save();


        

    }
}
