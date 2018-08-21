@extends('layout.admin')
@section('content')

<div class="mb-3 ml-3">
<a href="{{URL::to('persona')}}"><button class="btn btn-primary botonaccion mr-4"><li class="fas fa-long-arrow-alt-left"></li> REGRESAR</button></a>
<label class="label text-uppercase mr-3" style="font-size: 15px; font-family: Roboto">Agregar</label>

<input type="text" class="mr-3" id="campocantidad" name="campocantidad">

registro(s)
<button type="button" id="btnalumnoagrega" class="btn btn-light">Continuar</button>
</div>
<h5 class="ml-4 mb-3 text-uppercase">CREAR PERSONA</h5>	
@if(count($errors)>0)
<ul>
	@foreach($errors->all() as $error)
	<li class="alert alert-danger">{{$error}}</li>
	@endforeach
</ul>
@endif



<form method="post" action="{{URL::to('persona')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">


<div id="formulario">
<section class="row">
<div class="col-lg-3 col-md-3 col-xs-12 ">
<div class="form-group">
<label class="text-uppercase font-weight-bold">NOMBRES :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
  <div class="input-group-prepend">
    <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
  </div>
  <input type="text" class="form-control" name="txtnombre[]" placeholder="Nombre" aria-label="Nombre de usuario" aria-describedby="basic-addon1">
</div>
</div>
</div>

<div class="col-lg-3 col-md-3 col-xs-12">	
<div class="form-group">
    <label class="text-uppercase font-weight-bold">APELLIDO PATERNO :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
  <div class="input-group-prepend">
    <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
  </div>
  <input type="text" class="form-control" name="txtpaterno[]" placeholder="Apellido Paterno" aria-label="Apellido Paterno" aria-describedby="basic-addon1" required="required">
</div>

</div>
</div>


<div class="col-lg-3 col-md-3 col-xs-12">	
<div class="form-group">
    <label class="text-uppercase font-weight-bold">APELLIDO MATERNO :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
</div>
<input type="text" class="form-control" name="txtmaterno[]" placeholder="Apellido Materno" aria-label="Apellido Materno" aria-describedby="basic-addon1" required="required">
</div>
</div>
</div>



<div class="col-lg-3 col-md-3 col-xs-12 ">
<div class="form-group">
    <label class="text-uppercase font-weight-bold">EMAIL :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-envelope"></li></span>
</div>
<input type="email" class="form-control" name="txtemail[]" placeholder="Correo electrónico" aria-label="Correo electrónico" aria-describedby="basic-addon1" required="required">
</div>

</div>
</div>
</section>







<section class="row">
<div class="col-lg-3 col-md-3 col-xs-12">	
<div class="form-group">
    <label class="text-uppercase font-weight-bold">DNI :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-address-card"></li></span>
</div>
<input type="number" class="form-control" name="textdni[]" placeholder="Número de DNI" aria-label="Número de DNI" aria-describedby="basic-addon1" required="required">
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-xs-12">	
<div class="form-group">
<label class="text-uppercase font-weight-bold">DISTRITO :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-map-marker"></li></span>
</div>
<input type="text" class="form-control" name="txtdistrito[]" placeholder="Distrito" aria-label="Distrito" aria-describedby="basic-addon1" required="required">
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-xs-12 ">
<div class="form-group">
    <label class="text-uppercase font-weight-bold">DIRECCION :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-map-marker"></li></span>
</div>
<input type="text" class="form-control" name="txtdireccion[]" placeholder="Dirección" aria-label="Dirección" aria-describedby="basic-addon1" required="required">
</div>
</div>
</div>

<div class="col-lg-3 col-md-3 col-xs-12">	
<div class="form-group">
    <label class="text-uppercase font-weight-bold">TELÉFONO MOVIL :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-mobile-alt"></li></span>
</div>
<input type="text" class="form-control" name="txttlfmovil[]" placeholder="Teléfono movil" aria-label="Teléfono movil" aria-describedby="basic-addon1" required="required">
</div>
</div>
</div>
</section>





<section class="row">
<div class="col-lg-3 col-md-3 col-xs-12">	
<div class="form-group">
<label class="text-uppercase font-weight-bold">TELÉFONO FIJO :</label>
<!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->

 <div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-phone"></li></span>
</div>
<input type="text" class="form-control" name="txttlffijo[]" placeholder="Teléfono fijo" aria-label="Teléfono fijo" aria-describedby="basic-addon1" required="required">
</div>

</div>
</div>
<div class="col-lg-3 col-md-3 col-xs-12 ">
<div class="form-group">
<label class="text-uppercase font-weight-bold">FECHA DE NACIMIENTO :</label>
<!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->

<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user-circle"></li></span>
</div>
<input type="date" class="form-control" name="txtfechanacimiento[]" placeholder="Fecha de nacimiento" aria-label="Fecha de nacimiento" aria-describedby="basic-addon1" required="required">
</div>
</div>
</div>	
</section>
<hr>
</div>
<div id="formulario">
<section class="row">
<div class="col-lg-3 col-md-3 col-xs-12 ">
<div class="form-group">
<label class="text-uppercase font-weight-bold">NOMBRES :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
  <div class="input-group-prepend">
    <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
  </div>
  <input type="text" class="form-control" name="txtnombre[]" placeholder="Nombre" aria-label="Nombre de usuario" aria-describedby="basic-addon1">
</div>
</div>
</div>

<div class="col-lg-3 col-md-3 col-xs-12">	
<div class="form-group">
    <label class="text-uppercase font-weight-bold">APELLIDO PATERNO :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
  <div class="input-group-prepend">
    <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
  </div>
  <input type="text" class="form-control" name="txtpaterno[]" placeholder="Apellido Paterno" aria-label="Apellido Paterno" aria-describedby="basic-addon1" required="required">
</div>

</div>
</div>
<div class="col-lg-3 col-md-3 col-xs-12">	
<div class="form-group">
    <label class="text-uppercase font-weight-bold">APELLIDO MATERNO :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
</div>
<input type="text" class="form-control" name="txtmaterno[]" placeholder="Apellido Materno" aria-label="Apellido Materno" aria-describedby="basic-addon1" required="required">
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-xs-12 ">
<div class="form-group">
    <label class="text-uppercase font-weight-bold">EMAIL :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-envelope"></li></span>
</div>
<input type="email" class="form-control" name="txtemail[]" placeholder="Correo electrónico" aria-label="Correo electrónico" aria-describedby="basic-addon1" required="required">
</div>

</div>
</div>
</section>







<section class="row">
<div class="col-lg-3 col-md-3 col-xs-12">	
<div class="form-group">
    <label class="text-uppercase font-weight-bold">DNI :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-address-card"></li></span>
</div>
<input type="number" class="form-control" name="textdni[]" placeholder="Número de DNI" aria-label="Número de DNI" aria-describedby="basic-addon1" required="required">
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-xs-12">	
<div class="form-group">
<label class="text-uppercase font-weight-bold">DISTRITO :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-map-marker"></li></span>
</div>
<input type="text" class="form-control" name="txtdistrito[]" placeholder="Distrito" aria-label="Distrito" aria-describedby="basic-addon1" required="required">
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-xs-12 ">
<div class="form-group">
    <label class="text-uppercase font-weight-bold">DIRECCION :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-map-marker"></li></span>
</div>
<input type="text" class="form-control" name="txtdireccion[]" placeholder="Dirección" aria-label="Dirección" aria-describedby="basic-addon1" required="required">
</div>
</div>
</div>

<div class="col-lg-3 col-md-3 col-xs-12">	
<div class="form-group">
    <label class="text-uppercase font-weight-bold">TELÉFONO MOVIL :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-mobile-alt"></li></span>
</div>
<input type="text" class="form-control" name="txttlfmovil[]" placeholder="Teléfono movil" aria-label="Teléfono movil" aria-describedby="basic-addon1" required="required">
</div>
</div>
</div>
</section>





<section class="row">
<div class="col-lg-3 col-md-3 col-xs-12">	
<div class="form-group">
<label class="text-uppercase font-weight-bold">TELÉFONO FIJO :</label>
<!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->

 <div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-phone"></li></span>
</div>
<input type="text" class="form-control" name="txttlffijo[]" placeholder="Teléfono fijo" aria-label="Teléfono fijo" aria-describedby="basic-addon1" required="required">
</div>

</div>
</div>
<div class="col-lg-3 col-md-3 col-xs-12 ">
<div class="form-group">
<label class="text-uppercase font-weight-bold">FECHA DE NACIMIENTO :</label>
<!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->

<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user-circle"></li></span>
</div>
<input type="date" class="form-control" name="txtfechanacimiento[]" placeholder="Fecha de nacimiento" aria-label="Fecha de nacimiento" aria-describedby="basic-addon1" required="required">
</div>
</div>
</div>	
</section>
<hr>
</div>
<div class="text-center"><button type="submit" class="btn btn-success botonaccion mb-4"><li class="fas fa-user-plus"></li> REGISTRAR</button></div>
</form>
@endsection