<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class ShowCvController extends Controller
{
    public function index($id)
    {
        $cv_show = DB::select('select * from condidats  where Id_condidat =? ',[$id]);
        $exp_show = DB::select('select * from experprofs where Id_condidat=? ',[$id]);
        $for_show=DB::select('select * from formations where Id_condidat=?',[$id]);
        $avatar=DB::select('select avatar from users where id=?',[$id]);
        $langue=DB::select('select * from langues where Id_condidat=?',[$id]);
        return view('showCv',compact('cv_show','exp_show','avatar','for_show','langue'));
    }
}
