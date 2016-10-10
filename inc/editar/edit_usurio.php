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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "edit_user")) {
	
	$lista=implode(',',$_POST['images']);
	
  $updateSQL = sprintf("UPDATE tb_usuarios SET nombre=%s, apellido=%s, email=%s, foto_usuario='$lista', sexo=%s, perfil=%s, direccion=%s, telefono=%s, estado=%s WHERE id_usuario=%s",
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['apellido'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['sexo'], "text"),
                       GetSQLValueString($_POST['perfil'], "text"),
                       GetSQLValueString($_POST['direccion'], "text"),
                       GetSQLValueString($_POST['telefono'], "text"),
                       GetSQLValueString($_POST['estado'], "text"),
                       GetSQLValueString($_POST['id_usuario'], "int"));

  mysql_select_db($database_hso, $hso);
  $Result1 = mysql_query($updateSQL, $hso) or die(mysql_error());

  $updateGoTo = "list-usuarios.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_user = "-1";
if (isset($_GET['id_usuario'])) {
  $colname_user = $_GET['id_usuario'];
}
mysql_select_db($database_hso, $hso);
$query_user = sprintf("SELECT * FROM tb_usuarios WHERE id_usuario = %s", GetSQLValueString($colname_user, "int"));
$user = mysql_query($query_user, $hso) or die(mysql_error());
$row_user = mysql_fetch_assoc($user);
$totalRows_user = mysql_num_rows($user);
?>
<div class="row">

<div class="col-sm-8">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Registrar Usuario</h3>
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




                         <form action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="edit_user" class="form-horizontal" role="form">
								
							   <div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Nombre</label>
									
									<div class="col-sm-10">
										<input name="nombre" type="text" required="required" class="form-control" id="field-1" placeholder="Nombres" value="<?php echo $row_user['nombre']; ?>">
									</div>
  </div>
                                
                                <div class="form-group-separator"></div>
                                
                                <div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Apellido</label>
									
									<div class="col-sm-10">
										<input name="apellido" type="text" required="required" class="form-control" id="field-1" placeholder="Apellidos" value="<?php echo $row_user['apellido']; ?>">
									</div>
								</div>
                                
                                 <div class="form-group-separator"></div>
                                
                                <div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Email</label>
									
									<div class="col-sm-10">
										<input name="email" type="email" required="required" class="form-control" id="field-1" placeholder="Email" value="<?php echo $row_user['email']; ?>">
									</div>
								</div>
                                
                               
                                
                                
                                
                               
                                
                                  <div class="form-group-separator"></div>
                                 
                               <div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Foto</label>
								<div class="col-sm-10">
                                <input type="file" name="images" id="images" orakuploader="on">
                                 <div id="images" orakuploader="on"></div>
									
								
                                       </div>
								</div>
                                
                
 <script>
$(document).ready(function(){
	$('#images').orakuploader({
		orakuploader_path : 'orakuploader/',
		
		orakuploader_main_path : 'uploads',
		orakuploader_thumbnail_path : 'uploads/tn',
		
		orakuploader_add_image : 'orakuploader/images/add.png',
		orakuploader_add_label : 'Seleccione',
		orakuploader_use_sortable : true,
		orakuploader_use_dragndrop : true,
		
		orakuploader_resize_to : 600,
		orakuploader_thumbnail_size : 150,
		
		orakuploader_maximum_uploads : 1,
		orakuploader_hide_on_exceed : true,
		orakuploader_attach_images: ['<?php echo $row_user['foto_usuario']; ?>'],
		
		orakuploader_max_exceeded : function() {
			alert("You exceeded the max. limit of 1 images.");
		}
		
	});
});

</script>
                                
                                 <div class="form-group-separator"></div>
                                
                                <div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Genero</label>
									
									<div class="col-sm-10">
										 <select name="sexo" required class="form-control" id="sexo">
                                         <option value="masculino">Masculino</option>
                                         <option value="femenino">Femenino</option>
                                         </select>
								  </div>
								</div>
                                
                                
                                
                         
                                
                                
                                 <div class="form-group-separator"></div>
                                
                              <div class="form-group">
								<label class="col-sm-2 control-label" for="field-5">Perfil De Usuario</label>
									
									<div class="col-sm-10">
										<textarea name="perfil" cols="5" required class="form-control" id="field-5" style="width: 900px; height: 94px;" placeholder="Perfil Del Usuario"><?php echo $row_user['perfil']; ?></textarea>
								</div>
  </div>
                                
                                
                                 <div class="form-group-separator"></div>
                                
                               <div class="form-group">
								 <label class="col-sm-2 control-label" for="field-5">Direccion</label>
									
									<div class="col-sm-10">
										<textarea name="direccion" cols="5" required class="form-control" id="field-5" style="width: 900px; height: 94px;" placeholder="Direccion"><?php echo $row_user['direccion']; ?></textarea>
								 </div>
                                </div>
                                
                                
                                 <div class="form-group-separator"></div>
                                
                                <div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Telefono</label>
									
									<div class="col-sm-10">
										<input name="telefono" type="tel" required="required" class="form-control" id="field-1" placeholder="Numero De Telefono" value="<?php echo $row_user['telefono']; ?>">
									</div>
								</div>
                                
                                
                                
                                
                                
                                
                                  <div class="form-group-separator"></div>
                                
                                <div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Estado Usuario</label>
									
									<div class="col-sm-10">
										 <select name="estado" required class="form-control" id="estado">
										   <option value="Activo">Activo</option>
										   <option value="Inactivo">Inactivo</option>
                                         </select>
								  </div>
								</div>
                                
                                
                                
                                
                                
                                
                                 <div class="form-group-separator"></div>
                                
                                <div class="form-group">
                                
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
									<input type="submit" class="btn btn-gray btn-single" value="Guardar">
									<input type="reset" class="btn btn-info btn-single pull-right" value="Limpiar">
                                    <input type="hidden" name="id_usuario" value="<?php echo $row_user['id_usuario']; ?>">
								</div>
                                </div>
                                <input type="hidden" name="MM_update" value="edit_user">
                               
                         </form>
                                
                                
                                
                                
                                
                                
                                
       </div>
       </div>
       </div>                         
       </div>
<?php
mysql_free_result($user);
?>
