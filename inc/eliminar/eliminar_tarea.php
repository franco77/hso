<?php include("../php/admin_permisos.php"); ?>
<?php require_once('../../Connections/hso.php'); ?>
<?php include("../php/sql_fun.php"); ?>

<?php
$colname_user_login = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_user_login = $_SESSION['MM_Username'];
}
mysql_select_db($database_hso, $hso);
$query_user_login = sprintf("SELECT * FROM tb_usuarios WHERE email = %s", GetSQLValueString($colname_user_login, "text"));
$user_login = mysql_query($query_user_login, $hso) or die(mysql_error());
$row_user_login = mysql_fetch_assoc($user_login);
$totalRows_user_login = mysql_num_rows($user_login);

mysql_free_result($user_login);
?>

<?php
if ((isset($_GET['id_tarea'])) && ($_GET['id_tarea'] != "")) {
  $deleteSQL = sprintf("DELETE FROM tb_task WHERE id_tarea=%s",
                       GetSQLValueString($_GET['id_tarea'], "int"));

  mysql_select_db($database_hso, $hso);
  $Result1 = mysql_query($deleteSQL, $hso) or die(mysql_error());

  $deleteGoTo = "../../list-tareas.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}
?>
<?php
$var2 = 'tb_task';
$var3 = 'DELETE'; 
$var4 = $row_user_login['email'];
$var5 = $_SERVER['REMOTE_ADDR'];
$var7 = $_SERVER['HTTP_USER_AGENT'];
$var8 = $row_user_login['nivel'];

$insert="INSERT INTO tb_logs (tabla_log, accion_log, usuario_log, nivel_user_log, ip_log, fecha_log, navegador_log) VALUES ('$var2', '$var3', '$var4', '$var8', '$var5', NOW(), '$var7')";
mysql_select_db($database_hso, $hso);
mysql_query($insert, $hso) or die(mysql_error());						   



?>