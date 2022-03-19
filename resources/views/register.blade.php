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

					<div class="wrap-input100 validate-input" data-validate="email">
						<input class="input100" type="text" name="email" placeholder="Email">
					</div>

					<div class="wrap-input100 validate-input" data-validate="nomor">
						<input class="input100" type="text" name="nomor" placeholder="Nomor HP">
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Masukan Nama">
						<input class="input100" type="text" name="name" placeholder="Nama" required>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukan Asal Instansi">
						<input class="input100" type="text" name="asal_instansi" placeholder="Asal Instansi" required>
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
