<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intro;

class IntroController extends Controller
{
	public function getSingle()
	{
		$intro = Intro::find(1);
		return view('admin.intro.view', ['intro' => $intro]);
	}

	public function getUpdate($intro_id)
	{
		$intro = Intro::find($intro_id);
		return view('admin.intro.edit', ['intro' => $intro]);
	}

	public function postUpdate(Request $request)
	{
		$this->validate($request, [
			'narrative' => 'required'
		]);

		$intro = Intro::find($request['intro_id']);
		$intro->narrative = $request['narrative'];
		$intro->update();

		return redirect()->route('admin.intro.view', ['intro_id' => $request['intro_id']])->with(['success' => 'Introduction succesfully Updated!']); 
	}

	
}
?>