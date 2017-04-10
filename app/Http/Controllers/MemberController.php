<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{

	public function getCreate($group_id)
	{
		$group = $group_id; 
		return view('admin.member.create', ['group' => $group]);
	}

	public function postCreate(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|max:120|unique:members',
			'position' => 'required'
		]);

		$member = new Member();
		$member->name = $request['name'];
		$member->position = $request['position'];
		$member->group_id = $request['group_id']; 
		$member->save();

		return redirect()->route('admin.group.view', ['group_id' => $request['group_id']])->with(['success' => 'Member succesfully created!']);
	}

	public function getUpdate($member_id)
	{
		$member = Member::find($member_id);
		return view('admin.member.edit', ['member' => $member]);
	}

	public function postUpdate(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|max:120',
			'position' => 'required'
		]);

		$member = Member::find($request['member_id']);
		$member->name = $request['name'];
		$member->position = $request['position'];
		$member->group_id = $request['group_id'];
		$member->update();

		return redirect()->route('admin.group.view', ['group_id' => $request['group_id']])->with(['success' => 'Member succesfully Updated!']); 
	}

	public function getDelete($member_id)
	{
		$member = Member::find($member_id);
		$group_id = $member->group_id;
		$member->delete();
		
		return redirect()->route('admin.group.view', ['group_id' => $group_id])->with(['success' => 'Member succesfully Deleted!']); 

	}
}
?>