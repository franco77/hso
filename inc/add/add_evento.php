<?php require_once('Connections/hso.php'); ?>

<?php
include("inc/php/user_login.php"); 

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "reg-eventos")) {
	
$autor=$row_user_login['email'];	
	
  $insertSQL = sprintf("INSERT INTO tb_eventos (titulo_evento, nota_eveto, desde_evento, hasta_evento, autor_evento, tipo_eveto) VALUES (%s, %s, %s, %s, '$autor', %s)",
                       GetSQLValueString($_POST['titulo'], "text"),
                       GetSQLValueString($_POST['nota'], "text"),
                       GetSQLValueString($_POST['desde'], "date"),
                       GetSQLValueString($_POST['hasta'], "date"),
                       //GetSQLValueString($_POST['autor'], "text"),
                       GetSQLValueString($_POST['tipo'], "text"));
					   
					   
				   

  mysql_select_db($database_hso, $hso);
  $Result1 = mysql_query($insertSQL, $hso) or die(mysql_error());

  $insertGoTo = "eventos.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}



?>

<?php



$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getBrowser($user_agent){

if(strpos($user_agent, 'MSIE') !== FALSE)
   return 'Internet explorer';
 elseif(strpos($user_agent, 'Edge') !== FALSE) //Microsoft Edge
   return 'Microsoft Edge';
 elseif(strpos($user_agent, 'Trident') !== FALSE) //IE 11
    return 'Internet explorer';
 elseif(strpos($user_agent, 'Opera Mini') !== FALSE)
   return "Opera Mini";
 elseif(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
   return "Opera";
 elseif(strpos($user_agent, 'Firefox') !== FALSE)
   return 'Mozilla Firefox';
 elseif(strpos($user_agent, 'Chrome') !== FALSE)
   return 'Google Chrome';
 elseif(strpos($user_agent, 'Safari') !== FALSE)
   return "Safari";
 else
   return 'No hemos podido detectar su navegador';


}


$navegador = getBrowser($user_agent);



error_reporting(0); 



$var2 = 'tb_eventos';
$var3 = 'INSERT'; 
$var4 = $autor;
$var5 = $_SERVER['REMOTE_ADDR'];
$var7 = $navegador;
$var8 = $row_user_login['nivel'];

if (isset($_POST["MM_insert"]))	
{ 
$insert="INSERT INTO tb_logs (tabla_log, accion_log, usuario_log, nivel_user_log, ip_log, fecha_log, navegador_log) VALUES ('$var2', '$var3', '$var4', '$var8' '$var5', NOW(), '$var7')";
mysql_select_db($database_hso, $hso);
mysql_query($insert, $hso) or die(mysql_error());						   
}


?>


