<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use DB;

class FilmController extends Controller
{
    public function add(Request $request){
        $name = $request -> input('name');
        $director = $request -> input('director');
        $category = $request -> input('category');
        $db = DB::table('film');
        $rst = $db -> insert([
            [
                'name' => $name,
                'director' => $director,
                'category_id' => $category,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]
        ]);
        dd($rst);
    }

    public function update(Request $request){
        $name = $request -> input('name');
        $director = $request -> input('director');
        $category = $request -> input('category');
        $db = DB::table('film');
        $rst = $db -> where('name','=',$name) -> update([  
                'name' => $name,
                'director' => $director,
                'category_id' => $category,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
        ]);
        dd($rst);
    }

    public function select(){
        $db = DB::table('film');
        $rst = $db -> get();
        echo($rst);
    }

    public function findByName(Request $request){
        $name = $request -> input('name');
        $db = DB::table('film');
        $rst = $db -> where('name', '=', $name) -> get();
        // return view('filmupdate');
        echo($rst);
    }

    public function del(Request $request){
        $name = $request -> input('name');
        $db = DB::table('film');
        $rst = $db -> where('name','=',$name) -> delete();
        dd($rst);
    }
  
    public function findFavorites(Request $request){
        $email = $request -> input('email');
        $rst = DB::table("users") -> where("email","=",$email) -> get();
        // return view('filmupdate');
        echo($rst);
    }

    public function selectById(Request $request){
        $name = $request -> input('id');
        $db = DB::table('film');
        $rst = $db -> where('id', '=', $name) -> get();
        // return view('filmupdate');
        echo($rst);
    }
}
?>