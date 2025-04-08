<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class auth_controller extends Controller
{
    public function getLogin(){
        return view("auth.login");
    }
    public function getRegister(){
        return view("auth.register");
    }
    public function getSelectRole(){
        return view("auth.select-role");
    }
    public function getRegisterExpert(){
        return view("auth.register-expert");
    }

    public function postRegisterFarmer (Request $request){
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    
        DB::table('users')->insert($data);

        dd(response()->json(['message' => 'registered successfully']));
    }
}
