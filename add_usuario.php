<?php include("inc/php/user_permisos.php"); ?>

<?php include("inc/comun/head.php"); ?>



	
	<div class="page-container">
    
<?php include("inc/comun/menu-side.php"); ?>
		
		<div class="main-content">
					
			<!-- User Info, Notifications and Menu Bar -->
<?php include("inc/comun/menu-top.php"); ?>
			
	<?php include("inc/add/add_usuario.php"); ?>
	
    
	
	
	<?php include("inc/comun/footer.php"); ?>
		
        
        
   
        
        </div>
		
			
		<!-- start: Chat Section -->

		<!-- end: Chat Section -->
		
		
	</div>
	
	
	

 

<link rel="stylesheet" href="assets/js/daterangepicker/daterangepicker-bs3.css">
<link type="text/css" href="orakuploader/orakuploader.css" rel="stylesheet"/>
<script type="text/javascript" src="orakuploader/jquery.min.js"></script>
<script type="text/javascript" src="orakuploader/jquery-ui.min.js"></script>
<script type="text/javascript" src="orakuploader/orakuploader.js"></script>
<script>
$(document).ready(function(){
	$('#images').orakuploader({
		orakuploader_path : 'orakuploader/',
		
		orakuploader_main_path : 'uploads',
		orakuploader_thumbnail_path : 'uploads/tn',
		
		orakuploader_add_image : 'orakuploader/images/add.png',
		orakuploader_add_label : 'Seleccione',
		//orakuploader_use_sortable : true,
		
		orakuploader_resize_to : 600,
		orakuploader_thumbnail_size : 150,
		
		orakuploader_maximum_uploads : 1,
		orakuploader_hide_on_exceed : true,
		
		orakuploader_max_exceeded : function() {
			alert("You exceeded the max. limit of 3 images.");
		}
		
	});
});

</script>


<script src="assets/js/datepicker/bootstrap-datepicker.js"></script>
<?php include("inc/comun/js.php"); ?>


  
    </body>
</html>