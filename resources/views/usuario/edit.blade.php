@extends('layout.admin')
@section('content')

<div class="mb-3"><a href="{{URL::to('usuario')}}"><button class="btn btn-primary">Regresar</button></a></div>
<h3>Editar Usuario</h3>
@if(count($errors)>0)
<ul>
	@foreach($errors->all() as $error)
	<li class="alert alert-danger">{{$error}}</li>
	@endforeach
</ul>
@endif
@if(session('success'))
<div class="alert alert-success" role="alert">
  <strong style="font-size: 12px;">{{ session('success') }}</strong>
</div>
@endif
<form method="post" action="{{URL::to('usuario',$usuario->id)}}">
{{ csrf_field() }}
        {{ method_field('PUT') }}


<section class="row">
<div class="col-lg-4 col-md-4 col-xs-12 ">
<div class="form-group">
<label class="text-uppercase font-weight-bold">DNI :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
  <div class="input-group-prepend">
    <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
  </div>
  <input type="number" min="0" class="form-control" name="txtdni" placeholder="Ingrese número DNI" aria-label="Número de DNI" aria-describedby="basic-addon1" required="required" value="{{$usuario->dni}}">
</div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-xs-12">	
<div class="form-group">
    <label class="text-uppercase font-weight-bold">PASSWORD:</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
  <div class="input-group-prepend">
    <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
  </div>
  <input type="password" class="form-control" name="txtclave" placeholder="Ingresar Clave" aria-label="Ingresar clave" aria-describedby="basic-addon1">
</div>

</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">	
<div class="form-group">
    <label class="text-uppercase font-weight-bold">ROL:</label>
 <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li>
</span>
</div>

<select name="txtrol" class="w-25 form-control" aria-describedby="basic-addon1" required="required">
<option value="">Seleccione Rol</option>
@foreach($roles as $rol)
@if($rol->id==$usuario->rol_id)
<option value="{{$rol->id}}" selected="selected">{{$rol->nombre}}</option>
@else
<option value="{{$rol->id}}">{{$rol->nombre}}</option>
@endif
@endforeach
</select>

</div>
</div>
</div>
</section>
<div class="text-center"><button type="submit" class="btn btn-success botonaccion mb-4"><li class="fas fa-user-plus"></li> REGISTRAR</button></div>



</form>
@endsection