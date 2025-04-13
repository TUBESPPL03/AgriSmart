<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class article_controller extends Controller
{
    public function getCreate(){
        return view("article.create");
    }
    public function postCreate(Request $request){

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $imagePath = $image->storeAs('public/images', $imageName);
        }

        $data = [
            'title' => $request->input('title'),
            'article' => $request->input('article'),
            'id_user' => "5",
            'image' => $imagePath,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    
        DB::table('farm_expert_article')->insert($data);

        dd(response()->json(['message' => 'create article successfully']));
    }
}
