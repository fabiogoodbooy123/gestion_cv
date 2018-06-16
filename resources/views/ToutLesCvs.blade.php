@extends('layouts.app')

@section('content')


    <script type="text/javascript">
        $(document).ready(function() {
            //alert("cc");
            // Setup - add a text input to each footer cell
            $('#example tfoot th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="Chercher '+title+'" />' );
            } );

            // DataTable
            var table = $('#example').DataTable();

            // Apply the search
            table.columns().every( function () {
                var that = this;

                $( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        } );
    </script>
    <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>E-mail</th>
            <th>specialite</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($all as $data)

        <tr>

            <td>{{$data->Id_condidat}}</td>
            <td>{{$data->Nom}}</td>
            <td>{{$data->Prenom}}</td>
            <td>{{$data->Email}}</td>
            <td>{{$data->Intitulé}}</td>
          <td>  <a href="{{URL::to('showcv'.$data->Id_condidat)}}">show cv</a></td>
        </tr>

        @endforeach

        </tbody>
        <tfoot>
        <tr>
            <th>id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>E-mail</th>
            <th>duree</th>
            <th>action</th>
        </tr>
        </tfoot>
    </table>

















<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> <h1>tous les Cvs</h1></div>

                @foreach($arrayname as $data)
                <form action="showcv" method="GET">
                    <input type="hidden" value=" {{$data->Id_condidat}}" name="id_cv">

                        {{$data->Nom}}
                        {{$data->Prenom}}
                        {{$data->Email}}
                        <input type="submit" value="Show Cv" class="btn btn-outline-primary">

@endforeach
                </form>-->

<!--
<div class="container">

    <p>Tapez quelque chose dans le champ de saisie pour rechercher dans la table les prénoms, les noms de famille emails:</p>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Acction</th>
        </tr>
        </thead>
        <tbody id="myTable">
        @foreach($arrayname as $data)
            <form action="" method="get">
            <input type="hidden" value=" {{$data->Id_condidat}}" name="id_cv">
        <a>
            <td>{{$data->Nom}}</td>
            <td>{{$data->Prenom}}</td>
            <td>{{$data->Email}}</td>
            <td><a href="{{URL::to('showcv'.$data->Id_condidat)}}" ><input type="submit" value="Show Cv" class="btn btn-outline-primary"></a></td>

        </tr>
            </form>
        @endforeach
        </tbody>
    </table>


</div>
            </div>
        </div>
    </div>
</div> -->





@endsection