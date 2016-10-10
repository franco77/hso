<?php

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "tareas")) {
  $insertSQL = sprintf("INSERT INTO tb_task (titulo_tarea, asignar_tarea, contenido_tarea, prioridad_tarea, entrega_tarea, autor_tarea, fecha_create) VALUES (%s, %s, %s, %s, %s, %s, NOW())",
                       GetSQLValueString($_POST['titulo'], "text"),
                       GetSQLValueString($_POST['usuario'], "text"),
                       GetSQLValueString($_POST['sample_wysiwyg'], "text"),
                       GetSQLValueString($_POST['prioridad'], "text"),
                       GetSQLValueString($_POST['fecha_entrega'], "date"),
                       GetSQLValueString($_POST['autor'], "text"));

  mysql_select_db($database_hso, $hso);
  $Result1 = mysql_query($insertSQL, $hso) or die(mysql_error());

  $insertGoTo = "regist_tareas.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}


mysql_select_db($database_hso, $hso);
$query_users = "SELECT * FROM tb_usuarios ORDER BY nombre DESC";
$users = mysql_query($query_users, $hso) or die(mysql_error());
$row_users = mysql_fetch_assoc($users);
$totalRows_users = mysql_num_rows($users);

$maxRows_tasks = 4;
$pageNum_tasks = 0;
if (isset($_GET['pageNum_tasks'])) {
  $pageNum_tasks = $_GET['pageNum_tasks'];
}
$startRow_tasks = $pageNum_tasks * $maxRows_tasks;

$autor=$row_user_login['email'];

mysql_select_db($database_hso, $hso);
$query_tasks = "SELECT * FROM tb_task WHERE autor_tarea = '$autor' ORDER BY fecha_create DESC";
$query_limit_tasks = sprintf("%s LIMIT %d, %d", $query_tasks, $startRow_tasks, $maxRows_tasks);
$tasks = mysql_query($query_limit_tasks, $hso) or die(mysql_error());
$row_tasks = mysql_fetch_assoc($tasks);

if (isset($_GET['totalRows_tasks'])) {
  $totalRows_tasks = $_GET['totalRows_tasks'];
} else {
  $all_tasks = mysql_query($query_tasks);
  $totalRows_tasks = mysql_num_rows($all_tasks);
}
$totalPages_tasks = ceil($totalRows_tasks/$maxRows_tasks)-1;
?>

<?php
$var2 = 'tb_task';
$var3 = 'INSERT'; 
$var4 = $row_user_login['email'];
$var5 = $_SERVER['REMOTE_ADDR'];
$var7 = $_SERVER['HTTP_USER_AGENT'];
$var8 = $row_user_login['nivel'];

if (isset($_POST["MM_insert"]))	
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
							
							<form name="tareas" action="<?php echo $editFormAction; ?>" method="POST" role="form">
								
								<div class="form-group">
									<label for="titulo">Titulo De La Tarea:</label>
									<input name="titulo" type="text" required="required" class="form-control" id="titulo" placeholder="Titulo De La Pagina" value="">
								</div>
                                
                                
                                
                                
                                
                                <div class="form-group">
								  <label class="control-label">Asignar Tarea</label>
									
								    <select name="usuario" required multiple class="form-control" id="s2example-2">
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
					<textarea name="sample_wysiwyg" required class="form-control wysihtml5" id="sample_wysiwyg" data-stylesheet-url="assets/js/wysihtml5/lib/css/wysiwyg-color.css"></textarea>
				               </div>
                                      
                                      
                                
                                
                            
						
                                 <div class="form-group">
									<label for="prioridad">Prioridad:</label>
									<select name="prioridad" required class="form-control" id="prioridad">
										<option value="Urgente">Urgente</option>
										<option value="Normal">Normal</option>
											
								    </select>
					          </div>
                                
                                
                                
                                
                                
                                      
                                      
                                      
                                      
                               <div class="form-group">
									<label for="fecha_entrega">Entrega:</label>
									<div class="input-group">
											<input name="fecha_entrega" type="text" required="required" class="form-control datepicker" id="fecha_entrega" data-format="yyyy-mm-dd">
											
											<div class="input-group-addon">
												<a href="#"><i class="linecons-calendar"></i></a>
											</div>
								 </div>
							  </div>
								
                                
                                
                                
                                  <div class="form-group">
								<button type="submit" class="btn btn-info btn-single ">Guardar Tarea</button>
                                <input type="hidden" name="autor" value="<?php echo $row_user_login['email']; ?>">
								</div>
                                  <input type="hidden" name="MM_insert" value="tareas">
							 
								
							</form>
							
						</div>
					</div>
				</div>
				

<div class="col-sm-5">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Ultimas 4 Tareas Asignadas</h3>
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
							
						
                        
                       
                       
                       
                         
                                   <?php do { ?>
 
                                     <div class="list-group list-group-minimal">
										<a href="javascript:;" onclick="jQuery('#modaltask-<?php echo $row_tasks['id_tarea']; ?>').modal('show', {backdrop: 'fade'});" class="list-group-item ">
											<?php echo $row_tasks['titulo_tarea']; ?>
                                            <p>&nbsp;</p>
                                             <div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row_tasks['progreso_tarea']; ?>%">
											<span style="color:#787878;"><?php echo $row_tasks['progreso_tarea']; ?>% Completado</span>
										</div>
									</div>
                                    
                                     <p>Creado: <?php echo $row_tasks['fecha_create']; ?></p>
                                     <p>Autor: <?php echo $row_tasks['autor_tarea']; ?></p>
										</a>
                                        
                                    </div>
                                 <?php } while ($row_tasks = mysql_fetch_assoc($tasks)); ?>
                    
                    
                    
                       
                      </div>
			</div>
		</div>
	</div>
            
            
            
 
 
 
 
 
            
            
            
            
            
<?php
mysql_free_result($users);

mysql_free_result($tasks);
?>
