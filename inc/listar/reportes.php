



<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Selecione Las Fehas A Consultar</h3>
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
                        
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="reportes" method="post">
                        <div class="row">
                        <div class="col-md-4">
                         <div class="form-group">
									<label for="hasta">Desde:</label>
									<div class="input-group">
											<input name="desde" type="text" required="required" class="form-control datepicker" id="desde" data-format="yyyy-mm-dd">
											
											<div class="input-group-addon">
												<a href="#"><i class="linecons-calendar"></i></a>
											</div>
						   </div>
						  </div>
                          </div>
                              
                                
                          <div class="col-md-4">
                                <div class="form-group">
									<label for="hasta">Hasta:</label>
									<div class="input-group">
											<input name="hasta" type="text" required="required" class="form-control datepicker" id="hasta" data-format="yyyy-mm-dd">
											
											<div class="input-group-addon">
												<a href="#"><i class="linecons-calendar"></i></a>
											</div>
								 </div>
						    </div>
                          </div>
                          
                          
                          <div class="col-md-2">
                          <div class="form-group">
									<label for="ord">Ordenar Por</label>
									
									<div class="input-group">
										<select name="ordenar" required="required" class="form-control" id="ordenar">
											<option value="tb_arduino.fecha">Fecha</option>
											<option value="tb_arduino.id_sector">Sector</option>
                                            <option value="tb_arduino.id_datos">Id</option>
										</select>
							</div>
						  </div>
                          </div>
                          
                          
                          
                            <div class="col-md-2">
                          <div class="form-group">
									<label for="ord">Forma Ordenar</label>
									
									<div class="input-group">
										<select name="ord" required="required" class="form-control" id="ord">
											<option value="ASC">Ascendente</option>
										  <option value="DESC">Descendente</option>
                                           
									  </select>
							</div>
						  </div>
                          </div>
                          
                          
                          
                          
                          
                          
                         </div>
                         
                         <div class="form-group">
                         <input type="submit" name="enviar" class="btn btn-success" value="Generar Reporte">
                         </div>
                         
                        </form>
                        
                        </div>
                        </div>
                        </div>
                        <?php
if(isset($_POST['enviar']) && isset($_POST['desde']) && !empty($_POST['desde']) && isset($_POST['hasta']) && !empty($_POST['hasta']))
{

$desde = $_POST['desde'];
$hasta = $_POST['hasta'];
$ordenar = $_POST['ordenar'];
$ord = $_POST['ord'];
							
mysql_select_db($database_hso, $hso);
$query_report_1 = "SELECT * FROM tb_arduino, tb_usuarios WHERE tb_usuarios.id_usuario = tb_arduino.id_usuarios AND tb_arduino.fecha BETWEEN  '$desde' AND '$hasta' ORDER BY $ordenar $ord";
$report_1 = mysql_query($query_report_1, $hso) or die(mysql_error());
$row_report_1 = mysql_fetch_assoc($report_1);
$totalRows_report_1 = mysql_num_rows($report_1);
}
?>




<div class="row">
<div class="col-md-12">



<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Resultados De La Busqueda</h3>
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
  
   <?php error_reporting(0);
   
    if ($totalRows_report_1 > 0) {  ?>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Usuario</th>
        <th>Sector</th>
        <th>Cm Por Hora</th>
        <th>Hora</th>
        <th>Fecha</th>
        <th>Ip</th>
        </tr>
    </thead>
    <tbody>
      <?php do { ?>
        <tr>
          <td><?php echo $row_report_1['id_datos']; ?></td>
          <td><?php echo $row_report_1['email']; ?></td>
          <td><?php echo $row_report_1['id_sector']; ?></td>
          <td><?php echo $row_report_1['cmxhora']; ?> Cm</td>
          <td><?php echo $row_report_1['fecha_hora']; ?></td>
          <td><?php echo $row_report_1['fecha']; ?></td>
          <td><?php echo $row_report_1['ip']; ?></td>
        </tr>
        <?php } while ($row_report_1 = mysql_fetch_assoc($report_1)); ?>
    </tbody>
  </table>
  <?php } 
  
  else
  {
	echo '<div class="col-md-12">
	<div class="alert alert-success">
	<strong>Porfavor!</strong> Selecciona Un Rango De Fechas Validas.
		</div>
		</div>';  
  }
   ?>
</div>
</div>

</div>
</div>



