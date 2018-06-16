@extends('layouts.app')
@section('content')

    <div class="page">
        <div class="infophoto">
            <div class="info">
            @foreach($cv_show as $key=>$c)
                    <p><strong>{{$c->Nom}} &nbsp; {{$c->Prenom}}</strong></p>
                <p>Né le {{$c->Date_nai}} à {{$c->Lieu_nai}}</p>
                <p>{{$c->Adresse}}</p>
                <p>+216 {{$c->Telephone}}</p>
                <p>{{$c->Email}}</p>
                <p>{{$c->Nationalite}}</p>
                @endforeach
            </div>
            <div class="photo">
                @foreach($avatar as $key => $av)
                    <img src="avatars/{{$av->avatar}}" style="width:150px; height: 150px;border-radius: 50%;margin-right: 25px; ">
                @endforeach
            </div>
        </div>
        <div class="section">
            <h2>Formation</h2>
            <div class="sec-gauche" id="forma-gouche">
            @foreach($for_show as $key=>$f)
                <p>{{$f->AnneéScolaire}}</p>
                @endforeach
            </div>
            <div class="sec-droite">
                @foreach($for_show as $key=>$f)
                <p><span class="titre"> {{$f->Institut}} &nbsp;</span>{{$f->Diplome}} &nbsp; Mention &nbsp;{{$f->Mention}}</p>
                @endforeach
            </div>
        </div>
        <div class="section">
            <h2>Expérience Professionneles </h2>
            <div class="sec-gauche" id="exp-gouche">
                @foreach($exp_show as $key=>$e)
                    <p>{{$e->DatDeb}} <span class="duree"> {{$e->Durée}}</span></p>
                @endforeach

            </div>
            <div class="sec-droite">
                @foreach($exp_show as $key=>$e)
                    <p><span class="titre">{{$e->Type}}</span> {{$e->Entreprise}}</p>
                @endforeach
            </div>
        </div>
        <div class="section">
            <h2> Langues parlées </h2>
            <div class="sec-gauche">
                @foreach($langue as $key=>$l)
                    <p>{{$l->Nom}} : {{$l->Niveau}}</p>
                @endforeach

            </div>
            <div class="sec-droite">

            </div>
        </div>

    </div>

    @endsection