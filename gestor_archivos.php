<?php include("inc/php/user_permisos.php"); ?>
<?php include("inc/comun/head.php"); ?>
<body class="page-body">


	
	<div class="page-container">
    
<?php include("inc/comun/menu-side.php"); ?>
		
		<div class="main-content">
					
			<!-- User Info, Notifications and Menu Bar -->
<?php include("inc/comun/menu-top.php"); ?>
			
	<div id="elfinder"></div>
			
	
	<?php include("inc/comun/footer.php"); ?>
		
 
	
	
	



        <link rel="stylesheet" type="text/css" href="assets/js/elFinder-2.1.13/css/elfinder.min.css">
		<link rel="stylesheet" type="text/css" href="assets/js/elFinder-2.1.13/themes/moono/css/theme.css">
        
        <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<?php include("inc/comun/js.php"); ?>
    
    
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="assets/js/elFinder-2.1.13/js/elfinder.min.js"></script>
        <script src="assets/js/elFinder-2.1.13/js/i18n/elfinder.es.js"></script>
        <script>
			
			$(document).ready(function() {
				$('#elfinder').elfinder({
					url : 'assets/js/elFinder-2.1.13/php/connector.minimal.php', 
					lang: 'es',
					height: 600                 
				});
			});
		</script>
    </body>
</html>