<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\State;
use App\Models\City;

class RegisterController extends Controller
{
    public function index()
    {
        $get_states = State::all();
        return view('register', compact('get_states'));
    }

    public function getCities($state_id)
    {
        $get_cities = City::where('state_id', $state_id)->pluck('name', 'id');
        return response()->json($get_cities);
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'address' => $request->address,
            'pincode' => $request->pincode,
            'state' => $request->state,
            'city' => $request->city,
            'password' => Hash::make($request->password),
        ]);
    
        return redirect()->route('login');
    
    }
}
