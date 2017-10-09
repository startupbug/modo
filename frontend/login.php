<?php include ('header.php');?>

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
						<p><i class="fa fa-facebook" aria-hidden="true"></i><a href="#">Sign up with facebook</a></p>
			</div>
				<form>						
					<div class="or">
					<hr class="fir"/>
						<span>or</span>
					<hr class="sec"/>
					</div>
					<label for="username">Username (required)</label>
					<input type="text"  id="username">
					<label for="passowrd">Password (required)</label>
					<input type="passowrd"  id="passowrd">
					<p class="rem">
					<input type="checkbox" id="remember">
					<label for="remember">Remember me ?</label>
					</p>
					<input type="submit" value="Logn in now">
					<p><span>Forgot your password?</span></p>
					<div class="or">
					<hr class="fir"/>
						<span>or</span>
					<hr class="sec"/>
					</div>
				</form>
			<div class="sign-up-diff">
				<p><a href="#"><span class="b">SING UP NOW</span><span>Don’t have an account? Join Now</span></a></p>
			</div>
			</div>
				</div>
			</div>
		</div>	
	</div>	
</div>	
<!-- banner -->

<?php include ('footer.php');?>