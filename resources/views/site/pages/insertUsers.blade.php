@extends('site.pages.home')

@section('title','Üye Kayıt sayfası')

 @section('content')
<div class="container-fluid mt-3">
  <div class="row">


       <div class="col-md-9">
         <div class="container col-8">
             <h3 class="text-center">Üye Kayıt Sayfası</h3> <hr>
             @if ($errors->any())
              <div class="alert alert-danger col-md-3">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}<li>
                      @endforeach
                  <ul>
              <div>
          @endif
             <form class="" action="{{url('/register')}}" method="post">
               @csrf
               <div class="form-group">
                 <label for="">Adınız ve Soyadınız</label>
                 <input type="text" name="fullname" value="" class="form-control">
               </div>
               <div class="form-group">
                 <label for="">Kullanıcı Adınız</label>
                 <input type="text" name="username" value="" class="form-control">
               </div>
               <div class="form-group">
                 <label for="">E-mail adresiniz</label>
                 <input type="email" name="email" value="" class="form-control">
               </div>
               <div class="form-group">
                 <label for="">Şifreniz</label>
                 <input type="password" name="password" value="" class="form-control">
               </div>
               <button type="submit" name="btn1" class="btn btn-primary">Kayıt Ol</button>
             </form>
         </div>

   </div>


 @endsection
