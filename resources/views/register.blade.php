@extends('layout-login/main-login')

@section('container')

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="{{ url('/register')}}" method="post" class="login100-form validate-form">
                    @csrf
					<span class="login100-form-title p-b-26">
						OSIS MPR
					</span>
					<span class="login100-form-title p-b-48">
						<img class="logo-wk-login" src="{!! asset('assets/images/logo/logo-osis.png') !!}">
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Masukan Nama">
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="Nama"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Masukan Asal Instansi">
						<input class="input100" type="text" name="asal_instansi">
						<span class="focus-input100" data-placeholder="Asal Instansi"></span>
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
