@extends('layout.admin')
@section('content')

<div class="mb-3 ml-3">
<a href="{{URL::to('rol')}}"><button class="btn btn-primary botonaccion mr-4"><li class="fas fa-long-arrow-alt-left"></li> REGRESAR</button></a>
<label class="label text-uppercase mr-3" style="font-size: 15px; font-family: Roboto">Agregar</label>

<input type="text" class="mr-3" id="campocantidad" name="campocantidad">

registro(s)
<button type="button" id="btnalumnoagrega" class="btn btn-light">Continuar</button>
</div>

<h5 class="ml-4 mb-3 text-uppercase">CREAR ROL</h5>	
@if(count($errors)>0)
<ul>
	@foreach($errors->all() as $error)
	<li class="alert alert-danger">{{$error}}</li>
	@endforeach
</ul>
@endif



<form method="post" action="{{URL::to('rol')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">


<div id="formulario">
<section class="row">
	
<div class="col-lg-3 col-md-3 col-xs-12 ">
<div class="form-group">
<label class="text-uppercase font-weight-bold">NOMBRE DE ROL :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
</div>
<input type="text" class="form-control" name="txtnombre" placeholder="Nombre de rol" aria-label="Nombre de rol" aria-describedby="basic-addon1">
</div>
</div>
</div>

<div class="col-lg-3 col-md-3 col-xs-12">	
<div class="form-group">
<label class="text-uppercase font-weight-bold">DESCRIPCIÓN :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
</div>
  <input type="text" class="form-control" name="txtdescripcion" placeholder="Descripción" aria-label="Apellido Paterno" aria-describedby="basic-addon1" required="required">
</div>

</div>
</div>
</section>

</div>
<div class="text-center"><button type="submit" class="btn btn-success botonaccion mb-4"><li class="fas fa-user-plus"></li> REGISTRAR</button></div>
</form>
@endsection