<?php

namespace App\Http\Controllers;
use App\formations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use DB;


class formation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('formation', compact('user'));
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
        $tst=Input::get("Diplome");
        if (isset($tst)){
       $user = new formations;
        $user->Diplome =Input::get("Diplome");
        $user->Institut =Input::get("Institut");
        $user->AnneéScolaire =Input::get("AnneeScolaire");
        $user->Mention =Input::get("Mention");
        $user->Id_condidat=Auth::user()->id;
        $user->save();
        return view('formation');}
        else{
        $diplom=Input::get("Diplome");;
        $Institut=Input::get("Institut");
        $AnnéeScolaire =2555;
        $Mention=Input::get("Mention");
        $add_product = DB::table("formations")->insert([
            'Id_condidat' =>Auth::user()->id,
            'Diplome' => $diplom,
            'Institut' => $Institut,
            'AnneéScolaire' => $AnnéeScolaire,
            'Mention' => $Mention,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        return view('home');}

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
        DB::table('formations')->where('Id_formation', '=', $id)->delete();
        return view('home');
    }
}
