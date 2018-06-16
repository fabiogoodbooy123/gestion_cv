<?php

namespace App\Http\Controllers;
use App\experprof;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\BD;
use Illuminate\Validation\Rules\In;
use DB;

class experiencePro extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
        return view('experPro', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tst=Input::get("Tye");
        if(isset($tst)){
    $user = new experprof;
    $user->Type =Input::get("Type");
     $user->DatDeb =Input::get("dateDeb");
     $user->Durée =Input::get("durée");
     $user->Entreprise =Input::get("Entreprise");
        $user->Id_condidat=Auth::user()->id;
        $user->save();
            return view('experPro');}
        else{
        $type=Input::get('type');
        $date_deb=Input::get('date');
        $dure=Input::get('dure');
        $entre=Input::get('entreprise');
        $add_product = DB::table("experprofs")->insert([
            'Id_condidat' =>Auth::user()->id,
            'Type' =>$type,
            'DatDeb' => $date_deb,
            'Durée' => $dure,
            'Entreprise' => $entre,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        return view('home');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
