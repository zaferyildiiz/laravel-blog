
		<!--Sağ Kısım-->
	<div class="col-md-3 mt-2 a">
   @if (Auth::check())
		 <div class="card">
		 	 <h5>Hoşgeldiniz : {{Auth::user()->fullname}}</h5>
			 <a href="{{url('/user/logout')}}" class="btn btn-danger">Çıkış Yap</a>
		 </div>
		 <!-- Sidebar Başlangıç-->
			 <div class="card mt-2">
				 <ul class="list-group list-group-flush">
					 <li class="list-group-item " style="background-color: #CECFCC"><h5 class="text-center">Kategoriler</h5></li>
					 @foreach ($category as $key)
						 <li class="list-group-item text-center hover"><a href="">{{$key->name}}</a></li>
					 @endforeach
				 </ul>
			 </div>
			 <!--Sidebar Bitiş-->
	 @else
		 <div class="card mt-2 a">
			 <h4 class="text-center">Üye Girişi <hr></h4>
  					<form action="{{ route('login') }}" method="post">
  						@csrf
  						<div class="form-group">
  							<label for="">E- mail adresiniz :</label>
  							<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
  							@error('email')
  									<span class="invalid-feedback" role="alert">
  											<strong>{{ $message }}</strong>
  									</span>
  							@enderror
  						</div>
  						<div class="form-group">
  							<label for="">Şifreniz:</label>
  							<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
  							@error('password')
  									<span class="invalid-feedback" role="alert">
  											<strong>{{ $message }}</strong>
  									</span>
  							@enderror
  						</div>


  						@if(url()->current()=="http://localhost/blog/register")
  								<button type="submit" class="btn btn-success ml-5">  {{ __('Giriş Yap') }}</button>
  						@else
  							<button type="submit" class="btn btn-success ml-5">  {{ __('Giriş Yap') }}</button>
  							<a href="{{url('/register')}}" class="btn btn-danger">Kayıt ol</a>
  						@endif
  					</form>
		 </div>

		 <!-- Sidebar Başlangıç-->
				<div class="card">
					<ul class="list-group list-group-flush">
						<li class="list-group-item " style="background-color: #CECFCC"><h5 class="text-center">Kategoriler</h5></li>

						@foreach ($category as $key)
								<li class="list-group-item text-center hover"><a href="{{url('/category')."/".$key->id}}">{{$key->name}}</a></li>
						@endforeach

					</ul>
				</div>
				<!--Sidebar Bitiş-->
   @endif

	</div>
