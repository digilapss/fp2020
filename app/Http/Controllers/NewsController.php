<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Carbon\Carbon;

class NewsController extends Controller
{

	public function getIndex()
	{
		$news = News::orderBy('date', 'desc')->get();
		return view('admin.news.index', ['news' => $news]);
	}

	public function getCreate()
	{
		return view('admin.news.create');
	}

	public function postCreate(Request $request)
	{
		$this->validate($request, [
			'title' => 'required|max:120|unique:catparts',
			'body'	=> 'required'
		]);

		$news = new News();
		$news->title 	= $request['title'];
		$news->date 	= Carbon::now();
		$news->body 	= $request['body'];
		$news->save();

		if($file = $request->hasFile('file')) {
            
            $file = $request->file('file') ;
            

            $fileName = $news->id;
            $extension = $file->getClientOriginalExtension();

            $destinationPath = public_path().'/documents/news/' ;
            $file->move($destinationPath,$fileName.'.'.$extension);
            $news->foto = $fileName.'.'.$extension ;
        }

		$news->save();

		return redirect()->route('admin.news.index')->with(['success' => 'News succesfully created!']);
	}

	public function getUpdate($news_id)
	{
		$news = News::find($news_id);
		if(!$news){
			return redirect()->route('admin.news.index')->with(['fail' => 'News not Found!']);
		}
		return view('admin.news.edit', ['news' => $news]);
	}

	public function postUpdate(Request $request)
	{
		$this->validate($request, [
			'title' => 'required|max:120|unique:catparts',
			'body'	=> 'required'
		]);

		$news = News::find($request['news_id']);
		$news->title = $request['title'];
		$news->body  = $request['body']; 

		if($file = $request->hasFile('file')) {
            
            $file = $request->file('file') ;
            
            $fileName = $request['news_id'];
            $extension = $file->getClientOriginalExtension();

            $destinationPath = public_path().'/documents/news/' ;
            $file->move($destinationPath,$fileName.'.'.$extension);
            $news->foto = $fileName.'.'.$extension ;
        }

		$news->update();

		return redirect()->route('admin.news.index')->with(['success' => 'News succesfully updated']); 
	}

	public function getDelete($news_id)
	{
		$news = News::find($news_id);
		if(!$news){
			return redirect()->route('admin.news.index')->with(['fail' => 'News not Found!']);
		}

		\File::Delete( public_path().'/documents/news/'.$news->foto);
		$news->delete();
		return redirect()->route('admin.news.index')->with(['success' => 'News succesfully deleted']);

	}

	public function getSingle($news_id)
	{
		$news = News::find($news_id);

		return view('admin.news.view', compact('news'));
	}
}
?>