<?php

namespace App\Http\Controllers;

use App\condidat;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;



class monCvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_favorites = DB::table('condidats')
            ->where('Id_condidat', '=', Auth::user()->id)->first();

          if(Auth::user()->name=='admin'){
            $all=DB::select('SELECT Id_condidat,Intitulé,Email ,Nom,Prenom FROM specialite ,condidats  WHERE specialite.Id_specialite=condidats.id_specialite');
           //$al=DB::select('SELECT f.Id_condidat,Institut,Email ,Nom,Prenom FROM formations f ,condidats c  WHERE f.Id_condidat=c.Id_condidat group by f.Id_condidat ');
            return view('ToutLesCvs',compact('all','al'));}
            else
        if (is_null($user_favorites)) {
             return view('home');
        } else {
            $condidats = DB::select('select * from condidats  where Id_condidat =?',[Auth::user()->id]);
            $form = DB::select('select * from formations where Id_condidat=? ',[Auth::user()->id]);
            $experpro = DB::select('select * from experprofs where Id_condidat=? ',[Auth::user()->id]);
            $langue = DB::select('select * from langues where Id_condidat=? ',[Auth::user()->id]);

             return view('myCv',compact('condidats','form','experpro','langue'));
            // It exists - remove from favorites button will show
        }
       

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
