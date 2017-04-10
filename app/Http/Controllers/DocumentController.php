<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use App\Category;

class DocumentController extends Controller
{

	public function getIndex()
	{
		$documents = Document::all();
		return view('admin.document.index', ['documents' => $documents]);
	}

	public function getCreate()
	{
		$categories = Category::all();
		return view('admin.document.create', ['categories' => $categories]);
	}

	public function postCreate(Request $request)
	{
		$this->validate($request, [
			'name' 			=> 'required|unique:documents',
			'description' 	=> 'required|max:150',
			'file' 			=> 'required',
			'category_id' 	=> 'required'
		]);

		$document = new Document();
		$document->name = $request['name'];
		$document->date = $request['date'];
		$document->description = $request['description'];
		$document->category_id = $request['category_id'];

		$document->save();

		if($file = $request->hasFile('file')) {
            
            $file = $request->file('file') ;
            

            $fileName = $document->id;
            $extension = $file->getClientOriginalExtension();

            $destinationPath = public_path().'/documents/' ;
            $file->move($destinationPath,$fileName.'.'.$extension);
            $document->file = $fileName.'.'.$extension ;
        }

		$document->save();

		return redirect()->route('admin.document.index')->with(['success' => 'Document succesfully created!']);
	}

	public function getUpdate($document_id)
	{
		$categories = Category::all();
		$document = Document::find($document_id);
		if(!$document){
			return redirect()->route('admin.document.index')->with(['fail' => 'Document not Found!']);
		}
		return view('admin.document.edit', ['document' => $document, 'categories' => $categories]);
	}

	public function postUpdate(Request $request)
	{
		$this->validate($request, [
			'name' 			=> 'required',
			'description' 	=> 'required|max:150',
			'category_id' 	=> 'required'
		]);

		$document = Document::find($request['document_id']);
		$document->name = $request['name'];
		$document->date = $request['date'];
		$document->description = $request['description'];
		$document->category_id = $request['category_id'];

						
		if($file = $request->hasFile('file')) {
            
            $file = $request->file('file') ;
            
            $fileName = $request['id'];
            $extension = $file->getClientOriginalExtension();

            $destinationPath = public_path().'/documents/' ;
            $file->move($destinationPath,$fileName.'.'.$extension);
            $document->file = $fileName.'.'.$extension ;
        }

		$document->update();

		return redirect()->route('admin.document.index')->with(['success' => 'Document succesfully updated']); 
	}

	public function getDelete($document_id)
	{
		$document = Document::find($document_id);
		if(!$document){
			return redirect()->route('admin.document.index')->with(['fail' => 'Document not Found!']);
		}
		\File::Delete( public_path().'/documents/'.$document->file);
		$document->delete();

		return redirect()->route('admin.document.index')->with(['success' => 'Document succesfully deleted']);

	}
}
?>