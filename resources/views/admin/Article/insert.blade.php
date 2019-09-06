@extends('admin.pages.home')

@section('title','Blog Projesi | Makale Ekle')

@section('content')
  <div id="content-wrapper">
    <div class="container col-md-6">
      <form class="" action="{{url('/admin/insertArticle')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="">Makale Başlığı</label>
          <input type="text" name="title" value="" class="form-control">
        </div>

        <div class="form-group">
          <label for="">İçerik</label>
          <textarea name="editor1" id="editor1" rows="10" cols="80" class="form-control">
           </textarea>
        </div>
        <div class="form-group">
          <label for="" class="ml-2">Makale Resmini Seçiniz</label>
          <input type="file" name="imagess" value="">
        </div>
        <div class="form-group">
          <label for="">Yazar :</label>
          <select name="author" class="form-control">
           @foreach ($user as $key)
             <option value="{{$key->id}}">{{$key->fullname}}</option>
           @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="">Konu Kategorisi :</label>
          <select name="kategori_id" class="form-control">
            @foreach ($category as $keyy)
              <option value="{{$keyy->id}}">{{$keyy->name}}</option>
            @endforeach

          </select>
        </div>

        <div class="form-group">
          <label for="">Yayınlanma Durumu</label>
          <select class="form-control" name="status">
            <option value="0">Yayınlama</option>
            <option value="1">Yayınla</option>
          </select>
        </div>
        <button type="submit" name="button" class="btn btn-success">Yayınla</button>
      </form>

      <script>

				// CKEDITOR.replace() metodu ile CKEditor editörü olacak texarea etiketi ayarlanır.

				// Bu hali ile CKEditor varsayılan ayarlarla görüntülenecektir.

				CKEDITOR.replace( 'editor1' );

			</script>
    </div>

@endsection
