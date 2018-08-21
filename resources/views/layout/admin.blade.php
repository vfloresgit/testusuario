<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
  <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.dataTables.css')}}"> -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
 
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: {{$ProfileColor}}">
        <a class="navbar-brand text-white" href="#"><img src="http://localhost:8000/images/{{$ProfilePath}}" width="150px"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link text-white" href="{{URL::to('persona')}}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{URL::to('usuario')}}">Usuarios</a>
      </li>
    </ul>   

      <form class="form-inline my-2 my-lg-0" action="{{URL::to('login/cerrarSession')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Cerrar Session</button>
      </form>
 
</div>
</nav>




<div class="container-fluid mt-3">
@yield('content')

@yield('scripts')
</div>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<!-- libreria Toastr -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- end libreria Toastr -->
<script src="{{asset('js/bootstrap.js')}}"></script>
<!--<script type="text/javascript" charset="utf8" src="{{asset('js/jquery.dataTables.js')}}"></script>-->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('js/main.js')}}"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript" src="{{asset('js/event.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.validate.js')}}"></script>
<script type="text/javascript">

$('#eliminar_rol').click(function(){
  
var codigoRol = $('#textoeliminar').val();

var route = "http://localhost:8000/rol/destroy";
var token= $('#token_delete').val();

$.ajax({
	 url: route,
	 headers: {'X-CSRF-TOKEN': token},
	 type: 'POST',
	 dataType: 'json',
	 data:{ textoeliminar: codigoRol}
});

$('#myModalDelete').modal('toggle');
toastr.options = {
  "closeButton": true,
  "debug": true,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
 toastr.success('ROL ELIMINADO.',"MENSAJE");

});

$('#eliminar_usuario').click(function(){
  
var codigoRol = $('#textoeliminarUsuario').val();

var route = "http://localhost:8000/usuario/destroy";
var token= $('#token_delete').val();

$.ajax({
   url: route,
   headers: {'X-CSRF-TOKEN': token},
   type: 'POST',
   dataType: 'json',
   data:{ textoeliminarUsuario: codigoRol}
});

$('#myModalDelete').modal('toggle');
toastr.options = {
  "closeButton": true,
  "debug": true,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
 toastr.success('USUARIO ELIMINADO.',"MENSAJE");

});

$('#eliminar_persona').click(function(){
  
var codigoRol = $('#textoeliminaPersona').val();


var route = "http://localhost:8000/persona/destroy";
var token= $('#token_delete').val();

$.ajax({
   url: route,
   headers: {'X-CSRF-TOKEN': token},
   type: 'POST',
   dataType: 'json',
   data:{ textoeliminaPersona: codigoRol}
});

$('#myModalDelete').modal('toggle');
toastr.options = {
  "closeButton": true,
  "debug": true,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
 toastr.success('PERSONA ELIMINADO.',"MENSAJE");

});
</script>
<script type="text/javascript">
function editarPersona(id){
    
   var ruta = "http://localhost:8000/persona/edit/"+id;

   $.ajax({ 
        type: "GET",
        url: ruta,
        success: function(){
    
        },
        error: function (request, status, error) {
      
        }
    }).done( 
      
      function(respuesta) 
      {    
         var ide=respuesta.listado.id;
         var nombre=respuesta.listado.nombre;
         var apepaterno=respuesta.listado.apellidopaterno;
         var apematerno=respuesta.listado.apellidomaterno;
         var email=respuesta.listado.email;
         var numdni=respuesta.listado.dni;
         var distrito=respuesta.listado.distrito;
         var direccion=respuesta.listado.direccion;
         var tlfmovil=respuesta.listado.telefonomovil;
         var tlffijo=respuesta.listado.telefonofijo;
         var fechanac=respuesta.listado.fechanacimiento;


         $('#ModalEdit').modal('show');
         $('#idepersona').attr("value",ide);
         $('#nombreedit').attr("value",nombre);
         $('#paternoedit').attr("value",apepaterno);
         $('#maternoedit').attr("value",apematerno);
         $('#emailedit').attr("value",email);
         $('#dniedit').attr("value",numdni);
         $('#distritoedit').attr("value",distrito);
         $('#direccionedit').attr("value",direccion);
         $('#tlfmoviledit').attr("value",tlfmovil);
         $('#tlffijoedit').attr("value",tlffijo);
         $('#fechanacimientoedit').attr("value",fechanac);


      }

  );
}
</script>
<script type="text/javascript">

$('#editar_persona').click(function(){
var route = "http://localhost:8000/persona/actualizar";

    var ide= $('#idepersona').val();
    var nombre= $('#nombreedit').val();
    var appaterno= $('#paternoedit').val();
    var apmaterno= $('#maternoedit').val();
    var email= $('#emailedit').val();
    var dni= $('#dniedit').val();
    var distrito= $('#distritoedit').val();
    var direccion= $('#direccionedit').val();
    var telefonomovil= $('#tlfmoviledit').val();
    var telefonfijo= $('#tlffijoedit').val();
    var fechanac= $('#fechanacimientoedit').val();
    var token= $('#tokenedit').val();


   $.ajax({ 
        url: route,
      headers: {'X-CSRF-TOKEN': token},
        type: "POST",
        data:{ id:ide,nombre: nombre,appaterno: appaterno,apmaterno: apmaterno,email: email,dni: dni,distrito: distrito,direccion:direccion,telefonomovil:telefonomovil,telefonfijo:telefonfijo,fechanac:fechanac},
        success: function(){
    
        },
        error: function (request, status, error){
        
        }
    }).done( 
      
       $('#ModalEdit').modal('toggle')

    );

});
</script>
</body>
</html>