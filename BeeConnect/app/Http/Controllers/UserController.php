<?php

namespace App\Http\Controllers;

use App\Models\master_major;
use App\Models\master_organization;
use App\Models\master_region;
use App\Models\role_management;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function profile()
    {

        // $major = User::join('master_major', 'master_major.id', '=', 'users.major_id')
        // ->where('users.id', '=', Auth::user()->id)
        // ->select('master_major.*');

        $major = master_major::where('master_major.id', '=', Auth::user()->major_id)->first();

        $region = User::join('master_region', 'master_region.id', '=', 'users.region_id')
        ->where('users.id', Auth::user()->id)
        ->select('master_region.region_name')
        ->first();

        $org = User::join('master_organization', 'master_organization.id', '=', 'users.org_id')
        ->where('users.id', Auth::user()->id)
        ->select('master_organization.*')
        ->first();

        $dataOrg = master_organization::all();

        return view('profile', [
            'major' => $major,
            'region' => $region,
            'org' => $org,
            'dataOrg' => $dataOrg
        ]);
    }


    public function uploadPhoto(Request $request){
        $this->validate($request, [
            'imageURL' => 'required|image|mimes:png,jpg'
        ]);

        $update = DB::table('users')->where('id', '=', Auth::user()->id)
        ->update([
            'image' => $request->imageURL->getClientOriginalName(),
        ]);

        $path = 'assets/profile';
        $image = $request->imageURL->getClientOriginalName();
        $request->imageURL->move(public_path($path), $image);

        return redirect('/profile')->with([
            'success' => 'Photo has been updated successfully'
        ]);
    }

    public function updateProfile(Request $request){
        $id_user = User::find(Auth::user()->id);

        $update = $id_user->update([
            'hobby1' => $request->hobby1,
            'hobby2' => $request->hobby2,
            'org_id' => $request->org,
            'instagram' => $request->instagram,
            'whatsapp' => $request->whatsapp
        ]);

        if ($update) {
            return redirect('/profile')->with('success', 'Resource updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update resource');
        }
    }

    public function deletePhoto(Request $request){
        $delete = DB::table('users')
        ->where('id', '=', Auth::user()->id)
        ->update(['image'=>NULL]);

        return redirect('/profile')->with([
            'success' => 'Photo has been deleted'
        ]);
    }

    public function deleteUser(Request $request, $id){
        $delete = User::where('id', $id)->delete();

        return redirect()->back();
    }
}

