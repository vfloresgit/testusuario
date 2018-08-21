@extends('layout.admin')
@section('content')

<section class="mb-3 bg-dark p-2 seccion">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<a href="" data-toggle="modal" data-target=".ModalCreate"><button class="btn btn-primary"><li class="fas fa-user-plus"></li> NUEVO USUARIO</button></a>
</div>
</div>
</div>
</section>

<div class="modal fade ModalCreate" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header mb-4 bg-primary">
	<h2 class="text-center text-white text-uppercase">nuevo usuario</h2>
<button type="button" class="close" data-dismiss="modal">&times;</button>

</div>

<form method="post" id="signupForm" action="{{URL::to('usuario')}}">

<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

<div class="modal-body">
<div class="container">

<div class="row">

  <div class="col-md-3 field-label-responsive">
              <label for="name" class="text-uppercase">seleccione persona</label>     
  </div>

         <div class="col-md-6">
                  <div class="form-group">
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                          <select name="txtpersona" onchange="getDni(this.value)" id="txtpersona" class="w-25 form-control" aria-describedby="basic-addon1">
                          <option value="">Seleccione Persona</option>
                          @foreach($personas_sin_usuario as $sin_usuarios)
                          <option value="{{$sin_usuarios->dni}}">{{$sin_usuarios->nombre}},{{$sin_usuarios->apellidopaterno}} {{$sin_usuarios->apellidomaterno}}</option>
                          @endforeach
                          </select>
                        </div>
                  </div>
          </div>
    <div class="col-md-3">
              <div class="form-control-feedback">
                  <span class="text-danger align-middle">
                 
                  </span>
              </div>
    </div>
</div>

<div class="row">
  
            <div class="col-md-3 field-label-responsive">
                    <label for="dninumber" class="text-uppercase">login</label>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                    <input type="text" name="txtdni" class="form-control" id="txtdni" placeholder="Ingresar número de DNI" autofocus>
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
<input type="password" name="txtclave" class="form-control" id="txtclave" placeholder="Clave">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-control-feedback">
<span class="text-danger align-middle">

</span>
</div>
  </div>
</div>

<div class="row">
<div class="col-md-3 field-label-responsive">
<label for="confirm_password">CONFIRMAR CLAVE</label>
</div>
<div class="col-md-6">
<div class="form-group">
<div class="input-group mb-2 mr-sm-2 mb-sm-0">
<div class="input-group-addon" style="width: 2.6rem">
<i class="fa fa-repeat"></i>
</div>
<input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirmar clave">
</div>
</div>
</div>
<div class="col-md-3">
<div class="form-control-feedback">
<span class="text-danger align-middle">

<i class="fa fa-close" id="error_message_password"></i>

</span>
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
<select name="txtrol" id="txtrol" class="w-25 form-control" aria-describedby="basic-addon1">
<option value="">Seleccione Rol</option>
@foreach($Colum_rol as $roles)
<option value="{{$roles->id}}">{{$roles->nombre}}</option>
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


</div>
</div>

<div class="modal-footer text-center">

<button type="submit" id="registro_user" class="btn btn-success botonaccion" value="Submit"><li class="fas fa-user-plus"></li> REGISTRAR</button>

<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>

</div>
</form>
</div>
</div>
</div>



@if(session('success'))
<div class="alert alert-success" role="alert">
<strong style="font-size: 12px;">{{ session('success') }}</strong>
</div>
@endif

<div class="table-responsive">
<table id="table_id" class="display table table-striped tabla-principal" >
<thead>
<th>ID</th>
<th>PERSONA</th>
<th>USUARIO</th>
<th>ROL</th>
<th class="text-center">ACCIÓN</th>
</thead>
 @foreach ($usuarios as $contenido)
<tr> 
<td>{{ $contenido->id}}</td>
<td>{{ $contenido->p}}</td>
<td>{{ $contenido->dni}}</td>
<td>{{ $contenido->nombre}}</td>
<td>
<a href="" onclick="llamarmodal('{{$contenido->id}}')" data-toggle="modal" data-target="#myModal"><i title="Eliminar" class="fas fa-trash-alt"></i></a>
<a href="{{URL::to('usuario/edit',$contenido->id)}}"><i title="Editar" class="fas fas fa-user-edit"></i></a>   
</td>
</tr>
@endforeach 
</table>
</div>
<div class="modal" id="myModalDelete">
<div class="modal-dialog">
<div class="modal-content">
  <!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title"><li class="fas fa-question-circle"></li> Pregunta</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<!-- Modal body -->
<div class="modal-body">
<label>¿Esta seguro que desea eliminar el registro?</label>
</div>
<!-- Modal footer -->
<div class="modal-footer">

<input type="hidden" name="_token" id="token_delete" value="{{ csrf_token() }}">

<input type="hidden" id="textoeliminarUsuario" name="" value="">

<button type="button" class="btn btn-danger" id="eliminar_usuario"><li class="fas fa-user-slash"></li> Eliminar</button>

<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>

</div>
</div>
</div>
</div>
@endsection
@section('scripts')
<script>
function llamarmodal(id){

$('#textoeliminarUsuario').attr("value",id);
$('#myModalDelete').modal('show'); // abrir
//  $('#myModal').modal('hide'); // cerrar
}

function getDni(id){

$('#txtdni').attr("value",id);

}
</script>
@endsection