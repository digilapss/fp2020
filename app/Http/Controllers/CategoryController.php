<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

	public function getIndex()
	{
		$categories = Category::all();

		return view('admin.category.index', ['categories' => $categories]);
	}

	public function getCreate()
	{
		return view('admin.category.create');
	}

	public function postCreate(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|max:120|unique:categories'
		]);

		$category = new Category();
		$category->name = $request['name'];
		$category->save();

		return redirect()->route('admin.category.index')->with(['success' => 'Category succesfully created!']);
	}

	public function getUpdate($category_id)
	{
		$category = Category::find($category_id);
		if(!$category){
			return redirect()->route('admin.category.index')->with(['fail' => 'Category not Found!']);
		}
		return view('admin.category.edit', ['category' => $category]);
	}

	public function postUpdate(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|max:120'
		]);

		$category = Category::find($request['category_id']);
		$category->name = $request['name'];
		$category->update();

		return redirect()->route('admin.category.index')->with(['success' => 'Category succesfully updated']); 
	}

	public function getDelete($category_id)
	{
		$category = Category::find($category_id);
		if(!$category){
			return redirect()->route('admin.category.index')->with(['fail' => 'Category not Found!']);
		}
		$category->delete();
		return redirect()->route('admin.category.index')->with(['success' => 'Category succesfully deleted']);

	}
}
?>