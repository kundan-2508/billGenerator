
<div class="container">
	<div class="row">
		<div class="col-sm-4 col-md-4 col-lg-4"></div>
		<div class="col-sm-4 col-md-4 col-lg-4 login-card">
			<form action="#" method="POST" id = "adminLoginForm">
				<h3><?php echo retailerLogin ?></h3>
				<label for=""><?php echo username;?> :</label><br>
				<input type="text" name = "username" id = "username" class = "form-control"/>
				<br>
				<label for=""><?php echo password;?> :</label><br>
				<input type="password" name = "password" id = "password" class = "form-control"/>
				<br>
				<input type="submit" name = "submitAdminLoginForm" id = "submitAdminLoginForm" class="form-control btn btn-primary" value="<?php echo login;?>"/>
				<br>
				<br>
			</form>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-4"></div>
	</div>
</div>
