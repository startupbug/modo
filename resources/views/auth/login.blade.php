@extends('masterlayout')
@section('content')

<div id="banner" class="login">
	<div class="container-fluid">
		<div class="row">	
			<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="login-form-main">
			<div class="wel">
				<h1 class="mns-headings">Welcome Back!</h1>
				<p class="mns-para">We’re so happy to see you</p>
			</div>
			<div class="login-form" >
			<div class="sign-diff">
						<p><i class="fa fa-facebook" aria-hidden="true"></i><a href="{{route('facebook.login')}}">Login with facebook</a></p>
		   <div>
			<br>
				@if(Session::has('signup_status'))
					@if(Session::get('signup_status')==1)
						<div class="alert alert-success">
						  <strong>Success!</strong> {{ Session::get('signup_msg') }}
						</div>				  					
					@endif
				{{ Session::forget('signup_msg')}}
				{{ Session::forget('signup_status')}}	
				@endif				
			</div>	

			</div>
				<form id="login_form">						
					<div class="or">
					<hr class="fir"/>
						<span>or</span>
					<hr class="sec"/>
					</div>
					<label for="username">Username (required)</label>
					<input type="text"  id="username" name="username">
					<label for="passowrd">Password (required)</label>
					<input type="password"  id="passowrd" name="password">
					<p class="rem">
					<input type="checkbox" id="remember">
					<label for="remember">Remember me ?</label>
					<input type="hidden" value="{{Session::token()}}" name="_token" />					
					</p>
					<input type="submit" value="Login now">
					<p><span>Forgot your password?</span></p>
					<div class="or">
					<hr class="fir"/>
						<span>or</span>
					<hr class="sec"/>
					</div>
				</form>
			<div class="sign-up-diff">
				<p><a href="#"><span class="b">SIGN UP NOW</span><span>Don’t have an account? Join Now</span></a></p>
			</div>
			</div>
				</div>
			</div>
		</div>	
	</div>	
</div>	
<!-- banner -->

@endsection