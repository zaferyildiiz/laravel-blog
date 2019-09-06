@extends('admin.pages.home')

@section('title','Blog Projesi | Admin')

@section('content')
  <div id="content-wrapper">

        <div class="container-fluid">
          <h3 class="text-center" style="font-family:arial">Üye Bilgilerini Düzenle</h3> <hr>

          <section class="col-md-6">

            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
            <form class="mb-2" action="{{url('admin/update')}}" method="post">
              @csrf
              <input type="hidden" name="id" value="{{$user->id}}">
              <div class="form-group">
                <label for="">Adınız ve Soyadınız</label>
                <input type="text" name="fullname" value="{{$user->fullname}}" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Kullanıcı Adınız </label>
                <input type="text" name="username" value="{{$user->username}}" class="form-control">
              </div>
              <div class="form-group">
                <label for="">E-Mail Adresiniz</label>
                <input type="email" name="email" value="{{$user->email}}" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Şifreniz:</label>
                <input type="text" name="password" value="{{$user->password}}" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Üye Rütbesi:</label>
                <input type="number" name="class" min="0" max="1" class="form-control" value="{{$user->rank}}">
              </div>
              <button type="submit" name="buttonn" class="btn btn-success">Güncelle</button>
            </form>

          </section>

@endsection
