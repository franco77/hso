<?php include("inc/php/user_permisos.php"); ?>

<?php include("inc/comun/head.php"); ?>



	
	<div class="page-container">
    
<?php include("inc/comun/menu-side.php"); ?>
		
		<div class="main-content">
					
			<!-- User Info, Notifications and Menu Bar -->
<?php include("inc/comun/menu-top.php"); ?>
			
	<?php include("inc/editar/edit_notas.php"); ?>
	
    
	
	
	<?php include("inc/comun/footer.php"); ?>
		
        
        
   
        

    
    
	

    <link rel="stylesheet" href="assets/js/wysihtml5/src/bootstrap-wysihtml5.css">
    <link rel="stylesheet" href="assets/js/datepicker/bootstrap-datetimepicker.css" >
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>
	<script src="assets/js/moment.min.js"></script>
   <script src="assets/js/wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
   <script src="assets/js/wysihtml5/src/bootstrap-wysihtml5.js"></script>
  <script src="assets/js/datepicker/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({
					locale: 'es',
					format: 'YYYY-MM-DD HH:mm:ss'
					});
					
					
				$('#datetimepicker2').datetimepicker({
					locale: 'es',
					format: 'YYYY-MM-DD HH:mm:ss'
					});
            
                
            });
        </script>
 
   
    
<!-- Imported scripts on this page -->
	<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>
    <script src='assets/js/fullcalendar/lang/es.js'></script>
	<script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
   
    <script src="assets/js/xenon-custom.js"></script>
    </body>
</html>