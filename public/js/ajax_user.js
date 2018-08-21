$('#registro_user').click(function(){

var dniUser = $('#txtdni').val();
var passwordUser = $('#txtclave').val();
var selectRolUser = $('#txtrol').val();

var route="http://localhost:8000/usuario";
var token=$('#token').val();

$.ajax({
	   url: route,
	   headers: {'X-CSRF-TOKEN': token},
	   type: 'POST',
	   dataType: 'json',
	   data:{ txtdni: dniUser, txtclave: passwordUser, txtrol: selectRolUser }
	   
	});

$('#modal').modal('toggle');
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
toastr.success('USUARIO REGISTRADO.',"MENSAJE");

});
