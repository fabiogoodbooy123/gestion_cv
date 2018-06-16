<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class UserController extends Controller
{

    //
    public function profile(){
        return view('profile');
    }
public function index() {

    /**
     * fetching the user model
     **/
    $user = Auth::user();
    //var_dump($user);

    /**
     * Passing the user data to profile view
     */
    return view('profile', compact('user'));

}
    public function update(Request $request) {

        /**
         * fetching the user model
         */
        $user = Auth::user();


        /**
         * Validate request/input
         **/
        $this->validate($request, [
            'name' => 'required|max:255|unique:users,name,'.$user->id,
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            'password'=> 'required|email|max:255|unique:users,email,'.$user->id,
        ]);

        /**
         * storing the input fields name & email in variable $input
         * type array
         **/
        $input = $request->only('name','email','password');



        /**
         * Accessing the update method and passing in $input array of data
         **/
        $user->update($input);

        /**
         * after everything is done return them pack to /profile/ uri
         **/
        return back();
    }
    public function updateAvatar ( Request $request){
        //update avatar

        if($request->hasFile('avatar')){
            $avatar=$request->file('avatar');

            $filename=time(). '.' . $avatar->getClientOriginalExtension();


            Image::make($avatar)->resize(300,300)->save(public_path('/avatars/' .$filename));
            $user=Auth::user();
            $user->avatar=$filename;
            $user->save();


        }
        return back();

    }

}
