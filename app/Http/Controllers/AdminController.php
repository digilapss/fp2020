<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;


class AdminController extends Controller
{
	public function getIndex()
	{
		return view('admin.index');
	}

	public function getLogin()
	{
		return view('admin.login');
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
		
		
		return redirect()->route('admin.index');
		
	}

	public function getLogout()
	{
		Auth::logout();
		return redirect()->route('frontend.index');
	}
}
?>