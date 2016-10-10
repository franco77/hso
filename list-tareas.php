<?php include("inc/php/user_permisos.php"); ?>
<?php include("inc/comun/head.php"); ?>
<body class="page-body">


	
	<div class="page-container">
    
<?php include("inc/comun/menu-side.php"); ?>
		
		<div class="main-content">
					
			<!-- User Info, Notifications and Menu Bar -->
<?php include("inc/comun/menu-top.php"); ?>
			
	
	<?php if($row_user_login['nivel'] == 'Admin')
	{
	include("inc/listar/usuario-task.php");
	include("inc/listar/task.php"); 
    }
    else
    {
	include("inc/listar/usuario-task.php"); 
	include("inc/listar/mis-task.php");   
    }
   
   ?>
			
	
	<?php include("inc/comun/footer.php"); ?>
		

	
	
	
 <?php include("inc/eliminar/modal_borrar.php"); ?>





    <link rel="stylesheet" href="assets/js/datatables/dataTables.bootstrap.css">
    <?php include("inc/comun/js.php"); ?>
    
    <script src="assets/js/datatables/js/jquery.dataTables.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/datatables/dataTables.bootstrap.js"></script>
	<script src="assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
	<script src="assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js"></script>

  
    <script type="text/javascript">
	
	jQuery(document).ready(function($)
					{
						
					$("#example-4").dataTable({
							dom: "<'row'<'col-sm-5'l><'col-sm-7'Tf>r>"+ 
								 "t"+ 
								 "<'row'<'col-xs-6'i><'col-xs-6'p>>",
								tableTools: {
							sSwfPath: "assets/js/datatables/tabletools/copy_csv_xls_pdf.swf"
							}
						}),
						
							$("#example-24").dataTable({
							dom: "<'row'<'col-sm-5'l><'col-sm-7'Tf>r>"+ 
								 "t"+ 
								 "<'row'<'col-xs-6'i><'col-xs-6'p>>",
								tableTools: {
							sSwfPath: "assets/js/datatables/tabletools/copy_csv_xls_pdf.swf"
							}
							
						});
					});
					</script>
	
    </body>
</html>