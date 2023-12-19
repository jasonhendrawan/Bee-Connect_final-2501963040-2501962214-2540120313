<?php

namespace App\Http\Controllers;

use App\Models\master_region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function viewRegion(){
        $region = master_region::all();
        return view('adminRegionPage', ['region'=>$region]);
    }

    public function addRegion(Request $request){

        $addRegion = master_region::create([
            'region_name' =>$request->region_name
        ]);

        return redirect()->back();
    }

    public function deleteRegion(Request $request, $id){
        $delete = master_region::where('id', $id)->delete();

        return redirect()->back();
    }
}
