@extends('layouts.app')
@section('content')
<div class="container">
<br>
<form action="{{url ('/super_poderes') }}" method="post" enctype="multipart/form-data" >
@csrf
@include('super_poderes.form',['modo'=>'Crear'])

</form>
</div>
@endsection