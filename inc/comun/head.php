<?php require_once('Connections/hso.php'); ?>
<?php include("inc/php/user_login.php"); ?>
<?php
mysql_select_db($database_hso, $hso);
$query_ajustes = "SELECT * FROM tb_ajustes";
$ajustes = mysql_query($query_ajustes, $hso) or die(mysql_error());
$row_ajustes = mysql_fetch_assoc($ajustes);
$totalRows_ajustes = mysql_num_rows($ajustes);
?>


<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title><?php echo $row_ajustes['nombre_sitio']; ?></title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/xenon-core.css">
	<link rel="stylesheet" href="assets/css/xenon-forms.css">
	<link rel="stylesheet" href="assets/css/xenon-components.css">
	<link rel="stylesheet" href="assets/css/xenon-skins.css">
	<link rel="stylesheet" href="assets/css/custom.css">
    <?php include("css.php"); ?>

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	
	
</head>

<?php include("variantes_layout.php"); ?>