@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/heroe'.$Heroe->id ) }}" method="put" enctype="multipart/form-data" >
@csrf
{{ method_field('PATCH') }}

@include('heroes.form',['modo'=>'Editar'])

</form>
</div>
@endsection