<?php 

namespace App\Http\Controllers;

use App\Post;

class AdminController extends Controller
{
	public function getIndex()
	{
		return view('admin.index');
	}
}
?>