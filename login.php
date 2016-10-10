<?php require("inc/php/user_login.php"); ?>
<?php require("inc/php/login_session.php"); ?>
<?php include("inc/comun/head.php"); ?>
<body class="page-body login-page login-light">

	<br/>
    <br/>
    <br/>
	<div class="login-container">
	
		<div class="row">
		
			<div class="col-md-6 col-md-offset-3">
			
             
             <div class="panel panel-default panel-border">
						<div class="panel-heading">
							<div align="center"><img src="assets/images/login_user.png" class="img-circle" alt="" width="205" /></div>
						</div>
						
						<div class="panel-body">
				
				<!-- Errors container -->
				
				
				<!-- Add class "fade-in-effect" for login form effect -->
				<form ACTION="<?php echo $loginFormAction; ?>" name="login" method="POST" role="form" id="login" class="login-form">
					
					<div class="login-header">
						
					</div>
	
					
					<div class="form-group">
						<label class="control-label" for="email">Email</label>
						<input type="email" class="form-control" name="email" id="email" autocomplete="off" />
					</div>
					
					<div class="form-group">
						<label class="control-label" for="passwd">Password</label>
						<input type="password" class="form-control" name="passwd" id="passwd" autocomplete="off" />
					</div>
					
					<div class="form-group">
						<button type="submit" class="btn btn-primary  btn-block text-left">
							<i class="fa-lock"></i>
							Entrar
						</button>
					</div>
					
					
					
			  </form>
              
              
              </div>
              </div>
             
				
				<!-- External login -->
			
			</div>
			
		</div>
		
	</div>



	<!-- Bottom Scripts -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>
	<script src="assets/js/jquery-validate/jquery.validate.min.js"></script>
	<script src="assets/js/toastr/toastr.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script>

</body>
</html>