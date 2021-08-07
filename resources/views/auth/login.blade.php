<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="description" content="">
	  <meta name="author" content="">
	  <meta name="csrf-token" content="{{ csrf_token() }}" />
	  <link rel="icon" href="../backend/images/favicon.ico">

      <link rel="stylesheet" href="../backend/fontawesome/css/all.css">
	  <link rel="stylesheet" href="">
	  <link rel="font" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
	  <title>School Management X - Log in </title>
	
	  <!-- Vendors Style-->
	  <link rel="stylesheet" href="../backend/css/login.css">
		
	  {{-- <!-- Style-->  
	  <link rel="stylesheet" href="https://sm-software.herokuapp.com/backend/css/style.css">
	  <link rel="stylesheet" href="https://sm-software.herokuapp.com/backend/css/skin_color.css">	 --}}
  
  </head>





<div class="container">
	<div class="screen">
		
		<div class="screen__content">
			
			<form action="{{ route('login') }}" class="login" method="POST">
				@csrf
				<div class="form-group">
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="email" id="email" name="email" class="login__input" placeholder="User name / Email">
				</div>
				</div>

				<div class="form-group">
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" id="password" name="password" class="login__input" placeholder="Password">
				</div>
				</div>

				<div class="row">
					<div class="col-6">
					  <div class="checkbox text-white">
						<input type="checkbox" id="basic_checkbox_1" >
						<label for="basic_checkbox_1">Remember Me</label>
					  </div>
					</div>
					<!-- /.col -->
					
				  </div>
				<button type="submit" class="button login__submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
				<div class="fog-pwd text-right">
					<a href="{{route('password.request')}}" class="text-white hover-info"><i class="ion ion-locked"></i><br><br><br> Forgot password?</a>
					</div>
			</form>
			<div class="social-login">
					{{-- <a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a> --}}
					<div class="text-right">
					<span class="mt-15 mb-0 text-white"><a href="{{route('register')}}" class="text-info ml-5">Sign Up</a></span><br>
					</div><br>
					
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape2"></span>
		</div>
	</div>
</div>




</body>
</html>



