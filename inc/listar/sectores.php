<?php require_once('Connections/hso.php'); ?>
<?php


mysql_select_db($database_hso, $hso);
$query_sectores = "SELECT * FROM tb_sectores ORDER BY nombre_sect DESC";
$sectores = mysql_query($query_sectores, $hso) or die(mysql_error());
$row_sectores = mysql_fetch_assoc($sectores);
$totalRows_sectores = mysql_num_rows($sectores);
?>


<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Sectores</h3>
					
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
					
					
					
					
				    
			        <table class="table table-striped" id="example-4">
				        <thead>
				          <tr>
				            <th>#</th>
				            <th>Nombre</th>
				            <th width="900">Contenido</th>
				            <th>Ultima Actualizacion</th>
				            <th >Acciones</th>
				            </tr>
				          </thead>
				        
				        <tfoot>
				          <tr>
				            <th>#</th>
				            <th>Nombre</th>
				            <th>Contenido</th>
				            <th>Ultima Actualizacion</th>
				            <th >Acciones</th>
				            </tr>
				          </tfoot>
				        
				        <tbody>
				          <?php do { ?>
				          <tr>
				            <td><?php echo $row_sectores['id']; ?></td>
				            <td><?php echo $row_sectores['nombre_sect']; ?></td>
				            <td><?php echo $row_sectores['contenido_sect']; ?></td>
				            <td><?php echo $row_sectores['last_update']; ?></td>
				            <td>
				              
				              <!--<a data-href="inc/eliminar/eliminar_tarea.php?id_tarea=<?php //echo $row_task['id_tarea']; ?>" data-toggle="modal" data-target="#confirm-delete" href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Eliminar
                                </a>-->
				              
				              <a href="edit_sector.php?id=<?php echo $row_sectores['id']; ?>" class="btn btn-secondary btn-sm btn-icon icon-left">Editar</a>
				              
				              <a href="javascript:;" onclick="jQuery('#modal-<?php echo $row_sectores['id']; ?>').modal('show', {backdrop: 'fade'});" class="btn btn-info btn-sm btn-icon icon-left">Ver</a>
				              </td>
				            </tr>
				          <?php } while ($row_sectores = mysql_fetch_assoc($sectores)); ?>
			            </tbody>
				        </table>
				      
					  
					
				</div>
			</div>
