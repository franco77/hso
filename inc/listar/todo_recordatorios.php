<?php
mysql_select_db($database_hso, $hso);
$query_recordatorio = "SELECT * FROM tb_eventos WHERE tipo_eveto = 'recordatorio'";
$recordatorio = mysql_query($query_recordatorio, $hso) or die(mysql_error());
$row_recordatorio = mysql_fetch_assoc($recordatorio);
$totalRows_recordatorio = mysql_num_rows($recordatorio);
?>
<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Recordatorios</h3>
					
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
					
					
					
					
				    <table class="table table-bordered table-striped " id="recordatorios">
					    <thead>
				          <tr>
					        <th>#</th>
					        <th>Titulo</th>
					        <th width="200">Nota</th>
					        <th>Desde</th>
                            <th>Autor</th>
                           
                            <th>Estado</th>
                            <th>Creado</th>
                            <th width="90">Acciones</th>
                            
					        </tr>
					      </thead>
					    
					    <tfoot>
					      <tr>
					        <th>#</th>
					        <th>Titulo</th>
					        <th width="200">Nota</th>
					        <th>Desde</th>
                            <th>Autor</th>
                           
                            <th>Estado</th>
                            <th>Creado</th>
                            <th width="90">Acciones</th>
                           
					        </tr>
					      </tfoot>
					    
					    <tbody>
                          <?php do { ?>
                              <tr>
                                <td><?php echo $row_recordatorio['id_evento']; ?></td>
                                <td><?php echo $row_recordatorio['titulo_evento']; ?></td>
                                <td><?php echo $row_recordatorio['nota_eveto']; ?></td>
                                <td><?php echo $row_recordatorio['desde_evento']; ?></td>
                                <td><?php echo $row_recordatorio['autor_evento']; ?></td>
                              
                                
                                
								
								
								<?php if ($row_recordatorio['estado_evento'] == 'Activo') 
								{
								echo '<td><button class="btn btn-success btn-icon"><span> Activo </span></button></td>';
                                 } 
								else
								{
								echo '<td><button class="btn btn-red btn-icon"><span> Inactivo </span></button></td>';
								}
								
								?>
                                <td><?php echo $row_recordatorio['fecha_eveto']; ?></td>
                               
                                
                                   <td>
									
	<!--<a data-href="inc/eliminar/eliminar_evento.php?id_evento=<?php echo $row_recordatorio['id_evento']; ?>" data-toggle="modal" data-target="#confirm-delete" href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Eliminar
                                </a>-->
									
									<a href="javascript:;" onclick="jQuery('#dialogo-<?php echo $row_recordatorio['id_evento']; ?>').modal('show', {backdrop: 'fade'});" class="btn btn-info btn-sm btn-icon icon-left">
										Ver
									</a>
								</td>
                                
                                
                              </tr>
                              <?php } while ($row_recordatorio = mysql_fetch_assoc($recordatorio)); ?>
                        </tbody>
				      </table>
					 
					
				</div>
			</div>
