<?php

namespace App\Http\Controllers;
use Auth;
use App\condidat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\BD;



class creatCv extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('creatCv');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $items= DB::table('specialite')->get();
        //return view('home.create',['items'=>$items]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new condidat;
        $user->Id_condidat=Auth::user()->id;
        $user->Nom =Input::get("Nom");
        $user->Prenom=Input::get("Prenom");
        $user->Date_nai =Input::get("Date_nai");
        $user->Lieu_nai =Input::get("Lieu_nai");
        $user->Nationalite =Input::get("Nationalite");
        $user->Adresse =Input::get("Adresse");
        $user->Telephone =Input::get("Telephone");
        $user->Email =Input::get("Email");
        $user->	id_specialite=Input::get("spec");
        $user->save();
     return redirect('formation');
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
