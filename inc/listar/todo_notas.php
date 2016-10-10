<?php

mysql_select_db($database_hso, $hso);
$query_notas = "SELECT * FROM tb_eventos WHERE tipo_eveto = 'nota'";
$notas = mysql_query($query_notas, $hso) or die(mysql_error());
$row_notas = mysql_fetch_assoc($notas);
$totalRows_notas = mysql_num_rows($notas);
?>
<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Notas</h3>
					
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
					
					
					
					
				    <table class="table table-bordered table-striped " id="example-44">
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
                                <td><?php echo $row_notas['id_evento']; ?></td>
                                <td><?php echo $row_notas['titulo_evento']; ?></td>
                                <td><?php echo $row_notas['nota_eveto']; ?></td>
                                <td><?php echo $row_notas['desde_evento']; ?></td>
                                
                                <td><?php echo $row_notas['autor_evento']; ?></td>
                                
                                
                                
								
								
								<?php if ($row_notas['estado_evento'] == 'Activo') 
								{
								echo '<td><button class="btn btn-success btn-icon"><span> Activo </span></button></td>';
                                 } 
								else
								{
								echo '<td><button class="btn btn-red btn-icon"><span> Inactivo </span></button></td>';
								}
								
								?>
								
                                <td><?php echo $row_notas['fecha_eveto']; ?></td>
                               
                                
                            <td>
		
  <!--<a data-href="inc/eliminar/eliminar_evento.php?id_evento=<?php //echo $row_notas['id_evento']; ?>" data-toggle="modal" data-target="#confirm-delete" href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                                Eliminar
                                </a>-->
									
									<a href="javascript:;" onclick="jQuery('#modalnota-<?php echo $row_notas['id_evento']; ?>').modal('show', {backdrop: 'fade'});" class="btn btn-info btn-sm btn-icon icon-left">
										Ver
									</a>
								</td>
                                
                                
                              </tr>
                              <?php } while ($row_notas = mysql_fetch_assoc($notas)); ?>
                        </tbody>
				      </table>
					 
					
				</div>
			</div>
