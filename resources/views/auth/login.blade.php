<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="description" content="">
	  <meta name="author" content="">
	  <meta name="csrf-token" content="{{ csrf_token() }}" />
	  <link rel="icon" href="../backend/images/favicon.ico">

      <link rel="stylesheet" href="../backend/fontawesome/css/all.css">
	  <link rel="stylesheet" href="">
	  <link rel="font" href="https://fonts.googleapis.com/css?family=Raleway:400,700">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  
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
				<x-jet-validation-errors class="mb-8 error-cust" />
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
			</form>
				<a href="{{route('password.request')}}" type="button" class="btn btn-light fog-pwd">Forgot password?</a>
				<a type="button" class="btn btn-white"></button>
				<a href="{{route('register')}}" type="button" class="btn btn-light">Sign Up</a>
		</div>
		
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape2"></span>
		</div>
	</div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>



