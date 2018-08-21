$('#registro_rol').click(function(){

        $.validator.setDefaults({
              submitHandler: function(){
                  var nameRol = $('#txtnombre').val();
                  var descripcionRol = $('#txtdescripcion').val();

                  var route = "http://localhost:8000/rol";
                  var token= $('#token').val();

                  $.ajax({
                     url: route,
                     headers: {'X-CSRF-TOKEN': token},
                     type: 'POST',
                     dataType: 'json',
                     data:{ txtnombre: nameRol, txtdescripcion: descripcionRol }
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
                   toastr.success('ROL REGISTRADO.',"MENSAJE");

              }
      });
  
 $("#singrol").validate({

            rules: {              
                    txtnombre: "required",
                    txtdescripcion:"required"
                                  
            },
            messages: { 
                    txtnombre:"<label style='color:red;margin-left:45px;'>Ingrese un nombre</label>",
                    txtdescripcion:"<label style='color:red;margin-left:45px;'>Ingrese la descripcion</label>",
                                  
            }
  });

});




///////////////////////////////////////////////////////////////////////////77
////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////

$('#registro_user').click(function(){

    $.validator.setDefaults({
        submitHandler: function(){
            var personaUser=$('#txtpersona').val();
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
                 data:{ txtpersona: personaUser, txtdni: dniUser, txtclave: passwordUser, txtrol: selectRolUser }
                 
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
        }
});

$("#signupForm").validate({

            rules: {              
                    txtpersona: "required",
                    txtdni: {
                      required: true,
                      minlength: 8,
                      maxlength: 8
                    },
                    txtclave: {
                      required: true,
                      minlength: 5,
                      maxlength:14
                    },
                    confirm_password:{
                      required: true,
                      minlength: 5,
                      maxlength:14,
                      equalTo: "#txtclave"
                    },
                    txtrol:"required"
                                  
            },
            messages: { 
                    txtpersona:"<label style='color:red;margin-right:45px;font-size:13px' class='font-weight-bold text-uppercase'>Seleccione a una persona</label>",
                    txtdni:{
                      required: "<label style='color:red;margin-left: 150px;font-size:13px' class='font-weight-bold text-uppercase'>Ingrese el DNI de la persona</label>",
                      minlength: "<label style='color:red;margin-left: 150px;font-size:13px' class='font-weight-bold text-uppercase'>Solo se acepta 8 caracteres numéricos</label>",
                      maxlength: "<label style='color:red;margin-left: 150px;font-size:13px' class='font-weight-bold text-uppercase'>Solo se acepta 8 caracteres numéricos</label>"
                    },
                    txtclave:{
                      required: "<label style='color:red;margin-left: 150px;font-size:13px' class='font-weight-bold text-uppercase'>Ingrese una clave</label>",
                      minlength: "<label style='color:red;margin-left: 150px;font-size:13px' class='font-weight-bold text-uppercase'>Se acepta como minimo 5 caracteres</label>",
                      maxlength: "<label style='color:red;margin-left: 150px;font-size:13px' class='font-weight-bold text-uppercase'>Se acepta como maximo 14 caracteres</label>"
                    },
                    confirm_password:{
                      required: "<label style='color:red;margin-left: 250px;font-size:13px' class='font-weight-bold text-uppercase'>Ingrese la clave</label>",
                      minlength: "<label style='color:red;margin-left: 250px;font-size:13px' class='font-weight-bold text-uppercase'>Se acepta como minimo 5 caracteres</label>",
                      maxlength: "<label style='color:red;margin-left: 250px;font-size:13px' class='font-weight-bold text-uppercase'>Se acepta como maximo 14 caracteres</label>",
                      equalTo: "<label style='color:red;margin-left: 250px;font-size:13px' class='font-weight-bold text-uppercase'>Por favor ingrese la misma contraseña que arriba</label>"
                    },
                    txtrol: "<label style='color:red;margin-left:150px;font-size:13px' class='font-weight-bold text-uppercase'>Asigne un rol</label>"                  
            }
  });
});



///////////////////////////////////////////////////////////////////////////77
////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////

$('#registro_persona').click(function(){


$.validator.setDefaults({
              submitHandler: function(){                  

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


      }
});

$("#signpersonas").validate({

                      rules:{              
                              txtnombre: "required",
                              txtpaterno:"required",
                              txtmaterno:"required",
                              txtemail:"required",
                              textdni:{
                                required: true,
                                minlength: 8,
                                maxlength:8
                              },
                              txtdistrito: "required",
                              txtdireccion: "required",
                              txttlfmovil:"required",
                              txttlffijo:"required",
                              txtfechanacimiento:"required"                                  
                      },
                      messages: { 
                              txtnombre:"<label style='color:red;margin-left:45px;'>Ingrese el nombre</label>",
                              txtpaterno:"<label style='color:red;margin-left:45px;'>Ingrese el apellido paterno</label>",                              
                              txtmaterno:"<label style='color:red;margin-left:45px;'>Ingrese el apellido materno</label>",
                              txtemail:"<label style='color:red;margin-left:45px;'>Ingrese el correo electronico</label>",
                              textdni:{
                                required: "<label style='color:red;margin-left: 250px;'>Ingrese el DNI</label>",
                                minlength: "<label style='color:red;margin-left: 250px;'>Se acepta solo 8 caracteres</label>",
                                maxlength: "<label style='color:red;margin-left: 250px;'>Se acepta solo 8 caracteres</label>"                                
                              },
                              txtdistrito: "<label style='color:red;margin-left:150px;'>Ingrese el distrito</label>",
                              txtdireccion: "<label style='color:red;margin-left:150px;'>Ingrese la direccion</label>",
                              txttlfmovil: "<label style='color:red;margin-left:150px;'>Ingrese telefono movil</label>",
                              txttlffijo: "<label style='color:red;margin-left:150px;'>Ingrese telefono fijo</label>",
                              txtfechanacimiento: "<label style='color:red;margin-left:150px;'>Ingrese fecha de nacimiento</label>",                  
                      }
  });

});
