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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "reg_user")) {
	
	$lista=implode(',',$_POST['images']);
 //echo $lista; 
$insertSQL = sprintf("INSERT INTO tb_usuarios (nombre, apellido, email, password, foto_usuario, sexo, fecha_nacimiento, perfil, direccion, telefono, nivel) VALUES (%s, %s, %s, %s, '$lista', %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['apellido'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['password'], "text"),
                       //GetSQLValueString($_POST['images'], "text"),
                       GetSQLValueString($_POST['sexo'], "text"),
                       GetSQLValueString($_POST['fecha_nacimiento'], "date"),
                       GetSQLValueString($_POST['perfil'], "text"),
                       GetSQLValueString($_POST['direccion'], "text"),
                       GetSQLValueString($_POST['telefono'], "text"),
                       GetSQLValueString($_POST['nivel'], "text"));

  mysql_select_db($database_hso, $hso);
  $Result1 = mysql_query($insertSQL, $hso) or die(mysql_error());

  $insertGoTo = "list-usuarios.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_hso, $hso);
$query_level = "SELECT * FROM tb_niveles";
$level = mysql_query($query_level, $hso) or die(mysql_error());
$row_level = mysql_fetch_assoc($level);
$totalRows_level = mysql_num_rows($level);
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




                         <form action="<?php echo $editFormAction; ?>" method="POST" enctype="multipart/form-data" name="reg_user" class="form-horizontal" role="form">
								
							   <div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Nombre</label>
									
									<div class="col-sm-10">
										<input name="nombre" type="text" required="required" class="form-control" id="field-1" placeholder="Nombres">
									</div>
  </div>
                                
                                <div class="form-group-separator"></div>
                                
                                <div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Apellido</label>
									
									<div class="col-sm-10">
										<input name="apellido" type="text" required="required" class="form-control" id="field-1" placeholder="Apellidos">
									</div>
								</div>
                                
                                 <div class="form-group-separator"></div>
                                
                                <div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Email</label>
									
									<div class="col-sm-10">
										<input name="email" type="email" required="required" class="form-control" id="field-1" placeholder="Email">
									</div>
								</div>
                                
                                
                                 <div class="form-group-separator"></div>
                                
                                <div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Password</label>
									
									<div class="col-sm-10">
										<input name="password" type="password" class="form-control" id="field-1" placeholder="Contraseña">
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
									<label class="col-sm-2 control-label">Fecha Nacimiento</label>
									
									<div class="col-sm-10">
										<div class="input-group">
											<input name="fecha_nacimiento" type="text" required class="form-control datepicker" id="fecha_nacimiento" placeholder="Fecha De Nacimiento" data-format="yyyy-mm-dd">
											
											<div class="input-group-addon">
												<a href="#"><i class="linecons-calendar"></i></a>
											</div>
										</div>
									</div>
								</div>
                                
                                
                                
                                 <div class="form-group-separator"></div>
                                
                              <div class="form-group">
								<label class="col-sm-2 control-label" for="field-5">Perfil De Usuario</label>
									
									<div class="col-sm-10">
										<textarea name="perfil" cols="5" required class="form-control" id="field-5" style="width: 900px; height: 94px;" placeholder="Perfil Del Usuario"></textarea>
								</div>
  </div>
                                
                                
                                 <div class="form-group-separator"></div>
                                
                               <div class="form-group">
								 <label class="col-sm-2 control-label" for="field-5">Direccion</label>
									
									<div class="col-sm-10">
										<textarea name="direccion" cols="5" required class="form-control" id="field-5" style="width: 900px; height: 94px;" placeholder="Direccion"></textarea>
								 </div>
                                </div>
                                
                                
                                 <div class="form-group-separator"></div>
                                
                                <div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Telefono</label>
									
									<div class="col-sm-10">
										<input name="telefono" type="tel" required="required" class="form-control" id="field-1" placeholder="Numero De Telefono">
									</div>
								</div>
                                
                                
                                
                                 <div class="form-group-separator"></div>
                                
                               <div class="form-group">
								 <label class="col-sm-2 control-label">Nivel</label>
									
									<div class="col-sm-10">
										
									    <select name="nivel" required class="form-control" id="nivel">
										    <option>---Selecciona El Nivel De Usuario---</option>
											<?php do { ?>
										    <option value="<?php echo $row_level['nivel']; ?>"><?php echo $row_level['nivel']; ?></option>
										    <?php } while ($row_level = mysql_fetch_assoc($level)); ?>
									      </select>
										  
						         </div>
                                </div>
                                
                                 <div class="form-group-separator"></div>
                                
                                <div class="form-group">
                                
                                <label class="col-sm-2 control-label"></label>
                                <div class="col-sm-10">
									<input type="submit" class="btn btn-gray btn-single" value="Guardar">
									<input type="reset" class="btn btn-info btn-single pull-right" value="Limpiar">
								</div>
                                </div>
                                <input type="hidden" name="MM_insert" value="reg_user">
                         </form>
                                
                                
                                
                                
                                
                                
                                
       </div>
       </div>
       </div>                         
       </div>
<?php
mysql_free_result($level);
?>
