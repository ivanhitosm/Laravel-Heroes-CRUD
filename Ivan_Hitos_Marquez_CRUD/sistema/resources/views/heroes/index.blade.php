@extends('layouts.app')
@section('content')
<div class="container">

    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismisible" role="alert">
        {{ Session::get('mensaje') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
    </div>
    @endif


    <a href="{{ url('heroes/create') }}" class="btn btn-success">Registrar nuevo Heroe</a>
    <br><br>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>AreaDeEffecto</th>
                <th>Consecuencias</th>
                <th>Alineacion</th>
                <th>Medio</th>
                <th>NumeroDeMuertesAccidentales</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach($Heroes as $Heroe)
            <tr>
                <td>{{ $Heroe->id }}</td>
                <td>
                    <img class="img-thumbnail img-fluid" style="width: 200px;" src="{{asset('storage').'/'.$Heroe->Foto }}" alt="">

                </td>


                <td>{{ $Heroe->Nombre }}</td>
                <td>{{ $Heroe->AreaDeEffecto }}</td>
                <td>{{ $Heroe->Consecuencias }}</td>
                <td>{{ $Heroe->Alineacion }}</td>
                <td>{{ $Heroe->Medio }}</td>
                <td>{{ $Heroe->NumeroDeMuertesAccidentales }}</td>
               
                <td>
                    <a href="{{ url('heroes/'.$Heroe->id.'/edit') }}" class="btn btn-warning btn-lg btn-block">
                        Editar
                    </a>
                    <br>
                    <a href="{{ $url = route('super_poderes',$Heroe->id) }}" class="btn btn-success btn-lg btn-block">
                        Superpoderes
                    </a>
                    <br>

                    <form action="{{ url('heroes/'.$Heroe->id) }}" class="d-inline" method="post">
                        @csrf
                        {{method_field('DELETE')}}
                        <input class="btn btn-danger btn-lg btn-block" type="submit" onclick="return confirm('¿Queres borrar?')" value="Borrar">
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    

</div>
@endsection