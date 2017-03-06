<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\General;
use App\Document;
use App\Category;
use App\Uevent;
use App\Partner;
use App\Group;
use App\Member;
use App\Docugroup;
use App\About;

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


		//Document
		$strategies = Document::where('category_id', '=', 1)->orderBy('date', 'desc')->take(2)->get();
		$workplans 	= Document::where('category_id', '=', 2)->orderBy('date', 'desc')->take(2)->get();
		$reports 	= Document::where('category_id', '=', 3)->orderBy('date', 'desc')->take(2)->get();
		$ppts 		= Document::where('category_id', '=', 4)->orderBy('date', 'desc')->take(2)->get();
		$tors 		= Document::where('category_id', '=', 5)->orderBy('date', 'desc')->take(2)->get();

		//Uevent
		$uevents = Uevent::orderBy('date','desc')->take(4)->get();

		//about
		$global		= About::find(1);
		$indonesia 	= About::find(2);

		$globalshort = $this->shortenText($global->description, 23);
		$indonesiashort = $this->shortenText($indonesia->description, 25);

		
		return view('frontend.index',
					compact('program','financial','policy','objective',
							'programshort','financialshort', 'policyshort','objectiveshort',
							'strategies', 'workplans', 'reports', 'ppts', 'tors', 'uevents',
							'global', 'indonesia', 'globalshort', 'indonesiashort')
				);
	}

	public function getWorking()
	{
		return view('frontend.working');
	}

	public function getDocument($category_id)
	{
		$category = Category::find($category_id);
		$documents = Document::where('category_id', '=', $category_id)->orderBy('date', 'desc')->get();

		return view('frontend.document', ['documents' => $documents], ['category' => $category]);
	}

	public function getEvent()
	{
		$uevents = Uevent::orderBy('date','desc')->get();

		return view('frontend.event', ['events' => $uevents]);
	}

	public function getPartner()
	{
		$partners = Partner::all();

		$ones		= Partner::where('catpart_id', '=', 1)->get();
		$twos 		= Partner::where('catpart_id', '=', 2)->get();
		$threes 	= Partner::where('catpart_id', '=', 3)->get();
		$fours 		= Partner::where('catpart_id', '=', 4)->get();
		$fives 		= Partner::where('catpart_id', '=', 5)->get();
		$sixs		= Partner::where('catpart_id', '=', 6)->get();

		return view('frontend.partnerpage',
					compact('ones', 'twos', 'threes', 'fours', 'fives', 'sixs')
				);
	}

	public function getCommitment()
	{
		$program 		= General::find(1);
		$financial		= General::find(2);
		$policy			= General::find(3);
		$objective		= General::find(4);

		return view('frontend.commitment',
					compact('program','financial','policy','objective'
							)
				);
	}

	public function getGroup($group_id)
	{
		$group = Group::find($group_id);
		$members = Member::where('group_id', '=', $group_id)->get();
		$docugroups = Docugroup::where('group_id', '=', $group_id)->orderBy('date', 'desc')->get();


		return view('frontend.group',
					compact('group', 'members', 'docugroups'
							)
				);
	}

	public function getAbout($about_id)
	{
		$abouts		= About::find($about_id);
		$group     = Group::find(3);

		$members = Member::where('group_id', '=', 1)->get();
		$docugroups = Docugroup::where('group_id', '=', 1)->orderBy('date', 'desc')->get();

		$wg1 = Group::find(4);
		$wg2 = Group::find(5);
		$wg3 = Group::find(6);

		
		return view('frontend.about', compact('abouts', 'wg1', 'wg2', 'wg3','group', 'members', 'docugroups'));

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