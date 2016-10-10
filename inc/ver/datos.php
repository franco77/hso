<?php require_once('Connections/hso.php'); ?>
<?php



mysql_select_db($database_hso, $hso);
$query_datos_adui = "SELECT * FROM tb_arduino, tb_usuarios WHERE tb_arduino.id_usuarios = tb_usuarios.id_usuario";
$datos_adui = mysql_query($query_datos_adui, $hso) or die(mysql_error());
$row_datos_adui = mysql_fetch_assoc($datos_adui);
$totalRows_datos_adui = mysql_num_rows($datos_adui);

?>

 <?php do { ?>
<div class="modal fade" id="modaldatos-<?php echo $row_datos_adui['id_datos']; ?>">
	    <div class="modal-dialog" style="width: 30%;">
	      <div class="modal-content">
	        
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	          <h4 class="modal-title"><?php echo $row_datos_adui['id_sector']; ?></h4>
	          </div>
	        
	        <div class="modal-body">
            
            
            
 
  <table class="table table-bordered table-striped table-condensed table-hover">
     <tbody>
      
      <tr>
        <th>#</th>
        <td><?php echo $row_datos_adui['id_datos']; ?></td>
      </tr>
      <tr>
        <th>Usuario</th>
        <td><?php echo $row_datos_adui['nombre']; ?> <?php echo $row_datos_adui['apellido']; ?></td>
      </tr> 
      <tr>
        <th>Nivel Usuario</th>
        <td><?php echo $row_datos_adui['nivel']; ?></td>
      </tr> 
      <tr>
        <th>Sector</th>
        <td><?php echo $row_datos_adui['id_sector']; ?></td>
      </tr>
       
      <tr>
        <th>Cm3</th>
        <td><?php echo $row_datos_adui['cmxhora']; ?></td>
      </tr>
       
       <tr>
        <th>Fecha</th>
        <td><?php echo $row_datos_adui['fecha']; ?></td>
       </tr>
       
       <tr>
       <th>Hora</th>
        <td><?php echo $row_datos_adui['fecha_hora']; ?></td>
       </tr>
       <tr>
        <th>Direccion IP</th>
        <td><?php echo $row_datos_adui['ip']; ?></td>
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
        <?php } while ($row_datos_adui = mysql_fetch_assoc($datos_adui)); ?>