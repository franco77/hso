<?php
mysql_select_db($database_hso, $hso);
$query_users = "SELECT * FROM tb_usuarios ORDER BY nombre DESC";
$users = mysql_query($query_users, $hso) or die(mysql_error());
$row_users = mysql_fetch_assoc($users);
$totalRows_users = mysql_num_rows($users);
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
					
					
					
					
				    <table class="table table-striped table-hover table-bordered" id="example-4">
					    <thead>
					      <tr>
					        <th>#</th>
					        <th>Nombre</th>
					        <th>Apellido</th>
					        <th>Email</th>
					        <th>Foto</th>
					        <th>Sexo</th>
					        <th>Fecha Nacimiento</th>
					        <!--<th>Perfil</th>-->
					        <th>Direcion</th>
					        <th>Telefono</th>
					        <th>Nivel</th>
					        <th>Estado</th>
					        <th>Acciones</th>
					        </tr>
					      </thead>
					    
					    <tfoot>
					      <tr>
					        <th>#</th>
					        <th>Nombre</th>
					        <th>Apellido</th>
					        <th>Email</th>
					       <th>Foto</th>
					        <th>Sexo</th>
					        <th>Fecha Nacimiento</th>
					        <!--<th>Perfil</th>-->
					        <th>Direcion</th>
					        <th>Telefono</th>
					        <th>Nivel</th>
					        <th>Estado</th>
					        <th>Acciones</th>
					        </tr>
					      </tfoot>
					    
					    <tbody>
					      <?php do { ?>
					      <tr>
					        <td><?php echo $row_users['id_usuario']; ?></td>
					        <td><?php echo $row_users['nombre']; ?></td>
					        <td><?php echo $row_users['apellido']; ?></td>
					        <td><?php echo $row_users['email']; ?></td>
                            <?php if($row_users['foto_usuario'] == '')
							{ ?>
                            <td><img src="uploads/user/default.png" width="80" height="80"></td> 
                             <?php 
							 }
							 else
							 {
							  ?>
                            <td><img src="uploads/tn/<?php echo $row_users['foto_usuario']; ?>" width="80" height="80"></td>
					        <?php } ?>
                            <td><?php echo $row_users['sexo']; ?></td>
					        <td><?php echo $row_users['fecha_nacimiento']; ?></td>
					        <!--<td><?php //echo $row_users['perfil']; ?></td>-->
					        <td><?php echo $row_users['direccion']; ?></td>
					        <td><?php echo $row_users['telefono']; ?></td>
					        <td><?php echo $row_users['nivel']; ?></td>
					        <td><?php echo $row_users['estado']; ?></td>
					        <td><a href="edit_usuario.php?id_usuario=<?php echo $row_users['id_usuario']; ?>" class="btn btn-secondary btn-sm btn-icon icon-left">
										Editar
									</a>
									
									<a data-href="inc/eliminar/eliminar_usuario.php?id_usuario=<?php echo $row_users['id_usuario']; ?>" data-toggle="modal" data-target="#confirm-delete" href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Eliminar
									</a>
									
									<a href="javascript:;" onclick="jQuery('#modaluser-<?php echo $row_users['id_usuario']; ?>').modal('show', {backdrop: 'fade'});" class="btn btn-info btn-sm btn-icon icon-left">Ver</a>
								</td>
					        
					        </tr>
					      <?php } while ($row_users = mysql_fetch_assoc($users)); ?>
					      </tbody>
				      </table>
					  
				<a href="add_usuario.php" class="btn btn-success"><i class="fa fa-plus"></i></a>	
				</div>
			</div>








   
