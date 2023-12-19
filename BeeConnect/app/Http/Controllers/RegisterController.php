<?php

namespace App\Http\Controllers;

use App\Models\master_major;
use App\Models\master_region;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegister(){
        return view('auth.register');
    }

    public function sendMajorRegion(){
        $major = master_major::all();
        $region = master_region::all();

        return view('auth.register', [
            'region' => $region,
            'major' => $major,
        ]);
    }

    public function signup(Request $request)
    {
        $major = master_major::all();
        $region = master_region::all();
        // role, name, student id, email, password, confirm password, gender, major, region
        $credentials = $request->validate([
            'first_name' => 'required|string|max:250|min:3',
            'last_name' => 'required|string|max:250|min:3',
            'student_id' => 'required|string|max:11',
            'email' => 'required|email|max:250|unique:users|ends_with:@binus.ac.id',
            'password' => 'required|min:8|confirmed',
            'gender' => 'required',
            'major' => 'required',
            'region' => 'required'
        ]);

        $user = User::create([
            'role_id' => 2,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'student_id' => $request->student_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'major_id' => $request->major,
            'region_id' => $request->region,
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        Auth::attempt($credentials);

        return redirect('/discover');
    }
}
