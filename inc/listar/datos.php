

<?php


mysql_select_db($database_hso, $hso);
$query_datos = "SELECT * FROM tb_arduino, tb_usuarios WHERE tb_arduino.id_usuarios = tb_usuarios.id_usuario";
$datos = mysql_query($query_datos, $hso) or die(mysql_error());
$row_datos = mysql_fetch_assoc($datos);
$totalRows_datos = mysql_num_rows($datos);
?>
<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Table exporting</h3>
					
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
					        <th>Usuario</th>
                            <th>Nivel Usuario</th>
                            <th>Sector</th>
                            <th>Cm3</th>
                            <!--<th>Estado</th>-->
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Direccion IP</th>
                            <th>Ver</th>
					        </tr>
					      </thead>
					    
					    <tfoot>
					      <tr>
					        <th>#</th>
					        <th>Usuario</th>
                            <th>Nivel Usuario</th>
                            <th>Sector</th>
                            <th>Cm3</th>
                            <!--<th>Estado</th>-->
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Direccion IP</th>
                            <th width="50">Acciones</th>
					        </tr>
					      </tfoot>
					    
					    <tbody>
					      <?php do { ?>
					      <tr>
					        <td><?php echo $row_datos['id_datos']; ?></td>
					        <td><?php echo $row_datos['nombre']; ?> <?php echo $row_datos['apellido']; ?></td>
                            <td><?php echo $row_datos['nivel']; ?></td>
					        <td><?php echo $row_datos['id_sector']; ?></td>
					        <td><?php echo $row_datos['cmxhora']; ?></td>
					        <td><?php echo $row_datos['fecha']; ?></td>
                            <td><?php echo $row_datos['fecha_hora']; ?></td>
                            <td><?php echo $row_datos['ip']; ?></td>
                            <td>
                   <a href="javascript:;" onclick="jQuery('#modaldatos-<?php echo $row_datos['id_datos']; ?>').modal('show', {backdrop: 'fade'});" class="btn btn-info btn-sm btn-icon icon-left">Ver</a>
							</td>
					       
					        
					        </tr>
					      <?php } while ($row_datos = mysql_fetch_assoc($datos)); ?>
					      </tbody>
				      </table>
					  
					
				</div>
			</div>


