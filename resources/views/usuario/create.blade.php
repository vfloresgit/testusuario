@extends('layout.admin')
@section('content')

<div class="mb-3 ml-3">
<a href="{{URL::to('usuario')}}"><button class="btn btn-primary"><li class="fas fa-long-arrow-alt-left"></li> Regresar</button></a>


</div>

@if(count($errors)>0)
<ul>
	@foreach($errors->all() as $error)
	<li class="alert alert-danger">{{$error}}</li>
	@endforeach
</ul>
@endif

<form method="post" action="{{URL::to('usuario')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">



<section class="container">

 <div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<h2>Registro de nuevo usuario</h2>
<hr>
</div>
</div>


<div class="row">
<div class="col-md-3 field-label-responsive">
<label for="name">DNI</label>
</div>
<div class="col-md-6">
<div class="form-group">
<div class="input-group mb-2 mr-sm-2 mb-sm-0">
<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
<input type="number" min="0" name="txtdni" class="form-control" id="name"
                               placeholder="Ingresar número de DNI" required autofocus>
</div>
</div>
</div>
  <div class="col-md-3">
  <div class="form-control-feedback">
  <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
  </span>
 </div>
  </div>
  </div>
    
    <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">CLAVE</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="txtclave" class="form-control" id="password"
                               placeholder="Clave" required>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!--<i class="fa fa-close"> Example Error Message</i>-->
                        </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">CONFIRMAR CLAVE</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fa fa-repeat"></i>
                        </div>
                        <input type="password" name="" class="form-control"
                               id="password-confirm" placeholder="Confirmar clave" required>
                    </div>
                </div>
            </div>
        </div>

<div class="row">
<div class="col-md-3 field-label-responsive">
<label for="name">ROL</label>
</div>
<div class="col-md-6">
<div class="form-group">
<div class="input-group mb-2 mr-sm-2 mb-sm-0">
<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>

<select name="txtrol" class="w-25 form-control" aria-describedby="basic-addon1" required="required">
<option value="">Seleccione Rol</option>
@foreach($Colum_rol as $roles)
<option value="{{$roles->id}}">{{$roles->descripcion}}</option>
@endforeach
</select>


</div>
</div>
</div>
  <div class="col-md-3">
  <div class="form-control-feedback">
  <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
  </span>
 </div>
  </div>
  </div>
  <div class="text-center mt-4"><button type="submit" class="btn btn-success botonaccion mb-4"><li class="fas fa-user-plus"></li> REGISTRAR</button></div>

</section>
</form>	

@endsection
