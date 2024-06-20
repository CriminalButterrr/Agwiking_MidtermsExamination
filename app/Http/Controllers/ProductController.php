<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(){
        $movie1 = array (
            "Title"=> "Rush Hour",
            "Genre "=> "Action, Comedy",
            "Release Date"=> "September 18, 1998"
        );

        return view('products',['movies'=>$movie1]);
    }
}
