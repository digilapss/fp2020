<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
	public function getSingle($profile_id)
	{
		$profile = Profile::find($profile_id);
		return view('admin.profile.view', ['profile' => $profile]);
	}

	public function getUpdate($profile_id)
	{
		$profile = Profile::find($profile_id);
		return view('admin.profile.edit', ['profile' => $profile]);
	}

	public function postUpdate(Request $request)
	{
		$this->validate($request, [
			'title' => 'required',
			'body' => 'required'
		]);

		$profile = Profile::find($request['profile_id']);
		$profile->title - $request['title'];
		$profile->body = $request['body'];

		if($file = $request->hasFile('file')) {
            
            $file = $request->file('file') ;
            

            $fileName = $profile->id;
            $extension = $file->getClientOriginalExtension();

            $destinationPath = public_path().'/profile/' ;
            $file->move($destinationPath,$fileName.'.'.$extension);
            $profile->image = $fileName.'.'.$extension ;
        }

		$profile->update();

		return redirect()->route('admin.profile.view', ['profile_id' => $request['profile_id']])->with(['success' => 'Profile succesfully Updated!']); 
	}

	
}
?>