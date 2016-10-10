<?php

mysql_select_db($database_hso, $hso);
$query_logs = "SELECT * FROM tb_logs ORDER BY fecha_log DESC";
$logs = mysql_query($query_logs, $hso) or die(mysql_error());
$row_logs = mysql_fetch_assoc($logs);
$totalRows_logs = mysql_num_rows($logs);
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
				            <th>Tabla</th>
				            <th>Accion</th>
				            <th>Usuario</th>
				            <th>Nivel Usuario</th>
				            <th>Ip</th>
				            <th>Fecha</th>
				            <th>Navegador</th>
				            </tr>
				          </thead>
				        
				        <tfoot>
				          <tr>
				            <th>#</th>
				            <th>Tabla</th>
				            <th>Accion</th>
				            <th>Usuario</th>
				            <th>Nivel Usuario</th>
				            <th>Ip</th>
				            <th>Fecha</th>
				            <th>Navegador</th>
				            </tr>
				          </tfoot>
				        
				        <tbody>
				          
				          <?php do { ?>
                          <tr>
				            <td><?php echo $row_logs['id_log']; ?></td>
				            <td><?php echo $row_logs['tabla_log']; ?></td>
				            <td><?php echo $row_logs['accion_log']; ?></td>
				            <td><?php echo $row_logs['usuario_log']; ?></td>
				            <td><?php echo $row_logs['nivel_user_log']; ?></td>
				            <td><?php echo $row_logs['ip_log']; ?></td>
				            <td><?php echo $row_logs['fecha_log']; ?></td>
				            <td><?php echo $row_logs['navegador_log']; ?></td>
				            </tr>
				          <?php } while ($row_logs = mysql_fetch_assoc($logs)); ?>
				          
				          </tbody>
				        </table>
				      
					  
					
				</div>
			</div>








   
<?php
mysql_free_result($logs);
?>
