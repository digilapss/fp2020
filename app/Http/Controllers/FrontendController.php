<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use App\Group;
use App\Member;
use App\Chair;
use App\Docugroup;
use App\Uevent;
use App\Intro;
use App\News;
use App\Document;
use App\Profile;

class FrontendController extends Controller
{
	public function getIndex()
	{
		//get working group
		$strategy 		= Group::find(4);
		$right			= Group::find(5);
		$data			= Group::find(6);

		//short working group
		$strategyshort 	= $this->shortenText($strategy->narrative, 15);
		$rightshort 	= $this->shortenText($right->narrative, 15);
		$datashort 		= $this->shortenText($data->narrative, 13);

		//Upcoming event
		$uevents 		= Uevent::orderBy('date','desc')->take(1)->get();

		//Intro
		$intro 			= Intro::find(1);

		//News and Update
		$news 			= News::orderBy('date', 'desc')->take(2)->get();

		//profile
		$global 		= Profile::find(1);
		$indonesia		= Profile::find(2);

		$globalshort	= $this->shortenText($global->body, 15);
		$indonesiashort	= $this->shortenText($indonesia->body, 17);	

		foreach ($news as $new) {
			$new->body = $this->shortenText($new->body, 18);
		}

		return view('frontend.index', compact('strategyshort','rightshort', 'datashort', 'uevents', 'intro', 'news',
											  'globalshort', 'indonesiashort','global','indonesia'));
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

	public function getContact()
	{
		return view('frontend.contact');
	}

	public function getGroup($group_id)
	{
		$group = Group::find($group_id);
		$members = Member::where('group_id', '=', $group_id)->get();
		$chairs = Chair::where('group_id', '=', $group_id)->get();
		$docugroups = Docugroup::where('group_id', '=', $group_id)->orderBy('date', 'desc')->get();


		return view('frontend.group',
					compact('group', 'members', 'docugroups', 'chairs'));
	}

	public function getEvent()
	{
		$uevents = Uevent::orderBy('date', 'desc')->paginate(3);
		return view('frontend.uevent', compact('uevents'));
	}

	public function getNews()
	{
		$news = News::orderBy('date', 'desc')->paginate(5);
// 		foreach ($news as $new) {
// 			$new->body = $this->shortenText($new->body, 30);
// 		}
		return view('frontend.news', compact('news'));
	}

	public function getSingleNews($news_id)
	{
		$news = News::find($news_id);
		return view('frontend.singnews', compact('news'));
	}

	public function getDocument()
	{
		$strategies = Document::where('category_id', '=', 1)->orderBy('date', 'desc')->get();
		$reports 	= Document::where('category_id', '=', 3)->orderBy('date', 'desc')->get();
		$ppts 		= Document::where('category_id', '=', 4)->orderBy('date', 'desc')->get();
		$tors 		= Document::where('category_id', '=', 5)->orderBy('date', 'desc')->get();

		return view('frontend.documentpage', compact('strategies', 'workplans', 'reports', 'ppts', 'tors'));
	}

	public function getProfile($profile_id)
	{
		$profile = Profile::find($profile_id);
		// dd($profile->get()->toArray());

		return view('frontend.profile', compact('profile'));
	}

	public function getFocal()
	{
		$sixs		= Partner::where('catpart_id', '=', 6)->get();
		return view('frontend.focal', compact('sixs'));
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

	public function postLogin(Request $request)
	{
		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required'
		]);

		
		if(!Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
			return redirect()->back()->with(['fail' => 'Could not log you in']);
		}
		return redirect()->route('frontend.document');
	}

}