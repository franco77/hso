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


$autor=$row_user_login['email'];

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "edit-eventos")) {
  $updateSQL = sprintf("UPDATE tb_eventos SET titulo_evento=%s, nota_eveto=%s, desde_evento=%s, hasta_evento=%s, autor_evento=%s, tipo_eveto=%s, estado_evento=%s WHERE id_evento=%s",
                       GetSQLValueString($_POST['titulo'], "text"),
                       GetSQLValueString($_POST['nota'], "text"),
                       GetSQLValueString($_POST['desde'], "date"),
                       GetSQLValueString($_POST['hasta'], "date"),
                       GetSQLValueString($_POST['autor'], "text"),
                       GetSQLValueString($_POST['tipo'], "text"),
                       GetSQLValueString($_POST['estado'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_hso, $hso);
  $Result1 = mysql_query($updateSQL, $hso) or die(mysql_error());

  $updateGoTo = "list-notas.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_notas_filtro = "-1";
if (isset($_GET['id_evento'])) {
  $colname_notas_filtro = $_GET['id_evento'];
}
mysql_select_db($database_hso, $hso);
$query_notas_filtro = sprintf("SELECT * FROM tb_eventos WHERE autor_evento = '$autor' AND id_evento = %s", GetSQLValueString($colname_notas_filtro, "int"));
$notas_filtro = mysql_query($query_notas_filtro, $hso) or die(mysql_error());
$row_notas_filtro = mysql_fetch_assoc($notas_filtro);
$totalRows_notas_filtro = mysql_num_rows($notas_filtro);
?>
<div class="row">
    <div class="col-md-8">
    <div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Tareas A Realizar</h3>
					
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
    
    
    
    <form action="<?php echo $editFormAction; ?>" name="edit-eventos" method="POST" >
                        
                        
                        <div class="form-group">
						<div class='input-group'>
                            <input name="titulo" type="text" class="form-control" placeholder="Titulo..." value="<?php echo $row_notas_filtro['titulo_evento']; ?>" />
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-flash"></span>
                          </span>
                          </div>
                            </div>
                            
                            
                             <p>&nbsp;</p>
                            
                           <div class="form-group">
									
										<select name="tipo" required class="form-control" id="tipo">
											<option>TIPO DE EVENTO</option>
                                            <option value="nota">NOTA</option>
											<option value="recordatorio">RECORDATORIO</option>
											
										</select>
									
						  </div>
                            
                            
                            
                            
                            
                          <p>&nbsp;</p>
                            			
                                    <div class="form-group">        
                                   <div class='input-group' id='datetimepicker1'>
                                  <input name="desde" type='text' required="required" class="form-control" id="desde" value="<?php echo $row_notas_filtro['desde_evento']; ?>" />
                                 <span class="input-group-addon">
                            <a href="#"><span class="glyphicon glyphicon-calendar"></span></a>
                                 </span>
                                    </div>  
                          </div>       
                                
                                
                                 <p>&nbsp;</p>
                                 
                                    
                                
                    <div class="form-group">        
                      <div class='input-group' id='datetimepicker2'>
                    <input name="hasta" type='text' class="form-control" id="hasta" value="<?php echo $row_notas_filtro['hasta_evento']; ?>" />
                    <span class="input-group-addon">
                        <a href="#"><span class="glyphicon glyphicon-calendar"></span></a>
                    </span>
                </div>  
                </div> 
                
                <p>&nbsp;</p>
                
                   <div class="form-group">
						<div class='input-group'>
                <!--<textarea name="nota" cols="50" required class="form-control" id="field-5" style="height:150px" placeholder="Nota Del Evento"></textarea>-->
                <textarea name="nota" cols="200" class="form-control wysihtml5" id="sample_wysiwyg" data-stylesheet-url="assets/js/wysihtml5/lib/css/wysiwyg-color.css"><?php echo $row_notas_filtro['nota_eveto']; ?></textarea>     
                                
                   </div>
                   </div> 
                   
                   
                   
                   
                     <div class="form-group">
									<select name="estado" required class="form-control" id="estado">
											<option>Estado</option>
                                            <option value="Activo">Activo</option>
											<option value="Inactivo">Inactivo</option>
											
										</select>
								 </div>
                   
                   
                   
                   
                   
                   
                               
                                
          <div class="form-group">         
                      <input type="submit" class="btn btn-orange" value="Guardar"> 
                      <input type="reset" class="btn btn-primary" value="Limpiar"> 
                      <input type="hidden" name="autor" value="<?php echo $autor; ?>"> 
                      <input type="hidden" name="id" value="<?php echo $row_notas_filtro['id_evento']; ?>">       
                       </div>  
                      
                       <input type="hidden" name="MM_update" value="edit-eventos">   
					  </form>
                      
                      
                      
                      </div>
                      </div>
                      </div>
                      </div>

