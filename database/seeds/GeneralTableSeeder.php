<?php

use Illuminate\Database\Seeder;

class GeneralTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $general = new \App\General();
        $general->id = 1;
        $general->title = 'Program & Service Delivery';
        $general->body = 'Indonesia will include post-partum family planning services as part of its national childbirth insurance scheme. The country will broaden access and choice, especially in poorer regions, by strengthening public and private clinic services and provision of long-acting and permanent methods of family planning. Indonesia will improve 23,500 FP clinics between 2006 and 2014, and increase mobile family services in remote areas. '; 
        $general->save();

        $general = new \App\General();
        $general->id = 2;
        $general->title = 'Financial';
        $general->body = 'The government commits to maintaining its investment in finances for family planning programs, which has increased from US $65.9 million in 2006 to US $263.7 million in 2012. The government has reallocated resources to the most densely populated provinces and districts where the TFR is high. They are also concentrating on the harder to reach populations in rural areas and smaller islands.'; 
        $general->save();

        $general = new \App\General();
        $general->id = 3;
        $general->title = 'Policy & Political';
        $general->body = 'Indonesia is currently developing a national family planning and population strategy to improve quality of human resources and increase demand for family planning services. Indonesia will include family planning services and supplies free of charge throughout the country as part of its universal health coverage program, starting January 1st, 2014. The country is investing in South-South exchange to share experiences.'; 
        $general->save();

        $general = new \App\General();
        $general->id = 4;
        $general->title = 'Objective';
        $general->body = 'Over half of Indonesia\'s women of reproductive age are using contraception to plan their families, with strong political leadership and a national movement for reproductive health and family planning. This has helped improve economic growth and reduce poverty through the resulting demographic dividend.

            Key factors have been support from religious leaders, participation of the private sector and quality of care, and communications campaigns. The government right now provides free services to 7 of 33 provinces since 2010. 

            Indonesia\'s objective is to reduce TFR (note: the government-cited TFR at the time the commitment was 2.3 births per woman).'; 
        $general->save();

    }
}
