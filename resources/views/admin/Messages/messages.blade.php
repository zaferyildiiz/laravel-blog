@extends('admin.pages.home')

@section('title','Blog Projesi | Mesajlar')


@section('content')
  <div class="container-fluid mt-4">

    @if (Session::has('success'))
      <div class="alert alert-success text-center">
        Mesaj silindi
      </div>
    @endif
    <div class="card-header text-center">
      <i class="fas fa-table"></i>
      Mesajlar
      </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>İd</th>
              <th>Gönderen Ad-Soyad</th>
              <th>Mesaj</th>
              <th>Gönderen E-Mail</th>
              <th>İşlemler</th>
            </tr>
          </thead>
          <tbody>
                 @foreach ($messages as $key)
             <tr>
                 <td>{{$key->id}}</td>
                 <td>{{$key->fullname}}</td>
                 <td>{{$key->messages}}</td>
                 <td>{{$key->email}}</td>
                 <td>
                   <a href="#" class="btn btn-primary btn-sm">Devamı</a>
                   <a href="{{url('admin/deleteMessages').'/'.$key->id}}" class="btn btn-danger btn-sm">Mesajı Sil</a>
                 </td>
             </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
