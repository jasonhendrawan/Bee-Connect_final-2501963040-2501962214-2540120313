<?php

namespace App\Http\Controllers;

use App\Models\connection_req;
use App\Models\master_major;
use App\Models\master_region;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function friend()
    {
        $major = master_major::all();
        $region = master_region::all();
        $user = User::all();


        $connectorIds = connection_req::select('ID', 'connector_id')
            ->where('status', 'Pending')
            ->where('user_id', Auth::user()->id)
            ->get();


        $connectorIds2 = connection_req::select('ID', 'connector_id')
            ->where('status', 'Accepted')
            ->where('user_id', Auth::user()->id)
            ->get();

        $dataRequest = [];
        $dataRequest2 = [];
        foreach ($connectorIds as $c) {
            array_push($dataRequest, $c);
        }

        foreach ($connectorIds2 as $c) {
            array_push($dataRequest2, $c);
        }

        return view('friend', [
            'region' => $region,
            'major' => $major,
            'request' => $dataRequest,
            'request2' => $dataRequest2,
            'user' => $user
        ]);
    }

    public function approve( $id)
    {
        $update = connection_req::where('connection_req.ID', $id)
            ->update(['status' => 'Accepted']);

        return redirect()->back();
    }

    public function reject($id)
    {
        connection_req::where('connection_req.ID', $id)
            ->update(['status' => 'Rejected']);

        return redirect()->back();
    }

    public function requestFriend($id){

        $check = connection_req::where('user_id', Auth::user()->id)
        ->where('connector_id', $id)
        ->whereIn('status', ['Pending', 'Accepted'])
        ->get();

        if($check) {
            return redirect()->back()->withErrors('Already Have Connection/Waiting With This User!');
            // return redirect()->back()->with('error','Already Have Connection/Waiting With This User!');
        }

        connection_req::create([
            'user_id' => Auth::user()->id,
            'connector_id' => $id,
            'status' => 'Pending'
        ]);

        return redirect()->back();
    }
}
