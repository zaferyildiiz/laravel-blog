@extends('admin.pages.home')

@section('title','Blog Projesi | Kategoriler')


@section('content')
  <div id="content-wrapper">

        <div class="container-fluid">
          <div class="card mb-3">
           <div class="card-header text-center">
             <i class="fas fa-table"></i>
              Kategoriler
              <a href="{{url('admin/categories/insert')}}" class="float-right btn btn-sm btn-primary">Yeni Kategori</a>
              </div>
              @if (session()->has('insert'))
                <div class="alert alert-success">
                  <h5 class="text-center">Kategori başarıyla eklendi !!!</h5>
                </div>
              @endif
              @if (session()->has('update'))
                <div class="alert alert-success">
                  <h5 class="text-center">Kategori başarıyla güncellendi !!!</h5>
                </div>
              @endif
              @if (session()->has('delete'))
                <div class="alert alert-danger">
                  <h5 class="text-center">Kategori başarıyla silindi !!!</h5>
                </div>
              @endif
           <div class="card-body">
             <div class="table-responsive">

               <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                   <tr>
                     <th>İd</th>
                     <th>Kategori Adı</th>
                     <th>Kategori Seflink</th>
                     <th>İşlemler</th>
                   </tr>
                 </thead>
                 <tbody>
                   @foreach ($kategoriler as $key)
                     <tr>
                       <td>{{$key->id}}</td>
                       <td>{{$key->name}}</td>
                       <td>{{$key->slug}}</td>
                       <td>
                         <a href="{{url('/admin/categories/update')."/".$key->id}}" class="btn btn-success btn-sm">Düzenle</a>
                         <a href="{{url('/admin/categories/delete')."/".$key->id}}" class="btn btn-danger btn-sm">Sil</a>
                       </td>
                     </tr>
                   @endforeach

                 </tbody>
               </table>

             </div>
           </div>
         </div>


@endsection
