<?php

namespace App\Http\Controllers;

use App\Models\master_major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    //
    public function viewMajor(){
        $major = master_major::all();
        return view('adminMajorPage', ['major'=>$major]);
    }

    public function addMajor(Request $request){

        $addMajor = master_major::create([
            'major_name' =>$request->major_name
        ]);
        return redirect()->back();
    }

    public function deleteMajor(Request $request, $id){
        $delete = master_major::where('id', $id)->delete();

        return redirect()->back();
    }
}
