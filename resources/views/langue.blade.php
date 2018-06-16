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
                            <h1>Langue</h1>
                            <form action="langue/store" method="get">
                                <div class="form-group col-md-12">
                                <label>Langues</label>
                                <input type="text" name="nom" id="langue" class="form-control" >
                                </div>
                                <div class="form-group col-md-12">
                                <label>Niveau</label>
                                <input type="text" name="niveau" id="niv" class="form-control">
                                </div>
                                <input type="submit" value="Envoyer" class="btn btn-outline-primary">

                            </form>
                            <a href="{{URL::to('home')}}" class="a next round">Terminer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection