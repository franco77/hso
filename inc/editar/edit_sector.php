<?php require_once('Connections/hso.php'); ?>
<?php



$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "edit_sector")) {
  $updateSQL = sprintf("UPDATE tb_sectores SET nombre_sect=%s, contenido_sect=%s WHERE id=%s",
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['sample_wysiwyg'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_hso, $hso);
  $Result1 = mysql_query($updateSQL, $hso) or die(mysql_error());

  $updateGoTo = "list-setores.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_sector = "-1";
if (isset($_GET['id'])) {
  $colname_sector = $_GET['id'];
}
mysql_select_db($database_hso, $hso);
$query_sector = sprintf("SELECT * FROM tb_sectores WHERE id = %s", GetSQLValueString($colname_sector, "int"));
$sector = mysql_query($query_sector, $hso) or die(mysql_error());
$row_sector = mysql_fetch_assoc($sector);
$totalRows_sector = mysql_num_rows($sector);

$var2 = 'tb_sectores';
$var3 = 'UPDATE'; 
$var4 = $row_user_login['email'];
$var5 = $_SERVER['REMOTE_ADDR'];
$var7 = $_SERVER['HTTP_USER_AGENT'];
$var8 = $row_user_login['nivel'];

if (isset($_POST["MM_update"]))	
{ 
$insert="INSERT INTO tb_logs (tabla_log, accion_log, usuario_log, nivel_user_log, ip_log, fecha_log, navegador_log) VALUES ('$var2', '$var3', '$var4', '$var8', '$var5', NOW(), '$var7')";
mysql_select_db($database_hso, $hso);
mysql_query($insert, $hso) or die(mysql_error());						   
}


?>




<div class="row">
   <div class="col-sm-7">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Editar Sector</h3>
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">–</span>
									<span class="expand-icon">+</span>
								</a>
								<a href="#" data-toggle="remove">
									×
								</a>
							</div>
						</div>
						<div class="panel-body">
							
							<form action="<?php echo $editFormAction; ?>" name="edit_sector" method="POST" role="form">
								
								<div class="form-group">
									<label for="nombre">Titulo De La Tarea:</label>
									<input name="nombre" type="text" required="required" class="form-control" id="nombre" placeholder="Titulo De La Pagina" value="<?php echo $row_sector['nombre_sect']; ?>">
								</div>
                                
                                
                                
                                
                                
                          
                                
                                
                                
                                
                                
                                
                      <div class="form-group">
                      <label class="control-label">Tarea</label>
					<textarea name="sample_wysiwyg" required class="form-control wysihtml5" id="sample_wysiwyg" data-stylesheet-url="assets/js/wysihtml5/lib/css/wysiwyg-color.css"><?php echo $row_sector['contenido_sect']; ?></textarea>
				               </div>
                                      
                                      
                                
                                
                            
						<div class="form-group">
								<button type="submit" class="btn btn-info btn-single ">Editar Sector</button>
                                <input type="hidden" name="id" value="<?php echo $row_sector['id']; ?>">
							  </div>
						<input type="hidden" name="MM_update" value="edit_sector">
                                 
					      </form>
							
						</div>
					</div>
				</div>
				

</div>

            

