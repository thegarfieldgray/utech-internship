<?php require 'header.php'; ?>

<div class="container-fluid">
	<div class="container-card">
		<div class="contain">
			<div class="nav-card">
				<div class="nav-card-header">
					<ul>
						<li><a href="#">PROFILE</a></li>
					</ul>
				</div>
			</div>
			<center>
				<img class="img-responsive" src="img/logo.jpg" class="img-rounded" id="image">
			</center>

			<p id="container-card-note">Set up your profile to help make the selection and recom.....</p>

			<form method="post" action="create_profile.php">
				<div class="form" id="sign-up-form">
					<div class="row">
						<div class="col-sm-6">
							<input type="text" placeholder="First Name" name="fname">
							<span class="bar"></span>
						</div>
						<div class="col-sm-6">
							<input type="text" placeholder="Last Name" name="lname">
							<span class="bar"></span>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<input type="text" placeholder="Major and or Minor" name="major_minor">
							<span class="bar"></span>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<input type="text" placeholder="Area of Interest" name="interest">
							<span class="bar"></span>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-xs-6">
							<div align="right">
								<button name="skip" class="btn btn-skip">Skip</button>
							</div>
						</div>
						<div class="col-sm-6 col-xs-6">
							<div align="left">
								<button type="submit" name="submit" class="btn-submit">Sign up</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


<?php require 'footer.php'; ?>