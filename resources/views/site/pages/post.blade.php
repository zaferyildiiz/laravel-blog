@extends('site.pages.home')

@section('title','Blog Projesi | Devamını oku')


@section('content')
<div class="container-fluid">


	<div class="row">
		<div class="col-md-9">
						<p class="alert alert-light mt-1 text-center">Yazar: {{$user->fullname}}  | Yayınlanma Tarihi : {{$article->date}}</p>
						<img src="{{asset('public/img/post')."/".$article->slug.".jpg"}}" alt="Makale resmi" width="100%">
						<h3 class="text-center">{{$article->title}}</h3>
						<p>{!! $article->content !!}</p>
						@if ( Session::has('success') )
						  <div class="alert alert-success">
						  	<p class="text-center">Yorumunuz Başarıyla eklendi</p>
						  </div>
						@endif
						<h5 class="text-center">Yorum Yazınız</h5> <hr>
						<form class="mt-2 mb-2" action="{{url('/insertComment')}}" method="post">
							@csrf
							<input type="hidden" name="article_id" value="{{$article->id}}">
							<div class="row">
							 <div class="col">
								 <label for="">Adınız ve Soyadınız</label>
								 <input type="text" name="fullname" class="form-control" placeholder="Ad ve Soyad" required>
							 </div>
							 <div class="col">
								 <label for="">E-Mail Adresiniz</label>
								 <input type="email" name="email" class="form-control" placeholder="E-mail ADresi" required>
							 </div>
						 </div>
						 <div class="form-group mt-1">
							 <label for="">Yorumunuz</label>
							 <textarea name="comment" rows="8" cols="80" class="form-control" required></textarea>
						 </div>
						 <button type="submit" name="button" class="btn btn-sm btn-success">Yorumu gönder</button>
					 </form> <hr>

					 <h5 class="text-center">Son Yorumlar</h5>
					 <div class="row mb-4">
						 @foreach ($comments as $key)
							 @if ($key->article_id==$article->id)
								 <div class="col-md-12 mt-2">
									 <div class="row">
										 <div class="col-md-2">
											 <img src="{{asset('public/img/user.png')}}" alt="" class=" rounded-circle" width="100" height="100">
										 </div>
										 <div class="col-md-10">
											 <small>{{$key->fullname}} tarafından :</small>
												 <p class="mt-4">{{$key->comment}}</p>

										 </div>
									 </div>
									 <hr>
								 </div>
								 
							 @endif


						 @endforeach



					 </div>


		</div>





@endsection
