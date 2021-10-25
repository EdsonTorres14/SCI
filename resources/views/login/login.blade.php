<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('template/img/logo/logo.png') }}" rel="icon">
  <title>Iniciar sesión | SCI</title>
  <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('template/css/ruang-admin.min.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-login" style="background: #6a88a4">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card shadow-sm my-3">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center mb-3">
                    <img src="{{ asset('template/img/logo.png') }}" style="width: 20%; height: 0%;" >
                  </div>
                  <div class="text-center">
                    <h3 class="h3 text-gray-900">Sistema de Control de Inventarios</h3>
                    <h1 class="h4 text-gray-900 mb-4">Iniciar sesión</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('login') }}">
                  {{csrf_field()}}
                  <div class="form-group">
                      <input id="login" type="login" class="form-control" name="login" value="{{ old('login') }}" required autofocus placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Contraseña">
                    </div>
                    <div class="form-group text-right">                      
                      <button class="btn btn-md" style="color: white; background: #b02934">Iniciar</button>
                    </div>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="{{ asset('template/vendor/jquery/jquery.min.') }}"></script>
  <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('template/js/ruang-admin.min.js') }}"></script>
</body>

</html>