<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;

class PartnerController extends Controller
{

	public function getIndex()
	{
		$partners = Partner::all();
		return view('admin.partner.index', ['partners' => $partners]);
	}

	public function getCreate()
	{
		return view('admin.partner.create');
	}

	public function postCreate(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|max:120|unique:partners'
		]);

		$partners = new Partner();
		$partners->name = $request['name'];
		$partners->website = $request['website'];
		$partners->narrative = $request['narrative'];

		if($file = $request->hasFile('file')) {
            
            $file = $request->file('file') ;
            

            $fileName = $request['name'];
            $extension = $file->getClientOriginalExtension();

            $destinationPath = public_path().'/partner/' ;
            $file->move($destinationPath,$fileName.'.'.$extension);
            $partners->logo = $fileName.'.'.$extension ;
        }


		$partners->save();

		return redirect()->route('admin.partner.index')->with(['success' => 'Partner succesfully created!']);
	}

	public function getUpdate($partner_id)
	{
		$partners = Partner::find($partner_id);
		if(!$partners){
			return redirect()->route('admin.partner.index')->with(['fail' => 'Partner not Found!']);
		}
		return view('admin.partner.edit', ['partner' => $partners]);
	}

	public function postUpdate(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|max:120'
		]);

		$partners = Partner::find($request['partner_id']);
		$partners->name = $request['name'];
		$partners->website = $request['website'];
		$partners->narrative = $request['narrative'];

		if($file = $request->hasFile('file')) {
            
            $file = $request->file('file') ;
            

            $fileName = $request['name'];
            $extension = $file->getClientOriginalExtension();

            $destinationPath = public_path().'/partner/' ;
            $file->move($destinationPath,$fileName.'.'.$extension);
            $partners->logo = $fileName.'.'.$extension ;
        }


		$partners->update();
		
		return redirect()->route('admin.partner.index')->with(['success' =>  $request['name']. 
			' succesfully updated']); 

		
	}

	public function getDelete($partner_id)
	{
		$partners = Partner::find($partner_id);
		if(!$partners){
			return redirect()->route('admin.partner.index')->with(['fail' => 'Partner not Found!']);
		}
		$partners->delete();
		return redirect()->route('admin.partner.index')->with(['success' => 'Partner succesfully deleted']);

	}
}
?>