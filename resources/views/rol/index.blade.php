@extends('layout.admin')
@section('content')

<section class="mb-3 bg-dark p-2 seccion">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="" data-toggle="modal" data-target=".ModalCreate"><button class="btn btn-primary"><li class="fas fa-user-plus"></li> NUEVO ROL</button></a>
            </div>
        </div>
    </div>
</section>

<div class="modal fade ModalCreate" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">


<div class="modal-header mb-4 bg-primary">
<h2 class="text-center text-white text-uppercase">nuevo rol</h2>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<form method="post" id="singrol" action="{{URL::to('rol')}}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

<div class="modal-body">
<div class="container">


<div class="row">

  <div class="col-lg-12 col-md-12 col-xs-12 ">
    <div class="form-group">
    <label class="text-uppercase font-weight-bold">NOMBRE DE ROL :</label>
        <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
        <div class="input-group mb-3 textgroup">
        <div class="input-group-prepend">
        <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
        </div>
        <input type="text" class="form-control" name="txtnombre" id="txtnombre" placeholder="Nombre de rol" aria-label="Nombre de rol" aria-describedby="basic-addon1" required>
        </div>
    </div>
  </div>
</div>
 
<div class="row">
<div class="col-lg-12 col-md-12 col-xs-12">	
<div class="form-group">
<label class="text-uppercase font-weight-bold">DESCRIPCIÓN :</label>
    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
<div class="input-group mb-3 textgroup">
<div class="input-group-prepend">
<span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
</div>
<input type="text" class="form-control" name="txtdescripcion" id="txtdescripcion" placeholder="Descripción" aria-label="Apellido Paterno" aria-describedby="basic-addon1" required="required">
</div>
</div>
</div>
</div>   
</div>
</div>


<div class="modal-footer text-center">
<button type="submit" id="registro_rol" class="btn btn-success botonaccion"><li class="fas fa-user-plus"></li> REGISTRAR</button>
<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
</div>
</form>
</div>
</div>
</div>

@if(session('success'))
<div class="alert alert-success" role="alert">
<strong>{{ session('success') }}</strong>
</div>
@endif

<div class="table-responsive">

<table id="table_id" class="display table table-striped tabla-principal">
<thead>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>DESCRIPCION</th>
    <th class="text-center">ACCIÓN</th>
</thead>
@foreach ($rol as $contenido)       
<tr> 
      <td>{{ $contenido->id}}</td>
      <td>{{ $contenido->nombre}}</td>
      <td>{{ $contenido->descripcion}}</td>
      <td>
      <a href="" onclick="llamarmodal('{{$contenido->id}}')" data-toggle="modal" data-target="#myModal"><i title="Eliminar" class="fas fa-trash-alt"></i></a>
      <a href="{{URL::to('rol/edit',$contenido->id)}}"><i title="Editar" class="fas fas fa-user-edit"></i></a>   
      </td>
</tr>
@endforeach
</table>

</div>

<div class="modal" id="myModalDelete">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<h4 class="modal-title"><li class="fas fa-question-circle"></li> Pregunta</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<div class="modal-body">
<label>¿Esta seguro que desea eliminar el registro?</label>

</div>
<div class="modal-footer">

<input type="hidden" name="_token" id="token_delete" value="{{ csrf_token() }}">

<input type="hidden" id="textoeliminar" name="" value="">

<button type="button" class="btn btn-danger" id="eliminar_rol"><li class="fas fa-user-slash"></li> Eliminar</button>

<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
</div>
</div>
</div>
</div>
@endsection

@section('scripts')
<script>
function llamarmodal(id){

$('#textoeliminar').attr("value",id);
$('#myModalDelete').modal('show'); // abrir
//  $('#myModal').modal('hide'); // cerrar

}
</script>
@endsection