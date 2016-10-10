<?php require_once('Connections/hso.php'); ?>
<?php


$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "edit_tarea")) {
  $updateSQL = sprintf("UPDATE tb_task SET progreso_tarea=%s WHERE id_tarea=%s",
                       GetSQLValueString($_POST['progreso'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_hso, $hso);
  $Result1 = mysql_query($updateSQL, $hso) or die(mysql_error());

  $updateGoTo = "mi-tareas-pen.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

mysql_select_db($database_hso, $hso);
$query_users = "SELECT * FROM tb_usuarios ORDER BY nombre DESC";
$users = mysql_query($query_users, $hso) or die(mysql_error());
$row_users = mysql_fetch_assoc($users);
$totalRows_users = mysql_num_rows($users);

$colname_task_edit = "-1";
if (isset($_GET['id_tarea'])) {
  $colname_task_edit = $_GET['id_tarea'];
}
mysql_select_db($database_hso, $hso);
$query_task_edit = sprintf("SELECT * FROM tb_task WHERE id_tarea = %s", GetSQLValueString($colname_task_edit, "int"));
$task_edit = mysql_query($query_task_edit, $hso) or die(mysql_error());
$row_task_edit = mysql_fetch_assoc($task_edit);
$totalRows_task_edit = mysql_num_rows($task_edit);


$autor=$row_user_login['email'];
?>

<?php
$var2 = 'tb_task';
$var3 = 'INSERT'; 
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
							<h3 class="panel-title">Generar Una Tarea</h3>
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
							
							<form action="<?php echo $editFormAction; ?>" name="edit_tarea" method="POST" role="form">
								
								<div class="form-group">
									<label for="progreso">Titulo De La Tarea:</label>
									<input name="titulo" type="text" disabled required="required" class="form-control" id="titulo" placeholder="Titulo De La Pagina" value="<?php echo $row_task_edit['titulo_tarea']; ?>">
								</div>
                                
                                
                                
                                
                                
                                <div class="form-group">
								  <label class="control-label">Asignar Tarea</label>
									
								    <select name="usuario" required multiple disabled class="form-control" id="s2example-2">
									    <option></option>
									    <optgroup label="Usuarios">
									      <?php do { ?>
									      <option value="<?php echo $row_users['email']; ?>"><?php echo $row_users['nombre']; ?> <?php echo $row_users['apellido']; ?> </option>
									      <?php } while ($row_users = mysql_fetch_assoc($users)); ?>
									      </optgroup>
								      </select>
									  
										
								</div>
                                
                                
                                
                                
                                
                                
                                
                      <div class="form-group">
                      <label class="control-label">Tarea</label>
					<textarea name="sample_wysiwyg" disabled readonly required class="form-control wysihtml5" id="sample_wysiwyg" data-stylesheet-url="assets/js/wysihtml5/lib/css/wysiwyg-color.css"><?php echo $row_task_edit['contenido_tarea']; ?></textarea>
				               </div>
                                      
                                      
                                
                                
                                
                                
                                
                                
                                	
								<div class="form-group">
									<label for="progreso">Progreso De La Tarea:</label>
									<input name="progreso" type="number" required="required" class="form-control" id="progreso" placeholder="Progrso De Tarea" value="<?php echo $row_task_edit['progreso_tarea']; ?>">
							  </div>
                                
                                
                                
                                
                                
                            
						
                              <div class="form-group">
									<label for="prioridad">Prioridad:</label>
								 <select name="prioridad" required disabled class="form-control" id="prioridad">
									 <option value="Urgente">Urgente</option>
									 <option value="Normal">Normal</option>
											
						         </select>
					          </div>
                                
                                
                                
                                
                                
                                      
                                      
                                      
                                      
                               <div class="form-group">
									<label for="fecha_entrega">Entrega:</label>
									<div class="input-group">
						<input name="fecha_entrega" type="text" disabled required="required" class="form-control datepicker" id="fecha_entrega" value="<?php echo $row_task_edit['entrega_tarea']; ?>" data-format="yyyy-mm-dd">
											
											<div class="input-group-addon">
												<a href="#"><i class="linecons-calendar"></i></a>
											</div>
								 </div>
							  </div>
								
                                
                                
                                
                                  <div class="form-group">
								<button type="submit" class="btn btn-info btn-single ">Guardar Tarea</button>
                                <input type="hidden" name="autor" value="<?php echo $row_user_login['email']; ?>">
                                <input type="hidden" name="id" value="<?php echo $row_task_edit['id_tarea']; ?>">
								</div>
                                  <input type="hidden" name="MM_update" value="edit_tarea">
							</form>
							
						</div>
					</div>
				</div>
				

</div>

            
            
            
 
 
 
 
 
            
            
            
            
            

