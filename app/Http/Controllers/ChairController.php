<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Chair;

class ChairController extends Controller
{
    public function getCreate($group_id)
    {
        $group = $group_id; 
        return view('admin.chair.create', ['group' => $group]);
    }

    public function postCreate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:120|unique:members',
            'position' => 'required'
        ]);

        $chair = new Chair();
        $chair->name = $request['name'];
        $chair->position = $request['position'];
        $chair->group_id = $request['group_id']; 
        $chair->save();

        return redirect()->route('admin.group.view', ['group_id' => $request['group_id']])->with(['success' => 'Chair succesfully created!']);
    }

    public function getUpdate($member_id)
    {
        $chair = Chair::find($member_id);
        return view('admin.chair.edit', ['chair' => $chair]);
    }

    public function postUpdate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:120',
            'position' => 'required'
        ]);

        $chair = Chair::find($request['member_id']);
        $chair->name = $request['name'];
        $chair->position = $request['position'];
        $chair->group_id = $request['group_id'];
        $chair->update();

        return redirect()->route('admin.group.view', ['group_id' => $request['group_id']])->with(['success' => 'Chair succesfully Updated!']); 
    }

    public function getDelete($member_id)
    {
        $chair = Chair::find($member_id);
        $group_id = $chair->group_id;
        $chair->delete();
        
        return redirect()->route('admin.group.view', ['group_id' => $group_id])->with(['success' => 'Chair succesfully Deleted!']); 

    }
}
