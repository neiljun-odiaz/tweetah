<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\User;
use Session;

class UserController extends Controller
{

    protected $id;
    protected $user;

    public function __construct() {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            $this->id = Auth::id();
            return $next($request);
        });
    }

    public function show(){
        $userprofile = $this->user;
        return view('user.show',compact('userprofile'));
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }

        $user = User::findOrFail($this->id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ( !empty($request->input('password')) ) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();

        Session::flash('message', "User Profile Updated!");
        return back();
    }

}
