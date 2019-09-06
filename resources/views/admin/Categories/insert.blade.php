@extends('admin.pages.home')

@section('title','Blog Projesi | Kategori Ekle')

@section('content')
 <div id="content-wrapper">

 <div class="col-md-6 container">
   <h3 class="text-center">Kategori Ekle</h3>

       <form class="" action="{{url('admin/categories')}}" method="post">
         @csrf
         <div class="form-group">
           <label for="">Kategori Adı</label>
           <input type="text" name="categoryname" value="" class="form-control">
         </div>
         <button type="submit" name="buttonn" class="btn btn-primary">Ekle</button>
       </form>
 </div>


@endsection
