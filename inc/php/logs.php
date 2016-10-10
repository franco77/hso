<?php require_once('Connections/hso.php'); ?>
<?php
$var1;
$var2;
$var3; 
$var4 = $row_user_login['email'];
$var5 = $_SERVER['REMOTE_ADDR'];
$var6 = date('yyyy-mm-dd h:i:sa');
$var7 = $_SERVER['HTTP_USER_AGENT'];
 

if(isset($var1, $var2, $var3, $var4, $var5))
{
	
$insertSQL="INSERT INTO tb_logs(id_log, tabla_log, accion_log, usuario_log, ip_log, fecha_log, navegador_log) VALUES ('$nombre')";
mysql_select_db($database, $nombre_conexion);
mysql_query($insertSQL, $nombre_conexion) or die(mysql_error());	
}


?>