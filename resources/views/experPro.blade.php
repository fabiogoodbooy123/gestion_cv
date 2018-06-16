@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>experience professionnel</h1></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>

                        @endif


                                <form action="experPro/store" method="get">

                                    <div class="form-group col-md-12">
                                        <label>Type de l'experience</label>
                                        <input type="text" required placeholder="stage/travail" name="Type" class="form-control" >
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Date de debut</label>
                                        <input type="date" required  name="dateDeb" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Durée de l'experience</label>
                                        <input type="text" required placeholder="Durée de l'experience" name="durée" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Entreprise</label>
                                        <input type="text" required placeholder="Entreprise" name="Entreprise" class="form-control">
                                    </div>
                                    <input type="submit" value="Envoyer" class="btn btn-outline-primary">
                                </form>
                    </br>
                            <div>
                            <a href="{{URL::to('formation')}}" class="a previous round">&#8249;</a>
                            <a href="{{URL::to('langue')}}" class="a next round">&#8250;</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
