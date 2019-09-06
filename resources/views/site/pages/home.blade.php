 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/setting.css')}}">


    <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
  </head>
  <body>
    <div class="container-fluid">
      @include('site.pages.header')
      @if(session()->has('insert'))
        <div class="container">
          <div class="alert bg-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Başarılı</strong> Kayıt İşleminiz Başarı ile gerçekleşti !
          </div>
        </div>
      @endif
      @if(session()->has('success'))
        <div class="container">
          <div class="alert bg-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Başarılı</strong>Mesajınız başarıyla iletilmiştir 
          </div>
        </div>
      @endif
      @yield('content')
      @include('site.pages.right')
      @include('site.pages.footer')
    </div>


  	<script src="{{asset('public/js/jquery-3.4.1.min.js')}}"></script>
 	<script src="{{asset('public/js/popper.min.js')}}"></script>
    <script src="{{asset('public/js/bootstrap.js')}}"></script>
  </body>
</html>
