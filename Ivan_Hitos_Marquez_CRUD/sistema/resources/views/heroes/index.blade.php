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
                <th class="text-center">#</th>
                <th class="text-center">Foto</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">IdentidadSecreta</th>
                <th class="text-center">Hobby</th>
                <th class="text-center">Alineacion</th>
                <th class="text-center">Medio</th>
                <th class="text-center">Nº De Muertes Accidentales</th>
                <th class="text-center">Acciones</th>

            </tr>
        </thead>
        <tbody >
            @foreach($Heroes as $Heroe)
            <tr>
                <td>{{ $Heroe->id }}</td>
                <td class="text-center">
                    <img class="img-thumbnail img-fluid" style="width: 200px;" src="{{asset('storage').'/'.$Heroe->Foto }}" alt="">

                </td>


                <td class="text-center">{{ $Heroe->Nombre }}</td>
                <td class="text-center">{{ $Heroe->IdentidadSecreta }}</td>
                <td class="text-center">{{ $Heroe->Hobby }}</td>
                <td class="text-center">{{ $Heroe->Alineacion }}</td>
                <td class="text-center">{{ $Heroe->Medio }}</td>
                <td class="text-center">{{ $Heroe->NumeroDeMuertesAccidentales }}</td>
               
                <td>
                    <a href="{{ url('heroes/'.$Heroe->id.'/edit') }}" class="btn btn-warning btn-lg btn-block">
                        Editar
                    </a>
                    <br>
                    </a>
                    <a href="{{ url('super_poderes/create') }}" class="btn btn-success btn-lg btn-block">
                        Añadir Superpoder
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