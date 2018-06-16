<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

class UplodeController extends Controller
{
    public function uploade(Request $request){
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename=time(). '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(300,300)->save(public_path('/uploads/' .$filename));
            echo '<img src="uploads/' . $file->getClientOriginalName() . '"/>';
            echo '<h1> OK</h1>';
        }
        else {
            echo'<h1> erreur </h1>';
        }
    }
}
