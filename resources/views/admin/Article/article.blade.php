

@extends('admin.pages.content')

@section('title','Makaleler')

@section('content')
  <div id="content-wrapper">

        <div class="container-fluid">
          <div class="card mb-3">
           <div class="card-header text-center">
             <i class="fas fa-table"></i>
              Yayınlanmış Makaleler
              <a href="{{url('admin/newarticle')}}" class="float-right btn btn-success btn-sm">Yeni Makale</a>
             </div>

             @if (Session::get('basarili'))
               <div class="alert alert-success alert-block text-center">
               	<button type="button" class="close" data-dismiss="alert">×</button>
                       <strong>Makale Başarıyla eklendi !</strong>
               </div>
               @endif
               @if(Session::get('guncelleme'))
                 <div class="alert alert-success alert-block text-center">
                   <button type="button" class="close" data-dismiss="alert">×</button>
                         <strong>Makale Başarıyla Güncellendi !</strong>
                 </div>
               @endif
               @if(Session::get('silme'))
                 <div class="alert alert-danger alert-block text-center">
                   <button type="button" class="close" data-dismiss="alert">×</button>
                         <strong>Makale Silindi !</strong>
                 </div>
               @endif
           <div class="card-body">
             <div class="table-responsive">
               <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                   <tr>
                     <th>İd</th>
                     <th>Makale Başlığı</th>
                     <th>Kategori Adı</th>
                     <th>Yazar</th>
                     <th>Makale Resmi</th>
                     <th>İçerik</th>
                     <th>Kategori</th>
                     <th>Durum</th>
                     <th>Makale Hit</th>
                     <th>İşlemler</th>
                   </tr>
                 </thead>

                 <tbody>
                      @foreach ($article as $key)
                   <tr>
                       <td>{{$key->id}}</td>
                       <td>{{$key->title}}</td>
                       <td>{{$key->slug}}</td>
                       <td>
                          @php
                            $yazarid= $key->authorid;
                            foreach ($user as $keys){
                              $yazar=$keys->id;
                              if($yazarid==$yazar)
                              {
                                echo $keys->fullname;
                              }
                            }
                          @endphp
                       </td>
                       <td>{{$key->image_path}}</td>
                       <td>
                         @php
                           echo mb_substr($key->content,0,150)."...";
                         @endphp
                       </td>
                       <td>
                         @php
                           $kategori_id=$key->kategori_id;
                           echo $category->find($kategori_id)->name;
                         @endphp
                       </td>
                       <td>{{$key->status}}</td>
                       <td>{{$key->hit}}</td>
                       <td>
                         <a href="{{url('admin/updateArticle')."/".$key->id}}" class="btn btn-sm btn-success mb-1">Düzenle</a>
                         <a href="{{url('admin/deleteArticle')."/".$key->id}}" class="btn btn-sm btn-danger btn-block">Sil</a>
                       </td>
                   </tr>
                      @endforeach
                 </tbody>
               </table>
             </div>
           </div>
         </div>
@endsection
