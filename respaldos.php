<?php include("inc/php/user_permisos.php"); ?>

<?php include("inc/comun/head.php"); ?>
<body class="page-body">


	
	<div class="page-container">
    
<?php include("inc/comun/menu-side.php"); ?>
		
		<div class="main-content">
					
			<!-- User Info, Notifications and Menu Bar -->
<?php include("inc/comun/menu-top.php"); ?>
			
	<?php include("inc/listar/list_backups.php"); ?>
	
    
	
	
	<?php include("inc/comun/footer.php"); ?>
		
        
        
   

	
	<?php include("inc/eliminar/modal_borrar.php"); ?>

  <?php //include("inc/escritorio/dialogos.php"); ?>


	<?php include("inc/comun/js.php"); ?>
    <script type="text/javascript">
$(document).ready(function() {
	
 $('#div-btn1').click(function(){
      $.ajax({
	    type: "POST",
	    url: "inc/php/backups.php",
	    success: function(a) {
                $('#div-results').html(a);
				 location.reload();
	    }
       });
	     
   });
});
</script>

  
    </body>
</html>