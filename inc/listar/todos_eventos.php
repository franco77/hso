<?php

mysql_select_db($database_hso, $hso);
$query_eventos = "SELECT * FROM tb_eventos ORDER BY fecha_eveto DESC";
$eventos = mysql_query($query_eventos, $hso) or die(mysql_error());
$row_eventos = mysql_fetch_assoc($eventos);
$totalRows_eventos = mysql_num_rows($eventos);
?>
<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Todo</h3>
					
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
					
					
					
					
				    <table class="table table-bordered table-striped " id="example-4">
					    <thead>
				          <tr>
					        <th>#</th>
					        <th>Titulo</th>
					        <th>Desde</th>
                            <th>Hasta</th>
                            <th>Autor</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Creado</th>
                            <th>Acciones</th>
					        </tr>
					      </thead>
					    
					    <tfoot>
					      <tr>
					        <th>#</th>
					        <th>Titulo</th>
					        <th>Desde</th>
                            <th>Hasta</th>
                            <th>Autor</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th>Creado</th>
                            <th>Acciones</th>
					        </tr>
					      </tfoot>
					    
					    <tbody>
					 <?php do { ?>
                      <tr>
                        <td><?php echo $row_eventos['id_evento']; ?></td>
                        <td><?php echo $row_eventos['titulo_evento']; ?></td>
                        <td><?php echo $row_eventos['desde_evento']; ?></td>
                        <td><?php echo $row_eventos['hasta_evento']; ?></td>
                        <td><?php echo $row_eventos['autor_evento']; ?></td>
                        
                        
                         <?php if($row_eventos['tipo_eveto'] == 'nota')
								{
								echo '<td><button class="btn btn-info">NOTAS</button></td>';	
								}
								else
								{
								echo '<td><button class="btn btn-purple">RECORDATORIO</button></td>';	
								}
								 ?>
                        
                        
                        
                       
                        
                        	<?php if ($row_eventos['estado_evento'] == 'Activo') 
								{
								echo '<td><button class="btn btn-success"><span> Activo </span></button></td>';
                                 } 
								else
								{
								echo '<td><button class="btn btn-red btn-icon"><span> Inactivo </span></button></td>';
								}
								
								?>
                        
                        
                        
                        
                        <td><?php echo $row_eventos['fecha_eveto']; ?></td>
                       <td>
								
 <!-- <a data-href="inc/eliminar/eliminar_evento.php?id_evento=<?php //echo $row_eventos['id_evento']; ?>" data-toggle="modal" data-target="#confirm-delete" href="#" class="btn btn-danger btn-sm btn-icon icon-left">Eliminar</a>-->
									
			<a href="javascript:;" onclick="jQuery('#dialogo1-<?php echo $row_eventos['id_evento']; ?>').modal('show', {backdrop: 'fade'});" class="btn btn-info btn-sm btn-icon icon-left">Ver</a>
								</td>
                        
                      </tr>
                      <?php } while ($row_eventos = mysql_fetch_assoc($eventos)); ?>
                        </tbody>
				      </table>
					 
					
				</div>
			</div>

