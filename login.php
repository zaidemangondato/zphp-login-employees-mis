<!-- INCLUDES Site URL of the WebPage -->
<?php include('config/siteurl.php'); ?>
<!-- INCLUDES System FUNCTIONS -->
<?php include('services/systemfunctions.php'); ?>
<?php $msg = systemfunctions::syslogin(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login - ZaiPHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include('phpmodules/imports.php'); ?>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand">Employees Management Information System</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  	<ul class="navbar-nav mr-auto">
  	</ul>
		<!-- <form class="form-inline my-2 my-lg-0" method="post">
	    <button class="btn btn-success my-2 my-sm-0" type="submit">Sign Up</button>
    </form> -->
  </div>
</nav>

<br>
<br>
<section>
	<div class="container-fluid">
		
		<div class="row justify-content-center">
			<div class="col-md-3">
				<div class="card">
					<div style="padding: 10px;">
						<h4 align="center">Sign In</h4>
					</div>
					<div class="card-body">
						<form method="post">	
							<div class="form-group">
						
								<input type="text" class="form-control" name="txtusername" placeholder="Username" required="" value="">
							</div>
							<div class="form-group">
								
								<input type="password" class="form-control" name="txtpassword" id="txtpassword" placeholder="Password" required="">
							</div>
							<div class="form-group">
								<div class="custom-control custom-switch">
									<input type="checkbox" class="custom-control-input" id="switch1" onclick="showPassword()" name="example">
									<label class="custom-control-label" for="switch1"> Show Password</label>
								</div>
							</div>
							<div class="form-group">
								<button class="btn btn-outline-primary btn-block" name="btnlogin">Login</button>
							</div>
						</form>
						<?php echo $msg; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


</body>
</html>