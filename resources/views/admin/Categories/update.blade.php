@extends('admin.pages.content')

@section('title','Blog Projesi | Kategori Düzenle')


@section('content')
 <div id="content-wrapper">
   <div class="container col-6">
     <form class="" action="{{url('admin/categories')}}" method="post">
       @csrf
       <input type="hidden" name="id" value="{{$category->id}}">
       <div class="form-group">
         <label for="">Kategori Adı</label>
         <input type="text" name="name" value="{{$category->name}}" class="form-control">
       </div>
       <button type="submit" name="button1" class="btn btn-success">Güncelle</button>
     </form>
   </div>
@endsection
