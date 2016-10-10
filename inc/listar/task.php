<?php
mysql_select_db($database_hso, $hso);
$query_task = "SELECT * FROM tb_task";
$task = mysql_query($query_task, $hso) or die(mysql_error());
$row_task = mysql_fetch_assoc($task);
$totalRows_task = mysql_num_rows($task);
?>

<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Todas Las Tareas</h3>
					
					<div class="panel-options">
						<a href="#" data-toggle="panel">
							<span class="collapse-icon">&ndash;</span>
							<span class="expand-icon">+</span>
						</a>
						<a href="#" data-toggle="remove">
							&times;
						</a>
					</div>
				</div>
				<div class="panel-body">
					
					
					
					
				    <table class="table table-bordered table-striped" id="example-4">
					    <thead>
					       <tr>
					        <th>#</th>
					        <th>Titulo</th>
					        <th>Tarea Asignada A</th>
					        <th>Contenido</th>
					        <th>Prioridad</th>
					        <th>Fecha Entrega</th>
					        <th>Autor</th>
					        <th>Fecha Creada</th>
					        <th>Progreso</th>
					        <th>Acciones</th>
					        </tr>
					      </thead>
					    
					    <tfoot>
					      <tr>
					        <th>#</th>
					        <th>Titulo</th>
					        <th>Tarea Asignada A</th>
					        <th width="320">Contenido</th>
					        <th>Prioridad</th>
					        <th>Fecha Entrega</th>
					        <th>Autor</th>
					        <th>Fecha Creada</th>
					        <th>Progreso</th>
					        <th>Acciones</th>
					        </tr>
					      </tfoot>
					    
					    <tbody>
                          <?php do { ?>
                          <tr>
                            <td><?php echo $row_task['id_tarea']; ?></td>
                            <td><?php echo $row_task['titulo_tarea']; ?></td>
                            <td><?php echo $row_task['asignar_tarea']; ?></td>
                            <td><?php echo substr($row_task['contenido_tarea'],0,150); ?><a href="javascript:;" onclick="jQuery('#modal-<?php echo $row_task['id_tarea']; ?>').modal('show', {backdrop: 'fade'});" style="color:#0785CB;">...Leer Mas</a></td>
                            <td><?php echo $row_task['prioridad_tarea']; ?></td>
                            <td><?php echo $row_task['entrega_tarea']; ?></td>
                            <td><?php echo $row_task['autor_tarea']; ?></td>
                            <td><?php echo $row_task['fecha_create']; ?></td>
                            <td>
                            <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row_task['progreso_tarea']; ?>%; color:#585858;">
                             <?php echo $row_task['progreso_tarea']; ?>%
                            </div>
                          </div>
							
                            </td>
                            <td>
                              
  <!--<a data-href="inc/eliminar/eliminar_tarea.php?id_tarea=<?php //echo $row_task['id_tarea']; ?>" data-toggle="modal" data-target="#confirm-delete" href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Eliminar
                                </a>-->
                              
                              
                                
                                <a href="javascript:;" onclick="jQuery('#modaltask-<?php echo $row_task['id_tarea']; ?>').modal('show', {backdrop: 'fade'});" class="btn btn-info btn-sm btn-icon icon-left">Ver</a>
                             
                                
                            </td>
                            
                          </tr>
                          <?php } while ($row_task = mysql_fetch_assoc($task)); ?>
                        </tbody>
				      </table>
					  
					
				</div>
			</div>








   
<?php
mysql_free_result($task);
?>
