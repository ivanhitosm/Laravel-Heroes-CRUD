@extends('layouts.app')
@section('content')
<div class="container">
    <br>
<form action="{{ url('super_poderes/'.$superPoderes->id ) }}" method="post" enctype="multipart/form-data" >
@csrf

{{ method_field('PATCH') }}
@include('super_poderes.form',['modo'=>'Editar'])

</form>
</div>
@endsection