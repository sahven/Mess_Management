<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
</head>
<body>
	

	<div class="container white z-depth-2">
		
		<ul class="tabs teal">
			
			<li class="tab col s3">
			<a class="white-text active" href="#user">Register as a User</a>
			</li>

			<li class="tab col s3">
			<a class="white-text" href="#caterer">Register as a Caterer</a>
			</li>

		</ul>

		<div id="user" class="col s12">
			
			<form class="col s12">
				
				<div class="form-container">
					
					<h3 class="teal-text">Register</h3>
					
					<div class="row">
						
						<div class="input-field col s12">
							<input id="email" type="email" class="validate">
							<label for="email">Email</label>
						</div>

					</div>

					<div class="row">
						
						<div class="input-field col s12">
							<input id="password" type="password" class="validate">
							<label for="password">Password</label>
						</div>

					</div>

					<br>

					<center>
						<button class="btn waves-effect waves-light teal" type="submit" name="action">Connect</button>
						<br>
						<br>
						<a href="">Forgotten password?</a>
					</center>

				</div>

			</form>

		</div>

		<div id="caterer" class="col s12">
			
			<form class="col s12">
				
				<div class="form-container">
					
					<h3 class="teal-text">Welcome</h3>
					
					<div class="row">
						
						<div class="input-field col s6">
							<input id="last_name" type="text" class="validate">
							<label for="last_name">First Name</label>
						</div>

						<div class="input-field col s6">
							<input id="last_name" type="text" class="validate">
							<label for="last_name">Last Name</label>
						</div>
					
					</div>
					
					<div class="row">
					
						<div class="input-field col s12">
							<input id="email" type="email" class="validate">
							<label for="email">Email</label>
						</div>
					
					</div>
					
					<div class="row">
					
						<div class="input-field col s12">
							<input id="email-confirm" type="email" class="validate">
							<label for="email-confirm">Email Confirmation</label>
						</div>
					
					</div>
					
					<div class="row">
					
						<div class="input-field col s12">
							<input id="password" type="password" class="validate">
							<label for="password">Password</label>
						</div>
					
					</div>
					
					<div class="row">
					
						<div class="input-field col s12">
							<input id="password-confirm" type="password" class="validate">
							<label for="password-confirm">Password Confirmation</label>
						</div>
					
					</div>
					
					<center>
						<button class="btn waves-effect waves-light teal" type="submit" name="action">Submit</button>
					</center>
				
				</div>
			
			</form>
		
		</div>
	
	</div>



</body>
</html>