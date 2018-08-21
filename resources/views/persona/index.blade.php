@extends('layout.admin')
@section('content')

<section class="mb-3 bg-dark p-2 seccion">
<div class="container-fluid">
<div class="row">
<div class="col-md-6">
<a href="" data-toggle="modal" data-target=".ModalCreate"><button class="btn btn-primary"><li class="fas fa-user-plus"></li> NUEVA PERSONA</button></a>
</div>
<div class="col-md-6">
<form method="post" action="{{route('persona.import')}}" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="file" class="" name="import_personas">
  <button class="btn btn-primary">Importar Excel</button>
</form>
</div>
<!--<div class="col-md-6">
<form method="post" action="{{URL::to('empresa')}}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

<select onchange="submit()" name="selectempresa">
  <option value="0">Seleccione Empresa</option>
  <option value="1">Makro</option>
  <option value="3">Saga</option>
  <option value="2">U.Pacifico</option>
</select>
</form>
</div>-->
</div>
</div>
</section>




<div class="modal fade ModalCreate" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">

<div class="modal-content">
<div class="modal-header mb-4 bg-primary">
<h2 class="text-center text-white text-uppercase">nueva persona</h2>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<form method="post" id="signpersonas" action="{{URL::to('persona')}}">
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

<div class="modal-body">
<div class="container">


<div class="row">

        <div class="col-lg-6 col-md-6 col-xs-12 ">
              <div class="form-group">
              <label class="text-uppercase font-weight-bold">NOMBRES :</label>
                  <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
                    <div class="input-group mb-3 textgroup">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
                      </div>
                      <input type="text" class="form-control" name="txtnombre" placeholder="Nombre" id="txtnombre" aria-label="Nombre de usuario" aria-describedby="basic-addon1" required="required">
                    </div>
              </div>
        </div>

        <div class="col-lg-6 col-md-6 col-xs-12">   
                <div class="form-group">
                    <label class="text-uppercase font-weight-bold">APELLIDO PATERNO :</label>
                    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
                      <div class="input-group mb-3 textgroup">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
                        </div>
                        <input type="text" class="form-control" name="txtpaterno" placeholder="Apellido Paterno" id="txtpaterno" aria-label="Apellido Paterno" aria-describedby="basic-addon1" required="required">
                      </div>

                </div>
        </div>
</div>

<div class="row">
      <div class="col-lg-6 col-md-6 col-xs-12">   
              <div class="form-group">
                  <label class="text-uppercase font-weight-bold">APELLIDO MATERNO :</label>
                  <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
              <div class="input-group mb-3 textgroup">
              <div class="input-group-prepend">
              <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
              </div>
              <input type="text" class="form-control" name="txtmaterno" placeholder="Apellido Materno" id="txtmaterno" aria-label="Apellido Materno" aria-describedby="basic-addon1" required="required">
              </div>
              </div>
      </div>
        <div class="col-lg-6 col-md-6 col-xs-12 ">
              <div class="form-group">
              <label class="text-uppercase font-weight-bold">EMAIL :</label>
              <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
              <div class="input-group mb-3 textgroup">
              <div class="input-group-prepend">
              <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-envelope"></li></span>
              </div>
              <input type="email" class="form-control" name="txtemail" placeholder="Correo electrónico" id="txtemail" aria-label="Correo electrónico" aria-describedby="basic-addon1" required="required">
              </div>

              </div>
        </div>
</div>

<div class="row">
      <div class="col-lg-6 col-md-6 col-xs-12">   
            <div class="form-group">
                <label class="text-uppercase font-weight-bold">DNI :</label>
                <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
            <div class="input-group mb-3 textgroup">
            <div class="input-group-prepend">
            <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-address-card"></li></span>
            </div>
            <input type="number" class="form-control" name="textdni" placeholder="Número de DNI" id="textdni" aria-label="Número de DNI" aria-describedby="basic-addon1" required="required">
            </div>
            </div>
      </div>
      <div class="col-lg-6 col-md-6 col-xs-12">   
              <div class="form-group">
              <label class="text-uppercase font-weight-bold">DISTRITO :</label>
                  <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
              <div class="input-group mb-3 textgroup">
              <div class="input-group-prepend">
              <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-map-marker"></li></span>
              </div>
              <input type="text" class="form-control" name="txtdistrito" placeholder="Distrito" id="txtdistrito" aria-label="Distrito" aria-describedby="basic-addon1" required="required">
              </div>
              </div>
      </div>
</div>

<div class="row">
       <div class="col-lg-6 col-md-6 col-xs-12 ">
            <div class="form-group">
                <label class="text-uppercase font-weight-bold">DIRECCION :</label>
                <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
            <div class="input-group mb-3 textgroup">
            <div class="input-group-prepend">
            <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-map-marker"></li></span>
            </div>
            <input type="text" class="form-control" name="txtdireccion" placeholder="Dirección" id="txtdireccion" aria-label="Dirección" aria-describedby="basic-addon1" required="required">
            </div>
            </div>
      </div>
<div class="col-lg-6 col-md-6 col-xs-12">   
        <div class="form-group">
            <label class="text-uppercase font-weight-bold">TELÉFONO MOVIL :</label>
            <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
              <div class="input-group mb-3 textgroup">
              <div class="input-group-prepend">
              <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-mobile-alt"></li></span>
              </div>
              <input type="text" class="form-control" name="txttlfmovil" placeholder="Teléfono movil" id="txttlfmovil" aria-label="Teléfono movil" aria-describedby="basic-addon1" required="required">
              </div>
        </div>
</div>   
</div>

<div class="row">
      <div class="col-lg-6 col-md-6 col-xs-12"> 
              <div class="form-group">
              <label class="text-uppercase font-weight-bold">TELÉFONO FIJO :</label>

              <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
              <div class="input-group mb-3 textgroup">
              <div class="input-group-prepend">
              <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-phone"></li></span>
              </div>
              <input type="text" class="form-control" name="txttlffijo" placeholder="Teléfono fijo" id="txttlffijo" aria-label="Teléfono fijo" aria-describedby="basic-addon1" required="required">
              </div>

              </div>
              </div>
              <div class="col-lg-6 col-md-6 col-xs-12 ">
              <div class="form-group">
              <label class="text-uppercase font-weight-bold">FECHA DE NACIMIENTO :</label>
              <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
              <div class="input-group mb-3 textgroup">
              <div class="input-group-prepend">
              <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user-circle"></li></span>
              </div>
              <input type="date" class="form-control" name="txtfechanacimiento" placeholder="Fecha de nacimiento" id="txtfechanacimiento" aria-label="Fecha de nacimiento" aria-describedby="basic-addon1" required="required">
              </div>
              </div>
      </div>   
</div>
   
</div>
</div>
<div class="modal-footer text-center">
<button type="submit" id="registro_persona" class="btn btn-success botonaccion"><li class="fas fa-user-plus"></li> REGISTRAR</button>
<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
</div>


</form>
</div>
</div>
</div>
<!-- MODAL PARA EDITAR--->
<!-- MODAL PARA EDITAR--->
<!-- MODAL PARA EDITAR--->
<!-- MODAL PARA EDITAR--->
<!-- MODAL PARA EDITAR--->
<!-- MODAL PARA EDITAR--->
<!-- MODAL PARA EDITAR--->



<div class="modal fade ModalEdit" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">

<div class="modal-content">
<div class="modal-header mb-4 bg-primary">
<h2 class="text-center text-white text-uppercase">editar persona</h2>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>


<input type="hidden" name="_token" id="tokenedit" value="{{ csrf_token() }}">

<div class="modal-body">
<div class="container">


<div class="row">

    <div class="col-lg-6 col-md-6 col-xs-12 ">
          <div class="form-group">
              <label class="text-uppercase font-weight-bold">NOMBRES :</label>
                  <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
              <div class="input-group mb-3 textgroup">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
                      </div>
                      <input type="text" class="form-control" name="nombreedit" placeholder="Nombre" id="nombreedit" aria-label="Nombre de usuario" aria-describedby="basic-addon1" required="required">
              </div>
          </div>
    </div>

        <div class="col-lg-6 col-md-6 col-xs-12">   
                <div class="form-group">
                    <label class="text-uppercase font-weight-bold">APELLIDO PATERNO :</label>
                    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
                      <div class="input-group mb-3 textgroup">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
                        </div>
                        <input type="text" class="form-control" name="paternoedit" placeholder="Apellido Paterno" id="paternoedit" aria-label="Apellido Paterno" aria-describedby="basic-addon1" required="required">
                      </div>

                </div>
        </div>
</div>

<div class="row">
      <div class="col-lg-6 col-md-6 col-xs-12">   
              <div class="form-group">
                  <label class="text-uppercase font-weight-bold">APELLIDO MATERNO :</label>
                  <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
              <div class="input-group mb-3 textgroup">
              <div class="input-group-prepend">
              <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user"></li></span>
              </div>
              <input type="text" class="form-control" name="maternoedit" placeholder="Apellido Materno" id="maternoedit" aria-label="Apellido Materno" aria-describedby="basic-addon1" required="required">
              </div>
              </div>
      </div>
        <div class="col-lg-6 col-md-6 col-xs-12 ">
              <div class="form-group">
              <label class="text-uppercase font-weight-bold">EMAIL :</label>
              <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
              <div class="input-group mb-3 textgroup">
              <div class="input-group-prepend">
              <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-envelope"></li></span>
              </div>
              <input type="email" class="form-control" name="emailedit" placeholder="Correo electrónico" id="emailedit" aria-label="Correo electrónico" aria-describedby="basic-addon1" required="required">
              </div>

              </div>
        </div>
</div>

<div class="row">
      <div class="col-lg-6 col-md-6 col-xs-12">   
            <div class="form-group">
                <label class="text-uppercase font-weight-bold">DNI :</label>
                <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
            <div class="input-group mb-3 textgroup">
            <div class="input-group-prepend">
            <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-address-card"></li></span>
            </div>
            <input type="number" class="form-control" name="dniedit" placeholder="Número de DNI" id="dniedit" aria-label="Número de DNI" aria-describedby="basic-addon1" required="required">
            </div>
            </div>
      </div>
      <div class="col-lg-6 col-md-6 col-xs-12">   
              <div class="form-group">
              <label class="text-uppercase font-weight-bold">DISTRITO :</label>
                  <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
              <div class="input-group mb-3 textgroup">
              <div class="input-group-prepend">
              <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-map-marker"></li></span>
              </div>
              <input type="text" class="form-control" name="distritoedit" placeholder="Distrito" id="distritoedit" aria-label="Distrito" aria-describedby="basic-addon1" required="required">
              </div>
              </div>
      </div>
</div>

<div class="row">
       <div class="col-lg-6 col-md-6 col-xs-12 ">
            <div class="form-group">
                <label class="text-uppercase font-weight-bold">DIRECCION :</label>
                <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
            <div class="input-group mb-3 textgroup">
            <div class="input-group-prepend">
            <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-map-marker"></li></span>
            </div>
            <input type="text" class="form-control" name="direccionedit" placeholder="Dirección" id="direccionedit" aria-label="Dirección" aria-describedby="basic-addon1" required="required">
            </div>
            </div>
      </div>
<div class="col-lg-6 col-md-6 col-xs-12">   
        <div class="form-group">
            <label class="text-uppercase font-weight-bold">TELÉFONO MOVIL :</label>
            <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
              <div class="input-group mb-3 textgroup">
              <div class="input-group-prepend">
              <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-mobile-alt"></li></span>
              </div>
              <input type="text" class="form-control" name="tlfmoviledit" placeholder="Teléfono movil" id="tlfmoviledit" aria-label="Teléfono movil" aria-describedby="basic-addon1" required="required">
              </div>
        </div>
</div>   
</div>

<div class="row">
      <div class="col-lg-6 col-md-6 col-xs-12"> 
              <div class="form-group">
                    <label class="text-uppercase font-weight-bold">TELÉFONO FIJO :</label>

                    <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
                    <div class="input-group mb-3 textgroup">
                    <div class="input-group-prepend">
                    <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-phone"></li></span>
                    </div>
                    <input type="text" class="form-control" name="tlffijoedit" placeholder="Teléfono fijo" id="tlffijoedit" aria-label="Teléfono fijo" aria-describedby="basic-addon1" required="required">
                    </div>

              </div>
              </div>
              <div class="col-lg-6 col-md-6 col-xs-12 ">
              <div class="form-group">
              <label class="text-uppercase font-weight-bold">FECHA DE NACIMIENTO :</label>
              <!--<input type="text" class="form-control w-100" name="" placeholder="Escriba su nombre">-->
              <div class="input-group mb-3 textgroup">
              <div class="input-group-prepend">
              <span class="input-group-text bg-dark text-white" id="basic-addon1"><li class="fas fa-user-circle"></li></span>
              </div>
              <input type="date" class="form-control" name="fechanacimientoedit" placeholder="Fecha de nacimiento" id="fechanacimientoedit" aria-label="Fecha de nacimiento" aria-describedby="basic-addon1" required="required">
              </div>
              </div>
      </div>   
</div>
   
</div>
</div>
<div class="modal-footer text-center">
  <input type="hidden" name="idepersona" id="idepersona"> 
<button type="submit" id="editar_persona" class="btn btn-success botonaccion"><li class="fas fa-user-plus"></li> REGISTRAR</button>
<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
</div>


</form>
</div>
</div>
</div>  

<section class="table-responsive">
<table id="table_id" class="display table table-striped tabla-principal">
<thead>
<th>ID</th>
<th>NOMBRE</th>
<th>APELLIDO PATERNO</th>
<th>APELLIDO MATERNO</th>
<th>EMAIL</th>
<th>DNI</th>
<th>DISTRITO</th>
<th>DIRECCIÓN</th>
<th>TLF MOVIL</th>
<th>TLF FIJO</th>
<th>FECHA DE NACIMIENTO</th>
<th class="text-center">ACCIÓN</th>
</thead>

@foreach ($personas as $contenido)       
<tr> 
  <td>{{ $contenido->id }}</td>
  <td>{{ $contenido->nombre }}</td>
  <td>{{ $contenido->apellidopaterno }}</td>
  <td>{{ $contenido->apellidomaterno }}</td>
  <td>{{ $contenido->email }}</td>
  <td>{{ $contenido->dni }}</td>
  <td>{{ $contenido->distrito }}</td>
  <td>{{ $contenido->direccion }}</td>
  <td>{{ $contenido->telefonomovil }}</td>
  <td>{{ $contenido->telefonofijo }}</td>
  <td>{{ $contenido->fechanacimiento }}</td>
  <td>
     <a href="" onclick="llamarmodal('{{$contenido->id}}')" data-toggle="modal" data-target="#myModal"><i title="Eliminar" class="fas fa-trash-alt"></i></a>
     <a onclick="editarPersona('{{$contenido->id}}')"><i title="Editar" class="fas fas fa-user-edit"></i></a>   
  </td>
</tr>
@endforeach
</table>




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

                      <input type="hidden" id="textoeliminaPersona" name="" value="">

                      <button type="button" id="eliminar_persona" class="btn btn-danger"><li class="fas fa-user-slash"></li> Eliminar</button>


                      <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>

                </div>
            </div>
      </div>
</div>
</section>




@endsection

@section('scripts')
<script>
function llamarmodal(id){

$('#textoeliminaPersona').attr("value",id);
$('#myModalDelete').modal('show'); // abrir
//  $('#myModal').modal('hide'); // cerrar

}
</script>
@endsection