<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){

        $data = $request->except('_token','password_confirmation');


        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['pass']
        ]);

        return redirect()->back();
    }
}
