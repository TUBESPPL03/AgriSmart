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
            'role' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    
        DB::table('users')->insert($data);

        dd(response()->json(['message' => 'registered successfully']));
    }

    public function postRegisterExpert (Request $request) {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    
        DB::table('users')->insert($data);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $imagePath = $image->storeAs('public/images', $imageName);
        }

        $docs = [
            'user_id' => 5,
            'document' => $imagePath,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('farm_expert_docs')->insert($docs);

        dd(response()->json(['message' => 'registered successfully']));
    }
}
