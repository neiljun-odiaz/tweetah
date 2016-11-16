<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Tweet;
use App\User;

class TweetController extends Controller
{

    private $id;

    public function __construct() {
        $this->id = Auth::id();
    }

    public function welcome() {
        $tweets = Tweet::all();
        return view('welcome', compact('tweets'));
    }

    public function index() {
        $tweets = Tweet::with('user')->orderBy('created_at', 'desc')->get();
        return $tweets;
    }

    public function show(Tweet $tweet){
        return view('tweet.show', compact('tweet'));
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(),[
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return response($validator->errors()->getMessages(), 422);
        }

        // Save to our databse
        $tweet = new Tweet;
        $tweet->user_id = $this->id;
        $tweet->message = $request->input('message');
        $tweet->save();

        $user = User::findOrFail($tweet->user_id);
        $tweet->user = $user;

        return response($tweet, 201);
    }

    public function edit(Tweet $tweet) {
        return view('tweet.edit', compact('tweet'));
    }

    public function destroy(Tweet $tweet) {
        // Validate if current user id is the same as tweet used id
        if ($tweet->user_id == $this->id) {
            $tweet->delete();
            return response($tweet, 200);
        } else {
            return response($tweet, 401);
        }
    }

}
