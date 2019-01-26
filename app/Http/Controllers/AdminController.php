<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;
use Session;


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

		
		if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
			$user = User::where('email', $request->email)->first();

			Session::set('user', $user);
			Session::set('limit', $user->limit);
			Session::set('idUser', $user->id);

			if($user->limit == 1)
			{
				return redirect()->route('admin.index');
			}else{
				return redirect()->route('frontend.index');
			}

		}
		return redirect()->back()->with(['fail' => 'Could not log you in']);
		
	}

	public function getLogout()
	{
		Auth::logout();
		Session::flush();
		return redirect()->route('frontend.index');
	}
}
?>