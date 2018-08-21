@extends('layout.admin')
@section('content')

<div class="mb-3"><a href="{{URL::to('rol')}}"><button class="btn btn-primary"><li class="fas fa-long-arrow-alt-left"></li> Regresar</button></a></div>
<h3>Editar Rol</h3>

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
<form method="post" action="{{URL::to('rol',$rol->id)}}">
{{ csrf_field() }}
        {{ method_field('PUT') }}

<section class="row">


<div class="col-lg-4 col-md-4 col-xs-12 ">
<div class="form-group">
<label class="text-uppercase font-weight-bold">NOMBRE :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
</div>
<input type="text" class="form-control" name="txtnombre" placeholder="Nombre" aria-label="Nombre de rol" aria-describedby="basic-addon1" value="{{$rol->nombre}}">
</div>
</div>
</div>

<div class="col-lg-4 col-md-4 col-xs-12">	
<div class="form-group">
<label class="text-uppercase font-weight-bold">DESCRIPCION :</label>
 
<div class="input-group mb-3 textgroup">
  <div class="input-group-prepend">
    <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
  </div>
  <input type="text" class="form-control" name="txtdescripcion" placeholder="Descripcion" aria-label="Descripcion" aria-describedby="basic-addon1" required="required" 
value="{{$rol->descripcion}}">
</div>

</div>
</div>

</section>
<div class="text-center"><button type="submit" class="btn btn-success"><li class="fas fa-user-edit"></li> Modificar</button></div>
</form>
@endsection