<?php require_once('Connections/hso.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}


mysql_select_db($database_hso, $hso);
$query_ver_user = "SELECT * FROM tb_usuarios";
$ver_user = mysql_query($query_ver_user, $hso) or die(mysql_error());
$row_ver_user = mysql_fetch_assoc($ver_user);
$totalRows_ver_user = mysql_num_rows($ver_user);
?>


<?php do { ?>

  <div class="modal fade" id="modaluser-<?php echo $row_ver_user['id_usuario']; ?>">
  <div class="modal-dialog" style="width: 50%;">
    <div class="modal-content">
      
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title"><?php echo $row_ver_user['nombre']; ?> <?php echo $row_ver_user['apellido']; ?></h4>
        </div>
      
      <div class="modal-body">
        
        
        
        
        
        
        
        <!-- User Info Sidebar -->
        <table class="table table-bordered table-striped table-condensed table-hover" >
          <tbody>
          
           
          
            <tr>
              <th scope="row">#</th>
              <td><?php echo $row_ver_user['id_usuario']; ?></td>
            </tr>
            
             <tr>
              <th scope="row">Foto</th>
              <?php if($row_ver_user['foto_usuario'] == '')
			  {
				 echo '<td><img src="uploads/user/default.png" width="100" height="100"></td>';  
			  }
			  else
			  {
			   ?>
				  
			 <td><img src="uploads/tn/<?php echo $row_ver_user['foto_usuario']; ?>" width="100" height="100"></td>	  
			  <?php } ?>
			  </tr>
            
            <tr>
              <th scope="row">Nombre</th>
              <td><?php echo $row_ver_user['nombre']; ?></td>
            </tr>
            <tr>
              <th scope="row">Apellido</th>
              <td><?php echo $row_ver_user['apellido']; ?></td>
            </tr>
            <tr>
              <th scope="row">Email</th>
              <td><?php echo $row_ver_user['email']; ?></td>
            </tr>
            <tr>
              <th scope="row">Password</th>
              <td>**************</td>
            </tr>
            <tr>
              <th scope="row">Genero</th>
              <td><?php echo $row_ver_user['sexo']; ?></td>
            </tr>
            <tr>
              <th scope="row">Fecha Nacimiento</th>
              <td><?php echo $row_ver_user['fecha_nacimiento']; ?></td>
            </tr>
            <tr>
              <th scope="row">Perfil</th>
              <td><?php echo $row_ver_user['perfil']; ?></td>
            </tr>
            <tr>
              <th scope="row">Direccion</th>
              <td><?php echo $row_ver_user['direccion']; ?></td>
            </tr>
            <tr>
              <th scope="row">Telefono</th>
              <td><?php echo $row_ver_user['telefono']; ?></td>
            </tr>
            <tr>
              <th scope="row">Nivel</th>
              <td><?php echo $row_ver_user['nivel']; ?></td>
            </tr>
            <tr>
              <th scope="row">Estado</th>
              <td><?php echo $row_ver_user['estado']; ?></td>
            </tr>
            
            
            
            </tbody>
          </table>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      </div>
    </div>
     </div>
  <?php } while ($row_ver_user = mysql_fetch_assoc($ver_user)); ?>
