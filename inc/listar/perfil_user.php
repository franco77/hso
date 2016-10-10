<?php 
$user = $row_user_login['email'];

mysql_select_db($database_hso, $hso);
$query_cont_tareas = "SELECT COUNT(*) FROM tb_task WHERE tb_task.asignar_tarea = '$user'";
$cont_tareas = mysql_query($query_cont_tareas, $hso) or die(mysql_error());
$row_cont_tareas = mysql_fetch_assoc($cont_tareas);
$totalRows_cont_tareas = mysql_num_rows($cont_tareas);

mysql_select_db($database_hso, $hso);
$query_tareas_generate = "SELECT COUNT(*) FROM tb_task WHERE tb_task.autor_tarea = '$user'";
$tareas_generate = mysql_query($query_tareas_generate, $hso) or die(mysql_error());
$row_tareas_generate = mysql_fetch_assoc($tareas_generate);
$totalRows_tareas_generate = mysql_num_rows($tareas_generate);
?>


<div class="row">
<div class="col-sm-7">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Mi Perfil De Usuarios</h3>
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
							
						
                        
                       
                       
           
						
						<!-- User Info Sidebar -->
		                <table class="table table-bordered table-striped table-condensed table-hover" >
		                  <tbody>
		                    <tr>
		                      <th scope="row" width="325">#</th>
		                      <td><?php echo $row_user_login['id_usuario']; ?></td>
	                        </tr>
		                    <tr>
		                      <th scope="row">Nombre</th>
		                      <td><?php echo $row_user_login['nombre']; ?></td>
	                        </tr>
		                    <tr>
		                      <th scope="row">Apellido</th>
		                      <td><?php echo $row_user_login['apellido']; ?></td>
	                        </tr>
		                    <tr>
		                      <th scope="row">Email</th>
		                      <td><?php echo $row_user_login['email']; ?></td>
	                        </tr>
		                    <tr>
		                      <th scope="row">Password</th>
		                      <td><?php echo $row_user_login['password']; ?></td>
	                        </tr>
		                    <tr>
		                      <th scope="row">Nacimiento</th>
		                      <td><?php echo $row_user_login['fecha_nacimiento']; ?></td>
	                        </tr>
		                    <tr>
		                      <th scope="row">Perfil</th>
		                      <td><?php echo $row_user_login['perfil']; ?></td>
	                        </tr>
		                    <tr>
		                      <th scope="row">Direccion</th>
		                      <td><?php echo $row_user_login['direccion']; ?></td>
	                        </tr>
		                    <tr>
		                      <th scope="row">Telefono</th>
		                      <td><?php echo $row_user_login['telefono']; ?></td>
	                        </tr>
		                    <tr>
		                      <th scope="row">Nivel</th>
		                      <td><?php echo $row_user_login['nivel']; ?></td>
	                        </tr>
		                    <tr>
		                      <th scope="row">Estado</th>
		                      <td><?php echo $row_user_login['estado']; ?></td>
	                        </tr>
		                    <tr>
		                      <th scope="row">Genero</th>
		                      <td><?php echo $row_user_login['sexo']; ?></td>
	                        </tr>
		                    <tr>
		                      <th scope="row">Cantidad Tareas Asignadas</th>
		                      <td><span class="badge badge-secondary pull-left"><?php echo $row_cont_tareas['COUNT(*)']; ?></span></td>
	                        </tr>
		                    <tr>
		                      <th scope="row">Cantidad De Tareas Generadas</th>
		                      <td><span class="badge badge-purple pull-left"><?php echo $row_tareas_generate['COUNT(*)']; ?></span></td>
	                        </tr>
		                    <tr>
		                      <th colspan="2" scope="row">
                              <div class="btn-group btn-group-justified">
                              <a href="#" class="btn btn-info bg-lg"><i class="fa-pencil"></i> Editar Usuario</a>
                              </div>
                              </th>
	                        </tr>
	                      </tbody>
		                  </table>
                      </div>
			</div>
		</div>
        
        </div>
<?php
mysql_free_result($cont_tareas);

mysql_free_result($tareas_generate);
?>
