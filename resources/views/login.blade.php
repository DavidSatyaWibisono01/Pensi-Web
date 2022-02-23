@extends('layout-login/main-login')

@section('container')

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="{{ url('/auth')}}" method="post" class="login100-form validate-form">
                    @csrf
					<span class="login100-form-title p-b-26">
						Admin OSIS MPR
					</span>
					<span class="login100-form-title p-b-48">
						<img class="logo-wk-login" src="{!! asset('assets/images/logo/logo-osis.png') !!}">
					</span>
					<div class="wrap-input100 validate-input" data-validate="username">
						<input class="input100" type="text" name="username" placeholder="username">
					</div>

					<div class="wrap-input100 validate-input" data-validate = "password">
						<input class="input100" type="password" name="password" placeholder="password">
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
