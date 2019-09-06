@extends('admin.pages.home')

@section('title','Yorumlar')


@section('content')
 <div class="container-fluid">
   <!-- DataTables Example -->
   @if (Session::has('deleteSuccess'))
     <p class="alert alert-success text-center">Yorum başarıyla Silindi !</p>
   @endif
   <div class="card mb-3">
     <div class="card-header text-center">
       <i class="fas fa-table"></i>
       Tüm Yorumlar</div>
     <div class="card-body">
       <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
           <thead>
             <tr>
               <th>İd</th>
               <th>Makale Adı</th>
               <th>Adı ve Soyadı</th>
               <th>E-mail Adresi</th>
               <th>Yorum tarihi</th>
               <th>işlemler</th>
             </tr>
           </thead>

           <tbody>
             @foreach ($comments as $key)
               <tr>
                 <td>{{$key->id}}</td>
                 <td>
                   @php
                     foreach ($article as $keyy) {
                       if($keyy->id==$key->article_id)
                       {
                         echo $keyy->title;
                       }
                     }
                   @endphp
                 </td>
                 <td>{{$key->fullname}}</td>
                 <td>{{$key->email}}</td>
                 <td>{{$key->created_at}}</td>
                 <td><a href="{{url('admin/deleteComment')."/".$key->id}}" class="btn btn-sm btn-danger">Sil</a></td>
               </tr>
             @endforeach

           </tbody>
         </table>
       </div>
     </div>

   </div>
 </div>
@endsection
