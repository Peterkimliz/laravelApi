<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PostsController extends Controller {


    public function getPosts(){
        $posts=[["name"=>"trial","likes"=>2],["name"=>"test","likes"=>20]];
        return json_encode($posts);
    }
}