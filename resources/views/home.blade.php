@extends('layouts.app')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script  >
        $(function() {
            $("#btn").click(function(){
                alert("54554");

                var Diplome = $("#dip").val();
                var Institut = $("#ins").val();
                var AnneeScolaire = $("#ann").val();
                var Mention = $("#men").val();



                $.ajax({
                    type: "get",
                    data: "&Diplome=" + Diplome + "&Institut=" + Institut + "&AnneeScolaire=" + AnneeScolaire + "&Mention=" + Mention,
                    url: "<?php echo url('/formation/store') ?>",
                    success:function(data){
                         $("#ins").text("");
                          $("#ann").text("");
                           $("#men").text("");
                        alert("ok");
                    }
                });


            });
        });
        $(function() {
            $("#btn2").click(function(){
                alert("54554");

                var type = $("#type").val();
                var date = $("#date-deb").val();
                var dure = $("#dure").val();
                var entreprise = $("#entre").val();



                $.ajax({
                    type: "get",
                    data: "&type=" + type + "&date=" + date + "&dure=" + dure + "&entreprise=" + entreprise,
                    url: "<?php echo url('/experPro/store') ?>",
                    success:function(data){

                        alert("ok");
                    }
                });


            });
        });

        ///ajout langue
        $(function() {
            $("#btn3").click(function(){
                alert("54554");

                var langue = $("#langue").val();
                var niveau = $("#niv").val();




                $.ajax({
                    type: "get",
                    data: "&langue=" + langue + "&niveau=" + niveau ,
                    url: "<?php echo url('/lang/store') ?>",
                    success:function(data){

                        alert("ok");
                    }
                });


            });
        });


    </script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Remplissez votre CV</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <form id="form1" action="/home/store" method="get">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                           <label for="inputeNom">Nom </label>
                                            <input class="form-control" id="inputeNom" type="text" required="" placeholder="nom" name="Nom">
                                </div>
                                <div class="form-group col-md-6">
                                            <label for="inputPrenom">Prénom</label>
                                            <input class="form-control" id="inputPrenom" type="text" required placeholder="Prénom" name="Prenom">
                                </div>
                                <div class="form-group col-md-12">
                                            <label for="inputDate">Date de Naissance</label>
                                             <input required id="inputDate" class="form-control" type="date" name="Date_nai">
                                </div>
                                <div class="form-group col-md-12">
                                            <label>lieu de naissance</label>
                                            <input  class="form-control" type="text" required="" placeholder="lieu de naissance" name="Lieu_nai" >
                                </div>
                                <div class="form-group col-md-12">
                                            <label>Nationnalité</label>
                                            <input class="form-control" type="text" required placeholder="Nationalité" name="Nationalite">
                                </div>
                                <div class="form-group col-md-12">
                                            <label>Adresse</label>
                                            <input class="form-control" type="text" required placeholder="Adresse" name="Adresse">
                                </div>
                                <div class="form-group col-md-12">
                                            <label>Télephone</label>
                                            <input class="form-control" type="number" required placeholder="Télephone" name="Telephone">
                                </div>
                                <div class="form-group col-md-12">
                                            <label>Adresse E-mail</label>
                                            <input class="form-control" type="email" required placeholder="Adresse E-mail" name="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Spécialité</label>
                                <select name="spec" class="form-control">

                                    <option value="1">informatique</option>
                                    <option value="2">electromecanique</option>
                                    <option value="3">electromecanique</option>
                                    <option value="4">electrique</option>
                                    <option value="5">industriel</option>
                                    <option value="6">mecanique</option>
                                    <option value="7">genie civil</option>
                                    <option value="8">architecture</option>
                                    <option value="9">finance</option>

                                </select>
                                    <input type="submit" name="Sauvegarder" value="Sauvegarder" class="btn btn-outline-primary">
                                </div>


                            </div>
                        </form>

                          <!--  <button class="btn btn-primary" data-toggle="modal" data-target="#masuk">Fomration</button>
                            <div class="modal fade" id="masuk" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"> &times;</button>
                                    </div>
                                    <div class="modal-body">

                                        <h1>Formation </h1>

                                      <!-- <form action="/formation/store" method="get">

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
                                        <input id="btn" type="submit" value="Envoyer">
                                     <!--   </form>
                </div>
                <dvi class="modal-footer">
                    <button type="button" class="btn btn-primary m-t-10" data-dismiss="modal">closse</button>
                </dvi>
            </div>
        </div>
    </div>



                        <button class="btn btn-primary" data-toggle="modal" data-target="#masuk-exp">experience</button>
                        <div class="modal fade" id="masuk-exp" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"> &times;</button>
                                    </div>
                                    <div class="modal-body">

                                        <h1>experience </h1>

                                       <!-- <form action="experPro/store" method="get">
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
                                            <input id="btn2" type="submit" value="Envoyer">
                                      <!--  </form>
                                    </div>
                                    <dvi class="modal-footer">
                                        <button type="button" class="btn btn-primary m-t-10" data-dismiss="modal">closse</button>
                                    </dvi>
                                </div>
                            </div>
                        </div>




                        <button class="btn btn-primary" data-toggle="modal" data-target="#masuk-lang">Langues</button>
                        <div class="modal fade" id="masuk-lang" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"> &times;</button>
                                    </div>
                                    <div class="modal-body">

                                        <h1>Langues </h1>

                                        <!-- <form action="experPro/store" method="get">
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

                                        <input id="btn3" type="submit" value="Envoyer">
                                        <!--  </form>
                                    </div>
                                    <dvi class="modal-footer">
                                        <button type="button" class="btn btn-primary m-t-10" data-dismiss="modal">closse</button>
                                    </dvi>
                                </div>
                            </div>
                        </div>


                        </div>

                        <h1>uplode img</h1>
                        <form action="{{ URL::to('uplode') }}" method="post">
                            <label> Uplode img</label>
                            <input type="file" name="file">
                            <input type="submit" value="uplode img ">
                            <input type="hidden" value="{{ csrf_token () }}" name="_token">
                        </form>


                        -->

            </div>
        </div>
    </div>
</div>
</div>


@endsection
