<h1>{{$modo}} Superpoderes</h1>
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
<input type="text" class="form-control" name="Nombre" value="{{isset( $superPoderes->Nombre) ?$superPoderes->Nombre:old('Nombre')}}" id="Nombre">
<br>
<label for="Tipo">Tipo</label>
    <select  name="Tipo" id="Tipo"  class="form-control">
      <option value="Ninguno">Ninguno</option>
        <option value="Almigthy powers">Almigthy powers</option>
        <option value="Constructs">Constructs</option>
        <option value="Magical powers">Magical powers</option>
        <option value="Physiology">Physiology</option>
        <option value="Manipulations">Manipulations</option>
        <option value="Psychic powers">Psychic powers</option>
        <option value="Enhancements">Enhancements</option>
        <option value="Metapowers">Metapowers</option>
        <option value="Science powers">Science powers</option>

     
    </select>
<br>
    <label for="AreaDeEffecto">AreaDeEffecto</label>
    <input type="text" class="form-control" name="AreaDeEffecto" value="{{ isset( $superPoderes->AreaDeEffecto) ?$superPoderes->AreaDeEffecto:old('AreaDeEffecto')}}" id="AreaDeEffecto">
    
    <label for="Consecuencias">Consecuencias</label>
    <input type="text" class="form-control" name="Consecuencias" value="{{isset( $superPoderes->Consecuencias)?$superPoderes->Consecuencias:old('Consecuencias') }}" id="Consecuencias">
    
    <label for="Descripcion">Descripción</label>
    <input type="text" class="form-control" name="Descripcion" id="Descripcion"  value="{{isset( $superPoderes->Descripcion)?$superPoderes->Descripcion:old('Consecuencias') }}">

    <label for="hero_id">Heroe</label>
    <input type="text" class="form-control" name="hero_id" id="hero_id"  value="{{isset( $superPoderes->hero_id)?$superPoderes->hero_id:old('hero_id') }}">

    <br>
    <input class="btn btn-success" type="submit" class="form-control" value="{{$modo}} datos">
    <a class="btn btn-primary" href="{{ url('heroes/') }}">Regresar</a>
    

</div>