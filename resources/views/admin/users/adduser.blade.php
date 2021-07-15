
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('addusercss/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('addusercss/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('addusercss/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('addusercss/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('addusercss/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('addusercss/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('addusercss/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('addusercss/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('addusercss/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('addusercss/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('addusercss/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('addusercss/css/main.css')}}">
<!--===============================================================================================-->
<style>
.login100-more {

background-image: url({{ asset('addusercss/images/my.jpg') }})
}
.upload{
    font-size:medium;
}


</style>
</head>

<body style="background-color: #999999;">

	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" ></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                @include('admin.layout.messages')
			<!--Form -->
				<form  action="{{ route('user.store') }}" method="POST"  enctype="multipart/form-data" class="login100-form validate-form">
					@csrf
                    <span class="login100-form-title p-b-59">
					Add Admin

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="name" value="{{ old('name') }}" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" value="{{ old('email') }}" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" value="{{ old('username') }}" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>
                    <div  class = 'upload'>
                        Upload Image
                        <input  name="image" value="{{ old('image') }}" type="file" >
                </div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" id="password" type="password" {{ old('password') }} name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Repeat Password is required or not match">
						<span class="label-input100">Repeat Password</span>
						<input class="input100" id="confirm_password" type="password" value="{{ old('password') }}" name="password_confirmation" placeholder="*************">



						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
{{--
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>  --}}
						</div>


					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button   name="signup" class="login100-form-btn">
								Add Admin
							</button>
						</div>

						{{--  <a href="../Login_v1/index.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>  --}}
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="{{ asset('addusercss/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('addusercss/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('addusercss/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('addusercss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('addusercss/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('addusercss/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('addusercss/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('addusercss/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('addusercss/js/main.js')}}"></script>

</body>
</html>
