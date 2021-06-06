@extends('layouts.app')
@section('content')
<div class="container">
    <br>
<form action="{{ url('heroes/'.$Heroe->id ) }}" method="post" enctype="multipart/form-data" >
@csrf

{{ method_field('PATCH') }}
@include('heroes.form',['modo'=>'Editar'])

</form>
</div>
@endsection