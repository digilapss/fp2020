<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uevent;

class UeventController extends Controller
{

	public function getIndex()
	{
		$uevents = Uevent::all();
		return view('admin.uevent.index', ['uevents' => $uevents]);
	}

	public function getCreate()
	{
		return view('admin.uevent.create');
	}

	public function postCreate(Request $request)
	{
		$this->validate($request, [
			'title' => 'required|max:120|unique:uevents',
			'date' => 'required|max:80',
			'place' => 'required|max:80',
			'body' => 'required|max:150'
		]);

		$uevent = new Uevent();
		$uevent->title = $request['title'];
		$uevent->date = $request['date'];
		$uevent->place = $request['place'];
		$uevent->body = $request['body'];
		$uevent->save();

		return redirect()->route('admin.uevent.index')->with(['success' => 'Event succesfully created!']);
	}

	public function getUpdate($uevent_id)
	{
		$uevent = Uevent::find($uevent_id);
		if(!$uevent){
			return redirect()->route('admin.uevent.index')->with(['fail' => 'Event not Found!']);
		}
		return view('admin.uevent.edit', ['uevent' => $uevent]);
	}

	public function postUpdate(Request $request)
	{
		$this->validate($request, [
			'title' => 'required|max:120',
			'date' => 'required|max:80',
			'place' => 'required|max:80',
			'body' => 'required|max:150'
		]);

		$uevent = Uevent::find($request['uevent_id']);
		$uevent->title = $request['title'];
		$uevent->date = $request['date'];
		$uevent->place = $request['place'];
		$uevent->body = $request['body'];
		$uevent->update();

		return redirect()->route('admin.uevent.index')->with(['success' => 'Event succesfully updated']); 
	}

	public function getDelete($uevent_id)
	{
		$uevent = Uevent::find($uevent_id);
		if(!$uevent){
			return redirect()->route('admin.uevent.index')->with(['fail' => 'Event not Found!']);
		}
		$uevent->delete();
		return redirect()->route('admin.uevent.index')->with(['success' => 'Event succesfully deleted']);

	}
}
?>