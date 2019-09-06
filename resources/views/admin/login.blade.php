<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Paneli | Giriş</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('public/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="{{asset('public/css/admin/sb-admin.css')}}" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Giriş Yap</div>
      <div class="card-body">
        <form class="" action="index.html" method="post">
          <div class="form-group">
            <label for="">Kullanıcı Adınız</label>
            <input type="text" name="username" value="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Şifreniz</label>
            <input type="password" name="password" value="" class="form-control">
          </div>
          <div class=" text-center">
            <button type="submit" name="button" class="btn btn-primary">Giriş Yap</button>
          </div>

        </form>

      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

</body>

</html>
