<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use App\Catpart;

class PartnerCountryController extends Controller
{
    public function getIndex()
    {
        $partners = Partner::where('catpart_id','=', 7)->get();
        return view('admin.partner-country.index', ['partners' => $partners]);
    }

    public function getCreate()
    {
        $catparts = Catpart::where('id','=', 7)->get();
        return view('admin.partner-country.create', ['catparts' => $catparts]);
    }

    public function postCreate(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:120'
        ]);

        $partners = new Partner();
        $partners->name = $request['name'];
        $partners->catpart_id = $request['catpart_id'];
        $partners->website = $request['website'];
        $partners->narrative = $request['narrative'];

        $partners->save();

        if($file = $request->hasFile('file')) {
            
            $file = $request->file('file') ;
            

            $fileName = $partners->id;
            $extension = $file->getClientOriginalExtension();

            $destinationPath = "/home/fpindone/public_html/partner/";
            $file->move($destinationPath,$fileName.'.'.$extension);
            $partners->logo = $fileName.'.'.$extension ;
        }

        $partners->save();


        return redirect()->route('admin.partnerContry.index')->with(['success' => 'Partner succesfully created!']);
    }

    public function getUpdate($partner_id)
    {
        $catparts = Catpart::where('id','=', 7)->get();
        $partners = Partner::find($partner_id);
        if(!$partners){
            return redirect()->route('admin.partner-country.index')->with(['fail' => 'Partner not Found!']);
        }
        return view('admin.partner-country.edit', ['partner' => $partners], ['catparts' => $catparts]);
    }

    public function postUpdate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:120'
        ]);

        $partners = Partner::find($request['partner_id']);
        $partners->name = $request['name'];
        $partners->catpart_id = $request['catpart_id'];
        $partners->website = $request['website'];
        $partners->narrative = $request['narrative'];

        if($file = $request->hasFile('file')) {
            
            $file = $request->file('file') ;
            

            $fileName = $request['partner_id'];
            $extension = $file->getClientOriginalExtension();

            $destinationPath = "/home/fpindone/public_html/partner/";
            $file->move($destinationPath,$fileName.'.'.$extension);
            $partners->logo = $fileName.'.'.$extension ;
        }


        $partners->update();

        return redirect()->route('admin.partnerContry.index')->with(['success' =>  $request['name']. 
            ' succesfully updated']);   
    }
    public function getDelete($partner_id)
    {
        $partners = Partner::find($partner_id);
        if(!$partners){
            return redirect()->route('admin.partnerContry.index')->with(['fail' => 'Partner not Found!']);
        }
        $partners->delete();
        return redirect()->route('admin.partnerContry.index')->with(['success' => 'Partner succesfully deleted']);

    }

}
