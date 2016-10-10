<?php require_once('Connections/hso.php'); ?>
<?php include("sql_fun.php"); ?>
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
<?php //echo $row_user_login['nombre']; ?>
<?php //echo $row_user_login['apellido']; ?>
<?php //echo $row_user_login['email']; ?>