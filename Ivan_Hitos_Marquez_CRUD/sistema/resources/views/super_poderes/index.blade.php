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


    <a href="{{ url('super_poderes/create') }}" class="btn btn-success">Registrar nuevo Poder</a>
    <br><br>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>AreaDeEffecto</th>
                <th>Consecuencias</th>
                <th>Descripción</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach($super_poderes as $Superpoder)
            <tr>
                <td>{{ $Superpoder->id }}</td> 
                <td>{{ $Superpoder->Nombre }}</td>
                <td>{{ $Superpoder->Tipo }}</td>
                <td>{{ $Superpoder->AreaDeEffecto }}</td>
                <td>{{ $Superpoder->Consecuencias }}</td>
                <td>{{ $Superpoder->Descripcion }}</td>
                
               
                <td>
                    <a href="{{ url('super_poderes/'.$Superpoder->id.'/edit') }}" class="btn btn-warning btn-lg btn-block">
                        Editar
                    </a>
                   


                    <form action="{{ url('heroes/'.$Superpoder->id) }}" class="d-inline" method="post">
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