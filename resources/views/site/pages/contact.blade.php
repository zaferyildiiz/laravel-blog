@extends('site.pages.home')

@section('title', 'Blog Projesi | İletişim')

 @section('content')
<div class="container-fluid">
  <div class="row mt-3">
    <div class="col-md-9 ">
      <h4 class="text-center">İletişim Sayfası</h4>
      <hr>
      <form class="" action="{{url('/send')}}" method="post">
        @csrf
        <div class="row">
          <div class="col-md-6">
            <label for="">Adınız ve Soyadınız</label>
            <input type="text" name="fullname" value="" class="form-control">
          </div>
          <div class="col-md-6">
            <label for="">E-mail Adresiniz</label>
            <input type="email" name="email" value="" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <label for="">Mesajınız :</label>
          <textarea name="messages" rows="8" cols="80" class="form-control"></textarea>
        </div>
        <button type="submit" name="button" class="btn btn-success">Gönder</button>
      </form>
    </div>


 @endsection
