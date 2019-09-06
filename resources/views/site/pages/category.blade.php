@extends('site.pages.home')


@section('title','Kategoriye ait makaleler')


@section('content')
  <div class="row">
    <div class="col-md-9">
      <div class="container-fluid">
        <h3 class="text-center">{{$categoryy->name}} Kategorisine ait yazılar <hr></h3>
        <div class="row">
            @foreach ($article as $key)
              @if ($key->kategori_id==$categoryy->id)
                <div class="col-md-4">
                  <div class="card" >
                    <img src="{{asset($key->image_path)}}" class="card-img-top" alt="" height="250px"> <hr>
                    <div class="card-body">
                      <h5 class="card-title text-center">{{$key->title}}</h5>
                      <p class="card-text">{!! substr($key->content,0,150)!!} </p>
                      <a href="{{url('/devam')."/".$key->id}}" class="btn btn-primary">Devamını oku >></a>
                    </div>
                  </div>
                </div>
              @endif
            @endforeach


        </div>
      </div>
    </div>

@endsection
