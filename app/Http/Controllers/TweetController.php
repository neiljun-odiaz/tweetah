<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;

class TweetController extends Controller
{

    public function index() {
        $tweets = Tweet::all();
        return view('welcome', compact('tweets'));
    }

    public function show(Tweet $id){

    }

    public function edit(Tweet $id) {
        dd($id);
    }

}
