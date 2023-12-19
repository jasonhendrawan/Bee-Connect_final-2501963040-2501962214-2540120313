<?php

namespace App\Http\Controllers;

use App\Models\master_organization;
use Illuminate\Http\Request;

class OrgController extends Controller
{
    public function viewOrganization(){
        $org = master_organization::all();
        return view('adminOrgPage', ['org'=>$org]);
    }

    public function addOrganization(Request $request){

        $addOrganization = master_organization::create([
            'org_name' =>$request->org_name
        ]);
        return redirect()->back();
    }

    public function deleteOrg(Request $request, $id){
        $delete = master_organization::where('id', $id)->delete();

        return redirect()->back();
    }
}
