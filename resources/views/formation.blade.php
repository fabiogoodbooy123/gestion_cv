@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>Formation </h1></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>

                        @endif
                                   <form action="/formation/store" method="get">


                                     <div class="form-group col-md-12">
                                           <label>Diplome</label>
                                               <input type="text" required placeholder="Diplome" name="Diplome" class="form-control" >
                                        </div>
                                       <div class="form-group col-md-12">
                                                                        <label>Institut</label>
                                            <input type="text" required placeholder="Institut" name="Institut" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>AnnéeScolaire</label>
                                            <input type="text" required placeholder="Année Scolaire" name="AnneeScolaire" class="form-control">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Mention</label>
                                            <input type="number" required placeholder="Mention" name="Mention" class="form-control">
                                        </div>
                                        <input type="submit" value="Envoyer" class="btn btn-outline-primary">
                                   </form>
                                            </br>

                                                <a href="{{URL::to('experPro')}}" class="a next round">&#8250;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection