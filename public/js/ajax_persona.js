$('#registro_persona').click(function(){
  

var namePersona = $('#txtnombre').val();
var apepatPersona = $('#txtpaterno').val();
var apematPersona = $('#txtmaterno').val();
var emailPersona = $('#txtemail').val();
var dniPersona = $('#textdni').val();
var distritoPersona = $('#txtdistrito').val();
var direccionPersona = $('#txtdireccion').val();
var movilPersona = $('#txttlfmovil').val();
var fijoPersona = $('#txttlffijo').val();
var fechaNacPersona = $('#txtfechanacimiento').val();

var route = "http://localhost:8000/persona";
var token= $('#token').val();

$.ajax({
	 url: route,
	 headers: {'X-CSRF-TOKEN': token},
	 type: 'POST',
	 dataType: 'json',
	 data:{ 
    txtnombre: namePersona,
    txtpaterno: apepatPersona,
    txtmaterno: apematPersona,
    txtemail: emailPersona,
    textdni: dniPersona,
    txtdistrito: distritoPersona,
    txtdireccion: direccionPersona,
    txttlfmovil: movilPersona,
    txttlffijo: fijoPersona,
    txtfechanacimiento: fechaNacPersona
    }
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
 toastr.success('PERSONA REGISTRADA.',"MENSAJE");

});
