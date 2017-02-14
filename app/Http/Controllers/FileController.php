<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class FileController extends Controller {
    
    public function getIndex(){
        
        $products = Product::all();
        return view('admin.files.index', ['products' => $products]);
    }
    
    public function getCreate(){
        return view('admin.files.create');
    }
    
    public function postCreate(Request $request) {
        
        $this->validate($request, [
            'name' => 'required',
            'details' => 'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $product = new Product($request->input()) ;
     
         if($file = $request->hasFile('product_image')) {
            
            $file = $request->file('product_image') ;
            
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
            $product->product_image = $fileName ;
        }
        $product->save() ;
         return redirect()->route('admin.files.index')
                        ->with('success','You have successfully uploaded your files');
    }
    
}