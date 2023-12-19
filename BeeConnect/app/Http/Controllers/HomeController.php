<?php

namespace App\Http\Controllers;

use App\Models\connection_req;
use App\Models\master_major;
use App\Models\master_organization;
use App\Models\master_region;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showDashboardAdmin(){
        $major = master_major::all();
        $region = master_region::all();
        $org = master_organization::all();
        // $listUser = User::join();
        $user = User::where('role_id','=',2)->get();

        return view('admin.adminUserPage', [
            'user' => $user,
            'region' =>$region,
            'major' => $major,
            'org' => $org
        ]);
    }

    public function showDiscover(Request $request)
    {
        // $users = User::leftJoin('connection_req', 'connection_req.user_id', '=', 'users.id')
        //     ->where('users.id', '!=', Auth::user()->id)
        //     ->select('users.*', 'connection_req.*') // Adjust the columns as needed
        //     ->get();

        $search = $request->search;

        if($search != ""){
            $users = User::where('first_name','LIKE',"%{$search}%")
                    ->orWhere('last_name', 'LIKE', "%{$search}%")
                    ->where('id', '!=', Auth::user()->id)
                    ->get();
        }
        else{
            $users = User::where('id', '!=', Auth::user()->id)->get();
        }

        $dataMajor = master_major::all();
        $dataOrg = master_organization::all();
        $dataRegion = master_region::all();

        return view('discover', [
            'region' => $dataRegion,
            'major' => $dataMajor,
            'org' => $dataOrg,
            'user' => $users
        ]);
    }
}
