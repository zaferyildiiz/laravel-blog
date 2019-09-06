@extends('site.pages.home')

@section('title','Blog Projesi | Anasayfa')


@section('content')
	@include('site.pages.slider')
	<!--Sol kısım-->
	<div class="row">
	<div class="col-md-9">

		<!--Son eklenen yazılar Başlangıç-->
		 <h3 class="text-center">Son Eklenen Yazılar <hr></h3>
		 <div class="row">
			 @foreach ($lastArticle as $key)
				 <div class="col-md-4">
					 <div class="card" >
						 <img src="{{$key->image_path}}" class="card-img-top" alt="{{$key->title}}" height="250px"> <hr>
						 <div class="card-body">
							 <h5 class="card-title text-center">{{$key->title}}</h5>
							 <p class="small text-center">Kategori | <a href="">
								 @php
							  foreach ($category as $keyy) {
							  	if($key->kategori_id==$keyy->id)
									{
										echo $keyy->name;
									}
							  }
							 @endphp
						 </a></p>

							 <p class="card-text">{!!substr($key->content,0,150)!!}...</p>
							 <a href="{{url('devam')."/".$key->id}}" class="btn btn-primary">Devamını oku >></a>
						 </div>
					 </div>
				 </div>
			 @endforeach

		 </div>
		<!--Son eklenen yazılar Bitiş-->

		<!--Tüm Yazılar Başlangıç-->

		<h3 class="text-center mt-4 mb-4">Tüm Yazılar <hr></h3>
		 <div class="row">
			 @foreach ($article as $key)
				 <div class="col-md-4">
		 			<div class="card mb-2">
		 				<img src="{{$key->image_path}}" class="card-img-top" alt="{{$key->title}}" height="250px"> <hr>
		 				<div class="card-body">
		 					<h5 class="card-title text-center">{{$key->title}}</h5>
		 				<p class="small text-center">Kategori | <a href="">
		 					 @php
		 					 	foreach ($category as $keyy) {
		 					 		if($keyy->id==$key->kategori_id){
										echo $keyy->name;
									}
		 					 	}
		 					 @endphp
		 				</a></p>
		 					<p class="card-text">{!! substr($key->content,0,150) !!}...</p>
		 					<a href="{{url('/devam')."/".$key->id}}" class="btn btn-primary">Devamını oku >></a>
		 				</div>
		 			</div>
		 		</div>
			 @endforeach
		 </div>
		<!--Tüm Yazılar Bitiş-->
	</div>
	<!--Sol kısım bitiş-->
@endsection
