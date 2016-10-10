<?php include("inc/php/user_permisos.php"); ?>

<?php include("inc/comun/head.php"); ?>
<body class="page-body">


	
	<div class="page-container">
    
<?php include("inc/comun/menu-side.php"); ?>
		
		<div class="main-content">
					
			<!-- User Info, Notifications and Menu Bar -->
<?php include("inc/comun/menu-top.php"); ?>
			
	<?php include("inc/php/grafica_1.php"); ?>
	
    
	
	
	<?php include("inc/comun/footer.php"); ?>
		
        

	
	

 


	<?php include("inc/comun/js.php"); ?>
   
    <!-- Imported scripts on this page -->
	<script src="assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
	<script src="assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>
    <script type="text/javascript" src="https://raw.githubusercontent.com/RitsC/PrintArea/master/js/jquery.printarea.js"></script>
     <script type="text/javascript">
$(document).ready(function() {
    $("#imprime").click(function () {
        $("div#chart_1").printArea();
		
    })
});

$(document).ready(function() {
    $("#imprime_2").click(function () {
        $("div#chart_2").printArea();
    })
});


$(document).ready(function() {
    $("#imprime_3").click(function () {
        $("div#chart_3").printArea();
    })
});
</script>
    
    
    
    </body>
</html>