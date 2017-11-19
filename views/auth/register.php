<div class="container mregister">
<div id="login">
	<h1>REGISTER</h1>
	<form name="registerform" id="registerform" action="register" method="post">
		<div style="color: red;">
	        <?php foreach ($errors as $error) :?>
	            <p><?php echo $error; ?></p>
	        <?php endforeach; ?>
	    </div>
		<p>
			<label for="user_login">First Name<br />
			<input type="text" name="first_name" id="first_name" class="input" size="32" value=""  /></label>
		</p>

		<p>
			<label for="user_login">Last Name<br />
			<input type="text" name="last_name" id="last_name" class="input" size="32" value=""  /></label>
		</p>
		
		
		<p>
			<label for="user_pass">Email<br />
			<input type="email" name="email" id="email" class="input" value="" size="32" /></label>
		</p>
		
		<p>
			<label for="user_pass">Username<br />
			<input type="text" name="username" id="username" class="input" value="" size="20" /></label>
		</p>
		
		<p>
			<label for="user_pass">Password<br />
			<input type="password" name="password" id="password" class="input" value="" size="32" /></label>
		</p>	
		

			<p class="submit">
			<input type="submit" name="register" id="register" class="button" value="Register" />
		</p>
		
		<p class="regtext">Already have an account? <a href="login" >Login Here</a>!</p>
	</form>
	
</div>
</div>


<link href="/template/css/auth.css" rel="stylesheet">
<?php include(ROOT."/views/layouts/footer.php"); ?>