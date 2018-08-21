<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

  <title>Registro</title>

    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <!-- Custom styles for this template -->
  <link href="{{asset('css/signin.css')}}" rel="stylesheet">
  </head>

<body class="text-center">

    <form class="form-signin" id="signlogin" method="post" action="{{URL::to('login')}}">

             	<input type="hidden" name="_token" value="{{ csrf_token() }}">
               <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
              <h1 class="h3 mb-3 font-weight-normal">Regístrate</h1>

              <label for="inputEmail" class="sr-only">Usuario</label>
              <input type="text" id="userusuario" name="userusuario" class="form-control mb-4" placeholder="Usuario" required autofocus>

              <label for="inputPassword" class="sr-only">Clave</label>
              <input type="password" id="userclave" name="userclave" class="form-control" placeholder="Contraseña" required>
             @if(session('message'))
             <div class="alert alert-danger" role="alert">
             <strong>{{ session('message') }}</strong>
             </div>
             @endif

              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Recordarme
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" id="login_buttom" type="submit">Ingresar</button>
              <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>


<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.validate.js')}}"></script>

<script type="text/javascript">
$('#login_buttom').click(function(){

$("#signlogin").validate({
        rules: {       
                    userusuario:{
                      required: true,
                      minlength: 8,
                      maxlength: 8
                    },                   
                    userclave:"required"                                  
        },
        messages:{ 
                    userusuario:{
                    required:"<label style='color:red;margin-right:142px;font-weight:bold;font-size:14px;'>INGRESE SU USUARIO</label>",
                    minlength: "<label style='color:red;font-size:14px;margin-right:35px' class='text-uppercase font-weight-bold'>Tiene que ingresar 8 caracteres</label>",
                    maxlength: "<label style='color:red;font-size:14px;' class='text-uppercase font-weight-bold'>Solo se acepta 8 caracteres numéricos</label>"
                    },
                    userclave:"<label style='color:red;margin-right:170px;font-weight:bold;font-size:14px;'>INGRESE SU CLAVE</label>"               
        }
  });

});
</script>
  </body>
</html>
