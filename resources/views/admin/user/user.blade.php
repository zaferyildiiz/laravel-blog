@extends('admin.pages.home')

@section('title','Blog Projesi | Üyeler')

@section('content')
  <div id="content-wrapper">

        <div class="container-fluid">
          <div class="card mb-3">
           <div class="card-header text-center">
             <i class="fas fa-table"></i>
              Üye Bilgileri  </div>
              @if (session()->has('basarili'))
                <div class="alert alert-success">
                  <h5 class="text-center">Güncelleme İşlemi Başarılı</h5>
                </div>
              @endif
              @if (session()->has('delete'))
                <div class="alert alert-danger">
                  <h5 class="text-center">Silme İşlemi Başarılı</h5>
                </div>
              @endif
           <div class="card-body">
             <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                   <tr>
                     <th>Adı ve Soyadı</th>
                     <th>Kullanıcı Adı</th>
                     <th>E-Mail Adresi</th>
                     <th>Şifre</th>
                     <th>Üye Rütbesi</th>
                     <th>İşlemler</th>
                   </tr>
                 </thead>

                 <tbody>
                   @foreach ($user as $key)
                     <tr>
                       <td>{{$key->fullname}}</td>
                       <td>{{$key->username}}</td>
                       <td>{{$key->email}}</td>
                       <td>{{$key->password}}</td>
                       <td>{{$key->rank}}</td>
                       <td>
                         <a href="{{url('admin/update')."/".$key->id}}" class="btn btn-primary btn-sm">Düzenle</a>
                         <a href="{{url('admin/delete')."/".$key->id}}" class="btn btn-danger btn-sm">Sil</a>
                       </td>
                     </tr>
                   @endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>
@endsection
