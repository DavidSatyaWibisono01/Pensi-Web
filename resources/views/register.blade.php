@extends('layout-login/main-login')

@section('container')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="{{ url('/register')}}" method="post" class="login100-form validate-form">
                    @csrf
					<span class="login100-form-title p-b-26">
						Virtual Tour Wikrama Bogor
					</span>
					<span class="login100-form-title p-b-48">
						<img class="logo-wk-login" src="{!! asset('assets/images/logo/logo-wk.png') !!}">
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Masukan Nama">
						<input class="input100" type="text" name="name" placeholder="Nama" required value="{{old('name')}}">
						@error('name')
							<p class="text-danger" style="margin-top:-35px">{{$message}}</p>
						@enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate="email">
						<input class="input100" type="email" name="email" placeholder="Email" value="{{old('email')}}">
						@error('email')
							<p class="text-danger" style="margin-top:-35px">{{$message}}</p>
						@enderror
					</div>
					<div>
						<div class="wrap-input100 validate-input" data-validate="no_tlpn">
							<input class="input100" type="number" name="no_tlpn" placeholder="Nomor HP" minlength="10" maxlength="14" value="{{old('no_tlpn')}}">
						</div>
						@error('no_tlpn')
							<p class="text-danger" style="margin-top:-35px">{{$message}}</p>
						@enderror
					</div>


					<div class="wrap-input100 validate-input" data-validate="Masukan Asal Instansi">
						<input class="input100" type="text" name="asal_instansi" placeholder="Asal Instansi" required value="{{old('asal_instansi')}}">
						@error('asal_instansi')
							<p class="text-danger" style="margin-top:-35px">{{$message}}</p>
						@enderror
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Masuk
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
