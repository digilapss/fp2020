<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\General;

class FrontendController extends Controller
{
	public function getIndex()
	{
		//Commitment
		$program 		= General::find(1);
		$financial		= General::find(2);
		$policy			= General::find(3);
		$objective		= General::find(4);

		$programshort = $this->shortenText($program->body, 14);
		$financialshort = $this->shortenText($financial->body, 14);
		$policyshort = $this->shortenText($policy->body, 14);
		$objectiveshort = $this->shortenText($objective->body, 14);
		
		return view('frontend.index',
					compact('program','financial','policy','objective',
							'programshort','financialshort', 'policyshort','objectiveshort')
				);
	}

	public function getWorking()
	{
		return view('frontend.working');
	}

	private function shortenText($text, $words_count)
	{
		if(str_word_count($text, 0) > $words_count){
			$words = str_word_count($text, 2);
			$pos = array_keys($words);
			$text = substr($text, 0, $pos[$words_count]) . '...';
		}
		return $text;
	}
}