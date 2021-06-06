@extends('layouts.app')
@section('content')
<div class="container">
<br>
<form action="{{url ('/heroes') }}" method="post" enctype="multipart/form-data" >
@csrf
@include('heroes.form',['modo'=>'Crear'])

</form>
</div>
@endsection