<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catpart;

class CatpartController extends Controller
{

	public function getIndex()
	{
		$categories = Catpart::all();
		return view('admin.catpart.index', ['categories' => $categories]);
	}

	public function getCreate()
	{
		return view('admin.catpart.create');
	}

	public function postCreate(Request $request)
	{
		$this->validate($request, [
			'title' => 'required|max:120|unique:catparts'
		]);

		$category = new Catpart();
		$category->title = $request['title'];
		$category->save();

		return redirect()->route('admin.catpart.index')->with(['success' => 'Category succesfully created!']);
	}

	public function getUpdate($category_id)
	{
		$category = Catpart::find($category_id);
		if(!$category){
			return redirect()->route('admin.catpart.index')->with(['fail' => 'Category not Found!']);
		}
		return view('admin.catpart.edit', ['category' => $category]);
	}

	public function postUpdate(Request $request)
	{
		$this->validate($request, [
			'title' => 'required|max:120'
		]);

		$category = Catpart::find($request['catpart_id']);
		$category->title = $request['title'];
		$category->update();

		return redirect()->route('admin.catpart.index')->with(['success' => 'Category succesfully updated']); 
	}

	public function getDelete($catpart_id)
	{
		$category = Catpart::find($catpart_id);
		if(!$category){
			return redirect()->route('admin.catpart.index')->with(['fail' => 'Category not Found!']);
		}
		$category->delete();
		return redirect()->route('admin.catpart.index')->with(['success' => 'Category succesfully deleted']);

	}
}
?>