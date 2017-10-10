@extends('masterlayout')
@section('content')

<div id="banner" class="login sign-up">
	<div class="container-fluid">
		<div class="row">	
			<div class="col-sm-12 col-md-12 col-lg-12">
			<div class="login-form-main">
			<div class="wel">
				<h1 class="mns-headings">Mondo Traveler</h1>
				<p class="mns-para">Get the best experiences with world’s best travel companies </p>
			</div>
			<div class="login-form" >
			<div class="sign-diff">
						<p><i class="fa fa-facebook" aria-hidden="true"></i><a href="{{route('facebook.login')}}">Sign up with facebook</a></p>
			</div>
			<div>
			<br>
				@if(Session::has('signup_status'))
					@if(Session::get('signup_status')==1)
						<div class="alert alert-success">
						  <strong>Success!</strong> {{ Session::get('signup_msg') }}
						</div>					
					@elseif(Session::get('signup_status')==2)
					  <div class="alert alert-danger">
					    <strong>Error!</strong>{{ Session::get('signup_msg') }}
					  </div>					
					elseif(3===3)
					  <div class="alert alert-warning">
					    <strong></strong>{{ Session::get('signup_msg') }}
					  </div>
					@else
					  <div class="alert alert-warning">
					    <strong></strong>{{ Session::get('signup_msg') }}
					  </div>					  					
					@endif
				{{ Session::forget('signup_msg')}}
				{{ Session::forget('signup_status')}}	
				@endif				
			</div>
				<form id="register_form" >						
					<div class="or">
					<hr class="fir"/>
						<span>or</span>
					<hr class="sec"/>
					</div>
					<label for="fullname">Full Name</label>
					<input type="text"  id="full_name" name="full_name">
					<label for="email">Email</label>
					<input type="text"  id="email" name="email">
					<label for="passowrd">Password (required)</label>
					<input type="password"  id="passowrd"  name="password">
					<label for="passowrd-c">Confirm Password (required)</label>
					<input type="password"  id="passowrd-c">
					<input type="hidden" value="{{Session::token()}}" name="_token" />
					<input type="submit" value="Sign up" class="sib"> 
					<div class="or">
					<hr class="fir"/>
						<span>or</span>
					<hr class="sec"/>
					</div>
				</form>
			<div class="sign-up-diff sind">
				<p><a href="#"><span class="b">Login NOW</span><span>Already have an account? Login Now</span></a></p>
			</div>
			</div>
				</div>
			</div>
		</div>	
	</div>	
</div>	
<!-- banner -->

@endsection