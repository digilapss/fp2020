<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docugroup;


class DocugroupController extends Controller
{

	public function getCreate($group_id)
	{
		$group = $group_id; 
		return view('admin.docugroup.create', ['group' => $group]);
	}

	public function postCreate(Request $request)
	{
		$this->validate($request, [
			'name' 			=> 'required|max:120|unique:docugroups',
			'date' 	        => 'required',
			'file' 			=> 'required'
		]);

        $publicFolder = 'documents/docugroup/';
        $destinationDir = "/home/fpindone/public_html/documents/docugroup/";
        // dd($destinationDir);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move($destinationDir, $filename);
        }		

		$document = new Docugroup();
		$document->name = $request['name'];
		$document->date = $request['date'];
		$document->category = $request['category'];
		$document->group_id = $request['group_id'];
		$document->file     = ($request->file) ? $publicFolder . $filename : null;

		$document->save();

		return redirect()->route('admin.group.view', ['group_id' => $request['group_id']])->with(['success' => 'Document succesfully created!']);
	}

	public function getUpdate($docugroup_id)
	{
		$document = Docugroup::find($docugroup_id);
		return view('admin.docugroup.edit', ['document' => $document]);
	}

	public function postUpdate(Request $request)
	{
		$this->validate($request, [
			'name' 			=> 'required|max:120'
		]);

        $publicFolder = 'documents/docugroup/';
        $destinationDir = "/home/fpindone/public_html/documents/docugroup/";
        
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move($destinationDir, $filename);
        }

		$document = Docugroup::find($request['docugroup_id']);
		$document->name = $request['name'];
		$document->date = $request['date'];
		$document->file   = ($request->file) ? $publicFolder . $filename : $document->file;
		$document->category = $request['category'];

		$document->save();

		return redirect()->route('admin.group.view', ['group_id' => $request['group_id']])->with(['success' => 'Document succesfully updated!']); 
	}

	public function getDelete($docugroup_id)
	{
		$document = Docugroup::find($docugroup_id);
		$group_id = $document->group_id;
		\File::Delete( public_path().'/documents/docugroup/'.$document->file);
		$document->delete();

		return redirect()->route('admin.group.view', ['group_id' => $group_id])->with(['success' => 'Document succesfully Deleted!']); 

	}
}
?>