<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(){
        $movie1 = array (
            "Title1"=> "Rush Hour",
            "Genre1"=> "Action, Comedy",
            "Release Date1"=> "September 18, 1998",
            "Title2"=> "Madamme Webb",
            "Genre2"=> "Superhero",
            "Release Date2"=> "February 14, 2024",
            "Title3"=> "Titanic",
            "Genre3"=> "Romance",
            "Release Date3"=> "January 2, 2003"
        );

        return view('products',['movies'=>$movie1]);
    }
}
