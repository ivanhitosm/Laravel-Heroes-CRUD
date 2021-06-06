<h1>{{$modo}} heroes</h1>
@if (count($errors)>0)

    <div class="alert alert-danger" role="alert">
     <ul>
         @foreach($errors->all() as $error)
           <li>{{$error}}</li> 
          @endforeach
     </ul>
    </div>

    
@endif


<div class="form-group">

<label for="Nombre">Nombre</label>
<input type="text" class="form-control" name="Nombre" value="{{isset( $Heroe->Nombre) ?$Heroe->Nombre:old('Nombre')}}" id="Nombre">

<label for="IdentidadSecreta">Identidad Secreta</label>
<input type="text" class="form-control" name="IdentidadSecreta" value="{{ isset( $Heroe->IdentidadSecreta) ?$Heroe->IdentidadSecreta:old('IdentidadSecreta')}}" id="IdentidadSecreta">

<label for="Hobby">Hobby</label>
<input type="text" class="form-control" name="Hobby" value="{{ isset( $Heroe->Hobby) ?$Heroe->Hobby:old('Hobby')}}" id="Hobby">

<label for="Alineacion">Alineacion</label>
<input type="text" class="form-control" name="Alineacion" value="{{isset( $Heroe->Alineacion)?$Heroe->Alineacion:old('Alineacion') }}" id="Alineacion">

<label for="Medio">Medio</label>
<input type="text" class="form-control" name="Medio" value="{{isset( $Heroe->Medio)?$Heroe->Medio:old('Medio') }}" id="Medio">

<label for="NumeroDeMuertesAccidentales">Numero De Muertes Accidentales</label>
<input type="number" class="form-control" name="NumeroDeMuertesAccidentales" value="{{isset( $Heroe->NumeroDeMuertesAccidentales)?$Heroe->NumeroDeMuertesAccidentales:old('NumeroDeMuertesAccidentales') }}" id="NumeroDeMuertesAccidentales">

<label for="Foto">Foto</label>
<input type="file" class="form-control form-control-lg" name="Foto" value="" id="Foto">

@if(isset($Heroe->Foto))
<img class="img-thumbnail img-fluid" style="width: 500px;" src="{{asset('storage').'/'.$Heroe->Foto }}" att="">
@endif
<br>
<input class="btn btn-success" type="submit" class="form-control" value="{{$modo}} datos">
<a class="btn btn-primary" href="{{ url('/heroes') }}">Regresar</a>

</div>