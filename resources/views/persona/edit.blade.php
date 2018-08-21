@extends('layout.admin')
@section('content')

<div class="mb-3"><a href="{{URL::to('persona')}}"><button class="btn btn-primary"><li class="fas fa-long-arrow-alt-left"></li> Regresar</button></a></div>
<h3>Editar Persona</h3>
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
<form method="post" action="{{URL::to('persona',$persona->id)}}">
{{ csrf_field() }}
        {{ method_field('PUT') }}

<section class="row">


<div class="col-lg-4 col-md-4 col-xs-12 ">
<div class="form-group">
<label class="text-uppercase font-weight-bold">NOMBRES :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
  <div class="input-group-prepend">
    <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
  </div>
  <input type="text" class="form-control" name="txtnombre" placeholder="Nombre" aria-label="Nombre de usuario" aria-describedby="basic-addon1" value="{{$persona->nombre}}">
</div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-xs-12">	
<div class="form-group">
    <label class="text-uppercase font-weight-bold">APELLIDO PATERNO :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
  <div class="input-group-prepend">
    <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
  </div>
  <input type="text" class="form-control" name="txtpaterno" placeholder="Apellido Paterno" aria-label="Apellido Paterno" aria-describedby="basic-addon1" required="required" 
value="{{$persona->apellidopaterno}}">
</div>

</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">	
<div class="form-group">
    <label class="text-uppercase font-weight-bold">APELLIDO MATERNO :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
</div>
<input type="text" class="form-control" name="txtmaterno" placeholder="Apellido Materno" aria-label="Apellido Materno" aria-describedby="basic-addon1" required="required" value="{{$persona->apellidomaterno}}">
</div>

</div>

</div>
</section>
<section class="row">


<div class="col-lg-4 col-md-4 col-xs-12 ">
<div class="form-group">
    <label class="text-uppercase font-weight-bold">EMAIL :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-envelope"></li></span>
</div>
<input type="email" class="form-control" name="txtemail" placeholder="Correo electrónico" aria-label="Correo electrónico" aria-describedby="basic-addon1" required="required" 
value="{{$persona->email}}">
</div>

</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">	
<div class="form-group">
    <label class="text-uppercase font-weight-bold">DNI :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-address-card"></li></span>
</div>
<input type="number" class="form-control" name="textdni" placeholder="Número de DNI" aria-label="Número de DNI" aria-describedby="basic-addon1" required="required" 
value="{{$persona->dni}}">
</div>

</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">	
<div class="form-group">
    <label class="text-uppercase font-weight-bold">DISTRITO :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-map-marker"></li></span>
</div>
<input type="text" class="form-control" name="txtdistrito" placeholder="Distrito" aria-label="Distrito" aria-describedby="basic-addon1" required="required" 
value="{{$persona->distrito}}">
</div>

</div>

</div>



</section>

<section class="row">


<div class="col-lg-4 col-md-4 col-xs-12 ">
<div class="form-group">
    <label class="text-uppercase font-weight-bold">DIRECCION :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-map-marker"></li></span>
</div>
<input type="text" class="form-control" name="txtdireccion" placeholder="Dirección" aria-label="Dirección" aria-describedby="basic-addon1" value="{{$persona->direccion}}" required="required">
</div>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">	
<div class="form-group">
    <label class="text-uppercase font-weight-bold">TELÉFONO MOVIL :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-mobile-alt"></li></span>
</div>
<input type="text" class="form-control" name="txttlfmovil" placeholder="Teléfono movil" aria-label="Teléfono movil" aria-describedby="basic-addon1" value="{{$persona->telefonomovil}}" required="required">
</div>

</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">	
<div class="form-group">
    <label class="text-uppercase font-weight-bold">TELÉFONO FIJO :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->

 <div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-phone"></li></span>
</div>
<input type="text" class="form-control" name="txttlffijo" placeholder="Teléfono fijo" aria-label="Teléfono fijo" aria-describedby="basic-addon1" value="{{$persona->telefonofijo}}" required="required">
</div>

</div>
</div>	
</section>
<section class="row">


<div class="col-lg-4 col-md-4 col-xs-12 ">
<div class="form-group">
    <label class="text-uppercase font-weight-bold">FECHA DE NACIMIENTO :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->

<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user-circle"></li></span>
</div>
<input type="date" class="form-control" name="txtfechanacimiento" placeholder="Fecha de nacimiento" aria-label="Fecha de nacimiento" value="{{$persona->fechanacimiento}}" aria-describedby="basic-addon1" required="required">
</div>
</div>
</div>
</section>
<div class="text-center"><button type="submit" class="btn btn-success"><li class="fas fa-user-edit"></li> Modificar</button></div>
</form>
@endsection