@extends('layouts.app')

@section('content')
    <script>
        $(function() {
            $("#btn").click(function(){


                var Diplome = $("#dip").val();
                var Institut = $("#ins").val();
                var AnneeScolaire = $("#ann").val();
                var Mention = $("#men").val();



                $.ajax({
                    type: "get",
                    data: "&Diplome=" + Diplome + "&Institut=" + Institut + "&AnneeScolaire=" + AnneeScolaire + "&Mention=" + Mention,
                    url: "<?php echo url('/formation/store') ?>",
                    success:function(data){
                        $("#ins").val('');
                        $("#ann").val('');
                        $("#men").val('');
                        alert("succes");
                    }
                });


            });
        });
        $(function() {
            $("#btn2").click(function(){


                var type = $("#type").val();
                var date = $("#date-deb").val();
                var dure = $("#dure").val();
                var entreprise = $("#entre").val();



                $.ajax({
                    type: "get",
                    data: "&type=" + type + "&date=" + date + "&dure=" + dure + "&entreprise=" + entreprise,
                    url: "<?php echo url('/experPro/store') ?>",
                    success:function(data){
                        $("#type").val('');
                       $("#date-deb").val('');
                        $("#dure").val('');
                       $("#entre").val('');
                        alert("succes");
                    }
                });


            });
        });
        $(function() {
            $("#btn3").click(function(){


                var langue = $("#langue").val();
                var niveau = $("#niv").val();




                $.ajax({
                    type: "get",
                    data: "&langue=" + langue + "&niveau=" + niveau ,
                    url: "<?php echo url('/lang/store') ?>",
                    success:function(data){
                         $("#langue").val('');
                       $("#niv").val('')
                        alert("succes");
                    }
                });


            });
        });
</script>
        <!--
    @foreach($condidats as $key => $data)

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Voici votre CV </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form id="form1" action="" method="get">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputeNom">Nom </label>
                                        <input class="form-control" id="inputeNom" type="text"  name="Nom" value="{{$data->Nom}}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPrenom">Prénom</label>
                                        <input class="form-control" id="inputPrenom" type="text" value="{{$data->Prenom}}" name="Prenom">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputDate">Date de Naissance</label>
                                        <input required id="inputDate" class="form-control" type="date" value="{{$data->Date_nai}}" name="Date_nai">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>lieu de naissance</label>
                                        <input  class="form-control" type="text" value="{{$data->Lieu_nai}}" name="Lieu_nai" >
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Nationnalité</label>
                                        <input class="form-control" type="text" value="{{$data->Nationalite}}" name="Nationalite">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Adresse</label>
                                        <input class="form-control" type="text" value="{{$data->Adresse}}" name="Adresse">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Télephone</label>
                                        <input class="form-control" type="number" value="{{$data->Telephone}}" name="Telephone">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Adresse E-mail</label>
                                        <input class="form-control" type="email"value="{{$data->Email}}" name="Email">
                                    </div>
                                     <div class="form-group col-md-12">

                                </div>
                            </form>



    @endforeach
                                     <p>
                                         <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                             Liste des formations
                                        </a>

                                     </p>
                                          <div class="collapse multi-collapse" id="collapseExample">
                                             <div class="card card-body">
                                                 <div style=" display:none">
                                                     {{$i=1}}
                                                 </div>
                                                 @foreach($form as $key => $forma)
                                                     <h1>Formation {{$i++}}</h1>

                                                     <div class="form-group col-md-12">
                                                         <label>Diplome</label>
                                                         <input id="dip" type="text" value="{{$forma->Diplome}}" name="Diplome" class="form-control" >
                                                     </div>
                                                     <div class="form-group col-md-12">
                                                         <label>Institut</label>
                                                         <input id="ins" type="text" value="{{$forma->Institut}}" name="Institut" class="form-control">
                                                     </div>
                                                     <div class="form-group col-md-12">
                                                         <label>AnnéeScolaire</label>
                                                         <input id="ann" type="text" value="{{$forma->AnneéScolaire}}" name="AnneeScolaire" class="form-control">
                                                     </div>
                                                     <div class="form-group col-md-12">
                                                         <label>Mention</label>
                                                         <input id="men" type="number" value="{{$forma->Mention}}" name="Mention" class="form-control">
                                                     </div>
                                                 @endforeach
                                             </div>
                                          </div>



                                <p>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#expr" role="button" aria-expanded="false" aria-controls="expr">
                                        liste des experiences
                                    </a>

                                </p>
                                <div class="collapse multi-collapse" id="expr">
                                    <div class="card card-body">
                                        <div style=" display:none">
                                            {{$j=1}}
                                        </div>
                                        @foreach($experpro as $key => $expr)
                                            <h1>Experinces {{$j++}}</h1>
                                            <div class="form-group col-md-12">
                                                <label>Type de l'experience</label>
                                                <input id="type" type="text" value="{{$expr->Type}}" name="Type" class="form-control" >
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Date de debut</label>
                                                <input id="date-deb" type="date" value="{{$expr->DatDeb}}"  name="date" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Durée de l'experience</label>
                                                <input id="dure" type="text" value="{{$expr->Durée}}" name="dure" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Entreprise</label>
                                                <input id="entre" type="text" value="{{$expr->Entreprise}}" name="entreprise" class="form-control">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <p>
                                    <a class="btn btn-primary" data-toggle="collapse" href="#lang" role="button" aria-expanded="false" aria-controls="lang">
                                        les langues
                                    </a>

                                </p>
                                <div class="collapse multi-collapse" id="lang">
                                    <div class="card card-body">
                                        <div style=" display:none">
                                            {{$k=1}}
                                        </div>
                                        @foreach($langue as $key => $lang)
                                            <h1>langue {{$k++}}</h1>

                                            <div class="form-group col-md-12">
                                                <label>langue</label>
                                                <input id="dip" type="text" value="{{$lang->Nom}}" name="NomLang" class="form-control" >
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Niveau</label>
                                                <input id="ins" type="text" value="{{$lang->Niveau}}" name="Niveau" class="form-control">
                                            </div>

                                        @endforeach
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
-->

        <div class="page">
            <div class="infophoto">
                <div class="info">
                    @foreach($condidats as $key => $c)
                        <p><strong>{{$c->Nom}} &nbsp; {{$c->Prenom}}</strong></p>
                        <p>Né le {{$c->Date_nai}} à {{$c->Lieu_nai}}</p>
                        <p>{{$c->Adresse}}</p>
                        <p>+216 {{$c->Telephone}}</p>
                        <p>{{$c->Email}}</p>
                        <p>{{$c->Nationalite}}</p>
                    @endforeach
                </div>
                <div class="photo">

                        <img src="avatars/{{Auth::user()->avatar}}" style="width:150px; height: 150px;border-radius: 50%;margin-right: 25px; ">

                </div>
            </div>
            <div class="section">
                <h2>Formation  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#masuk">+</button></h2>
                            <div class="modal fade" id="masuk" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"> &times;</button>
                                    </div>
                                    <div class="modal-body">

                                        <h1>Formation </h1>

                                        <input name="id" type="hidden" value="{{Auth::user()->id}}">
                                        <div class="form-group col-md-12">
                                            <label>Diplome</label>
                                            <input id="dip" type="text" required placeholder="Diplome" name="Diplome" class="form-control" >
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Institut</label>
                                            <input id="ins" type="text" required placeholder="Institut" name="Institut" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>AnnéeScolaire</label>
                                            <input id="ann" type="text" required placeholder="Année Scolaire" name="AnneeScolaire" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Mention</label>
                                            <input id="men" type="number" required placeholder="Mention" name="Mention" class="form-control">
                                        </div>
                                        <input id="btn" type="submit" value="Envoyer" class="btn btn-outline-primary">

                </div>
                <dvi class="modal-footer">
                    <button type="button" class="btn btn-primary m-t-10" data-dismiss="modal">fermer</button>
                </dvi>
            </div>
        </div>
    </div>

                <div class="sec-gauche" id="forma-gouche">
                    @foreach($form as $key => $f)
                        <p>{{$f->AnneéScolaire}}</p>
                    @endforeach
                </div>
                <div class="sec-droite">
                    @foreach($form as $key => $f)
                        <p><span class="titre"> {{$f->Institut}} &nbsp;</span>{{$f->Diplome}} &nbsp;avec  Mention &nbsp;{{$f->Mention}}
                            <a href="{{URL::to('suppFomration'.$f->Id_formation)}}" ><button type="button" class="btn btn-danger btn-sm">-</button> </a></p>
                    @endforeach
                </div>
            </div>
            <div class="section">
                <h2>Expérience Professionneles  <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#masuk-exp">+</button> </h2>
                <div class="modal fade" id="masuk-exp" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"> &times;</button>
                            </div>
                            <div class="modal-body">

                                <h1>experience </h1>


                                            <input name="id" type="hidden" value="{{Auth::user()->id}}">
                                            <div class="form-group col-md-12">
                                                <label>Type de l'experience</label>
                                                <input id="type" type="text" required placeholder="Type" name="Type" class="form-control" >
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Date de debut</label>
                                                <input id="date-deb" type="date" required  name="date" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Durée de l'experience</label>
                                                <input id="dure" type="text" required placeholder="Durée de l'experience" name="dure" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Entreprise</label>
                                                <input id="entre" type="text" required placeholder="Entreprise" name="entreprise" class="form-control">
                                            </div>
                                            <input id="btn2" type="submit" value="Envoyer" class="btn btn-outline-primary">

                                    </div>
                                    <dvi class="modal-footer">
                                        <button type="button" class="btn btn-primary m-t-10" data-dismiss="modal">fermer</button>
                                    </dvi>
                                </div>
                            </div>
                        </div>

                <div class="sec-gauche" id="exp-gouche">
                    @foreach($experpro as $key => $e)
                        <p>{{$e->DatDeb}} <span class="duree"> {{$e->Durée}}</span></p>
                    @endforeach

                </div>
                <div class="sec-droite">
                    @foreach($experpro as $key => $e)
                        <p><span class="titre">{{$e->Type}}</span> {{$e->Entreprise}}</p>
                    @endforeach
                </div>
            </div>
            <div class="section">
                <h2> Langues parlées <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#masuk-lang">+</button></h2>
                <div class="modal fade" id="masuk-lang" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"> &times;</button>
                            </div>
                            <div class="modal-body">

                                <h1>Langues </h1>


                                        <input name="id" type="hidden" value="{{Auth::user()->id}}">
                                        <div class="form-group col-md-12">
                                            <label>Langue</label>
                                            <input id="langue" type="text" required placeholder="" name="langue" class="form-control" >
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Niveau</label>
                                            <input id="niv" type="text" required   name="niveau" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12">

                                        <input id="btn3" type="submit" value="Envoyer" class="btn btn-outline-primary">

                                    </div>
                                    <dvi class="modal-footer">
                                        <button type="button" class="btn btn-primary m-t-10" data-dismiss="modal">fermer</button>
                                    </dvi>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="sec-gauche">
                    @foreach($langue as $key => $l)
                        <p>{{$l->Nom}} : {{$l->Niveau}}</p>
                    @endforeach

                </div>
                <div class="sec-droite">

                </div>
            </div>
                <br>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
            @foreach($condidats as $key => $data)
                <div class="form-group col-md-12">
                         <h4>Date de Creation de cv
                             <span class="badge badge-secondary">{{$data->created_at}}</span></h4>
                 </div>
                            <div class="form-group col-md-12">
                                <h4>Date d'update votre cv
                                    <span class="badge badge-secondary">{{$data->updated_at}}</span></h4>
                            </div>
               @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endsection