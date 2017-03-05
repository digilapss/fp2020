<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Member;

class GroupController extends Controller
{

	public function getView($group_id)
	{
		$groups = Group::find($group_id);
		$members = Member::where('group_id', '=', $group_id)->orderBy('name', 'Asc')->get();


		return view('admin.group.view', compact('groups', 'members'));
	}

	public function getUpdate($group_id)
	{
		$groups = Group::find($group_id);
		return view('admin.group.edit', ['groups' => $groups]);
	}

	public function postUpdate(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|max:120'
		]);

		$groups = Group::find($request['group_id']);
		$groups->name = $request['name'];
		$groups->role = $request['role'];
		$groups->function = $request['function'];
		$groups->update();

		return redirect()->route('admin.group.view', ['group_id' => $request['group_id']])->with(['success' =>  $request['name']. 
			' succesfully updated']); 
	}

}
?>