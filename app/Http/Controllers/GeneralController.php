<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\General;

class GeneralController extends Controller
{

	public function getIndex()
	{
		$generals = General::all();
		return view('admin.general.index', ['generals' => $generals]);
	}

	public function getCreate()
	{
		return view('admin.general.create');
	}

	public function postCreate(Request $request)
	{
		$this->validate($request, [
			'title' => 'required|max:120|unique:uevents',
			'body' => 'required'
		]);

		$generals = new General();
		$generals->title = $request['title'];
		$generals->body = $request['body'];
		$generals->save();

		return redirect()->route('admin.general.index')->with(['success' => 'General Information succesfully created!']);
	}

	public function getUpdate($general_id)
	{
		$generals = General::find($general_id);
		if(!$generals){
			return redirect()->route('admin.general.index')->with(['fail' => 'General Information not Found!']);
		}
		return view('admin.general.edit', ['generals' => $generals]);
	}

	public function postUpdate(Request $request)
	{
		$this->validate($request, [
			'title' => 'required|max:120|unique:uevents',
			'body' => 'required'
		]);

		$generals = General::find($request['general_id']);
		$generals->title = $request['title'];
		$generals->body = $request['body'];
		$generals->update();

		return redirect()->route('admin.general.index')->with(['success' => 'General Information succesfully updated']); 
	}

	public function getDelete($general_id)
	{
		$generals = General::find($general_id);
		if(!$generals){
			return redirect()->route('admin.general.index')->with(['fail' => 'General Information not Found!']);
		}
		$generals->delete();
		return redirect()->route('admin.general.index')->with(['success' => 'General Information succesfully deleted']);

	}
}
?>