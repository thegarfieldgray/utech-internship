<?php require 'header.php'; ?>

<div class="container-fluid">
	<div class="container-card">
	<!-- 
	=========== BEGIN MAIN CARD: SIGN UP ============
	-->
	<div class="contain">
		<div class="nav-card">
			<div class="nav-card-header">
				<ul>
					<li><a href="#" id="login">LOGIN</a></li>
					<li><a href="#" id="signup">SIGN UP</a></li>
				</ul>
			</div>
		</div>
		<!-- 
		============ MAIN IMAGE ON CARD: SIGN UP ============
		-->
		<center>
			<img class="img-responsive" src="img/logo.jpg" id="image">
		</center>

		<div id="signup-content" style="display: none;">
			<p id="container-card-note">Sign up now to get instant alerts and emails when an internship is posted pertinet to your field of study!</p>
			
			<form method="post" action="create_user.php">
			<div class="form" id="sign-up-form">
				<div class="row">
					<div class="col-sm-12">
						<input type="number" placeholder="ID Number" name="user_id" maxlength="7">
						<span class="bar"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<input type="email" placeholder="Email" name="email" autocomplete="email">
						<span class="bar"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-xs-6">
						<input type="password" placeholder="Password" name="password" id="passwordLogin">
						<span class="bar"></span>
					</div>
					<div class="col-sm-6 col-xs-6">
						<input type="password" placeholder="Confirm password" name="pwd" id="passwordLoginConfirm">
						<span class="bar"></span>
					</div>
				</div>
				<div class="row">
					<center>
						<button type="submit" name="submit" class="sign-up-btn">Sign up</button>
					</center>
				</div>
			</div>
			</form>
		</div>
	</div>
	<!-- 
	=========== END MAIN CARD: SIGN UP ============
	-->

	<!-- 
	=========== BEGIN MAIN CARD: LOGIN ============
	-->
	<div id="login-content">
		<p id="container-card-note">Sign up now to get instant alerts and emails when an internship is posted pertinet to your field of study!</p>
		<form method="post" action="login_user.php">
		<div class="form" id="sign-up-form">
			<div class="row">
				<div class="col-sm-12">
					<input type="number" placeholder="ID Number" name="user_id" minlength="7" maxlength="7" >
					<span class="bar"></span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<input type="password" placeholder="Password" name="password" >
					<span class="bar"></span>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-sm-6">
				  <div class="checkbox">
				    <label><input type="checkbox"> Keep me signed in</label>
				  </div>
				</div>
				<div class="col-xs-6 col-sm-6">
					<div class="forgotpwd">
						<a href="#"><div id="forgotpassword">forgot password?</div></a> 
					</div>
				</div>
			</div>
			<div class="row">
				<center>
					<button type="submit" name="submit" class="btn sign-up-btn">Login</button>
				</center>
			</div>
		</div>
		</form>
	</div>
	<!-- 
	=========== END MAIN CARD: LOGIN ============
	-->

	</div> <!-- ==== END OF CONTAINER-CARD : WHOLE CARD -->		
</div>

<?php require 'footer.php'; ?>