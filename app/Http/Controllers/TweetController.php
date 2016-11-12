<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Tweet;

class TweetController extends Controller
{

    public function index() {
        $tweets = Tweet::all();
        return view('welcome', compact('tweets'));
    }

    public function show(Tweet $tweet){
        return view('tweet.show', compact('tweet'));
    }

    public function store(Request $request) {
        $id = Auth::id();

        $validator = Validator::make($request->all(),[
            'tweet' => 'required'
        ]);

        if ($validator->fails()) {
            return response($validator->errors()->getMessages(), 422);
        }

        // Save to our databse
        $tweet = new Tweet;
        $tweet->user_id = $id;
        $tweet->tweet = $request->input('tweet');
        $tweet->save();

        return response($tweet, 201);

    }

    public function edit(Tweet $tweet) {
        return view('tweet.edit', compact('tweet'));
    }

}
