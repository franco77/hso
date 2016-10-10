<?php require_once('Connections/hso.php'); ?>
<?php

mysql_select_db($database_hso, $hso);
$query_tareas_ver = "SELECT * FROM tb_task";
$tareas_ver = mysql_query($query_tareas_ver, $hso) or die(mysql_error());
$row_tareas_ver = mysql_fetch_assoc($tareas_ver);
$totalRows_tareas_ver = mysql_num_rows($tareas_ver);
?>





<?php do { ?>
	

    
  <div class="modal fade" id="modaltask-<?php echo $row_tareas_ver['id_tarea']; ?>">
	    <div class="modal-dialog" style="width: 50%;">
	      <div class="modal-content">
	        
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	          <h4 class="modal-title"><?php echo $row_tareas_ver['titulo_tarea']; ?></h4>
	          </div>
	        
	        <div class="modal-body">
            
	          <table class="table table-bordered table-striped table-condensed table-hover" >
	            <tbody>
	              <tr>
	                <th scope="row">#</th>
	                <td><?php echo $row_tareas_ver['id_tarea']; ?></td>
                  </tr>
	              <tr>
	                <th scope="row">Titulo Tarea</th>
	                <td><?php echo $row_tareas_ver['titulo_tarea']; ?></td>
                  </tr>
	              <tr>
	                <th scope="row" width="300">Asignacion De Tarea</th>
	                <td><?php echo $row_tareas_ver['asignar_tarea']; ?></td>
                  </tr>
	              <tr>
	                <th scope="row">Contenido</th>
	                <td><?php echo $row_tareas_ver['contenido_tarea']; ?></td>
                  </tr>
	              <tr>
	                <th scope="row">Prioridad</th>
	                <td><?php echo $row_tareas_ver['prioridad_tarea']; ?></td>
                  </tr>
	              <tr>
	                <th scope="row">Fecha De Entrega</th>
	                <td><?php echo $row_tareas_ver['entrega_tarea']; ?></td>
                  </tr>
	              <tr>
	                <th scope="row">Autor</th>
	                <td><?php echo $row_tareas_ver['autor_tarea']; ?></td>
                  </tr>
	              
	              <tr>
	                <th scope="row">Progreso</th>
	                <td>
	                  <div class="progress">
	                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row_tareas_ver['progreso_tarea']; ?>%">
	                      <?php echo $row_tareas_ver['progreso_tarea']; ?>%
                        </div>
                      </div>
                    </td>
                  </tr>
	              
	              <tr>
	                <th scope="row">Creada El</th>
	                <td><?php echo $row_tareas_ver['fecha_create']; ?></td>
                  </tr>
	              
	              
	             
	              
                </tbody>
	            </table>
               
	          </div>
	        
	        <div class="modal-footer">
	          <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
	          </div>
	        </div>
	      </div>
	    </div>
	  
 <?php } while ($row_tareas_ver = mysql_fetch_assoc($tareas_ver)); ?>
 <?php
mysql_free_result($tareas_ver);
?>
