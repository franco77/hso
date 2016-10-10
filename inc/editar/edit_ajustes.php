<?php require_once('Connections/hso.php'); ?>
<?php


$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "ajustes")) {
  $updateSQL = sprintf("UPDATE tb_ajustes SET nombre_sitio=%s, backgraund_conten=%s, tipo_menu=%s, side_backgraund=%s, side_ancho=%s, side_fuente=%s, side_hover=%s, top_backgraund=%s, top_fuente=%s, top_hover=%s, plantilla=%s WHERE id_ajuste=%s",
                       GetSQLValueString($_POST['nombre'], "text"),
					   GetSQLValueString($_POST['backgraund_conten'], "text"),
					   
					   GetSQLValueString($_POST['tipo_menu'], "text"),
					   GetSQLValueString($_POST['backgraund_side'], "text"),
                       GetSQLValueString($_POST['ancho'], "text"),
                       GetSQLValueString($_POST['fuente_side'], "text"),
                       GetSQLValueString($_POST['hover_side'], "text"),
                       GetSQLValueString($_POST['backgraund_top'], "text"),
                       GetSQLValueString($_POST['fuente_top'], "text"),
                       GetSQLValueString($_POST['hover_top'], "text"),
                       GetSQLValueString($_POST['plantilla'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_hso, $hso);
  $Result1 = mysql_query($updateSQL, $hso) or die(mysql_error());

  $updateGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_ajustes = "-1";
if (isset($_GET['id_ajuste'])) {
  $colname_ajustes = $_GET['id_ajuste'];
}
mysql_select_db($database_hso, $hso);
$query_ajustes = sprintf("SELECT * FROM tb_ajustes WHERE id_ajuste = %s", GetSQLValueString($colname_ajustes, "int"));
$ajustes = mysql_query($query_ajustes, $hso) or die(mysql_error());
$row_ajustes = mysql_fetch_assoc($ajustes);
$totalRows_ajustes = mysql_num_rows($ajustes);
?>

<div class="row">
<div class="col-sm-6">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Vertical Form Placement</h3>
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
							
							<form name="ajustes" action="<?php echo $editFormAction; ?>" method="POST" role="form">
								
								<div class="form-group">
									<label for="ancho">Nombre Del Sitio:</label>
									<input name="nombre" type="text" required="required" class="form-control" placeholder="Titulo De La Pagina" value="<?php echo $row_ajustes['nombre_sitio']; ?>">
								</div>
                                
                                
                                
                                     <div class="form-group-separator"></div> 
                                    
                                      
                                      
                                
                                
                            
								<div class="form-group">
								  <label for="backgraund_top">Background Del Contenedor:</label>
				<input name="backgraund_conten" type="text" required="required" class="form-control colorpicker" id="backgraund_conten" value="<?php echo $row_ajustes['backgraund_conten']; ?>" data-format="hex" />
											<div class="input-group-addon" style="background-color: #FFFFFF; border: 1px solid #FFFFFF;">
												<i class="color-preview"></i>
										</div>
                              </div>
                                
                                
                                
                                
                                
                                
                                     <div class="form-group-separator"></div> 
                                      
                                      
                                      
                                      
                                <div class="form-group">
									<label for="hover_top">Tipo Menu Lateral:</label>
										<select name="tipo_menu" class="form-control" id="tipo_menu">
											<option value="collapsed">Contraido</option>
											<option value="">Expandido</option>
										</select>
							    </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                     <div class="form-group-separator"></div> 
                                      
                                      
                                      
                                      
                                      
                                      <div class="form-group">
									<label for="ancho">Ancho Del Menu:</label>
									<input name="ancho" type="number" required="required" class="form-control" id="ancho" placeholder="Ancho Del Menu" value="<?php echo $row_ajustes['side_ancho']; ?>">
							  </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                               
                                
                                     <div class="form-group-separator"></div> 
                                    
                                      
                                      
                                
                                
                            
								<div class="form-group">
								  <label for="backgraund_top">Background Color Menu Lateral:</label>
									   <input name="backgraund_side" type="text" required="required" class="form-control colorpicker" value="<?php echo $row_ajustes['side_backgraund']; ?>" data-format="hex" />
											<div class="input-group-addon" style="background-color: #FFFFFF; border: 1px solid #FFFFFF;">
												<i class="color-preview"></i>
										</div>
                                       </div>
                                      
                                      
                                     <div class="form-group-separator"></div> 
                                   
                                      
                                      
                                      <div class="form-group">
									<label for="fuente_top">Color Fuente Menu Lateral:</label>
									   <input name="fuente_side" type="text" required="required" class="form-control colorpicker" id="fuente_side" value="<?php echo $row_ajustes['side_fuente']; ?>" data-format="hex" />
											<div class="input-group-addon" style="background-color: #FFFFFF; border: 1px solid #FFFFFF;">
												<i class="color-preview"></i>
										</div>
                                    </div>
                                      
                                      
                                      
                                     <div class="form-group-separator"></div> 
                                     
                                      
                                      
                                      <div class="form-group">
									<label for="hover_top">Color Hover Side Menu:</label>
									   <input name="hover_side" type="text" required="required" class="form-control colorpicker" id="hover_side" value="<?php echo $row_ajustes['side_hover']; ?>" data-format="hex" />
											<div class="input-group-addon" style="background-color: #FFFFFF; border: 1px solid #FFFFFF;">
												<i class="color-preview"></i>
										</div>
                              </div>
                                      
                                      
                                      
                                      
                                      
                                      
                                     
                                     <div class="form-group-separator"></div> 
                                      
                                      
                                      
                                      
                                      
                                      
                                      <div class="form-group">
								  <label for="backgraund_top">Background Color Menu Superior:</label>
									   <input name="backgraund_top" type="text" required="required" class="form-control colorpicker" value="<?php echo $row_ajustes['top_backgraund']; ?>" data-format="hex" id="backgraund_top" />
											<div class="input-group-addon" style="background-color: #FFFFFF; border: 1px solid #FFFFFF;">
												<i class="color-preview"></i>
										</div>
                                     </div>
                                      
                                      
                                      
                                     <div class="form-group-separator"></div> 
                                     
                                      
                                      
                                      
                                      <div class="form-group">
									<label for="fuente_top">Color Fuente Menu Superior:</label>
									   <input name="fuente_top" type="text" required="required" class="form-control colorpicker" id="fuente_top" value="<?php echo $row_ajustes['top_fuente']; ?>" data-format="hex" />
											<div class="input-group-addon" style="background-color: #FFFFFF; border: 1px solid #FFFFFF;">
												<i class="color-preview"></i>
										</div>
                                     </div>
                                      
                                      
                                     <div class="form-group-separator"></div> 
                                    
                                      
                                      
                                      
                                      <div class="form-group">
									<label for="hover_top">Color Hover Menu Superior:</label>
									   <input name="hover_top" type="text" required="required" class="form-control colorpicker" id="hover_top" value="<?php echo $row_ajustes['top_hover']; ?>" data-format="hex" />
											<div class="input-group-addon" style="background-color: #FFFFFF; border: 1px solid #FFFFFF;">
												<i class="color-preview"></i>
										</div>
                              </div>
                                      
                                      
                                      
                                      
                                    
                                     <div class="form-group-separator"></div> 
                                     
                                      
                                      
                                      
                                  <div class="form-group">
									<label for="hover_top">Pocicion Del Menu Lateral:</label>
										<select name="plantilla" required class="form-control" id="plantilla">
											<option value="izquierda">Izquierda</option>
											<option value="derecha">Derecha</option>
											
										</select>
							  </div>
								   
                                      
                                      
                                      
                                      
                                   
                                     <div class="form-group-separator"></div> 
                                   
                                           
                                      
                                     
                                      
                    
								
							  <div class="form-group">
								<button type="submit" class="btn btn-info btn-single ">Guardar Ajustes</button>
                                <input type="hidden" name="id" value="<?php echo $row_ajustes['id_ajuste']; ?>">
								</div>
							  <input type="hidden" name="MM_update" value="ajustes">
								
							</form>
							
						</div>
					</div>
				</div>
				
				
				
				
				
				
				
				
				
				
			<div class="col-sm-4">
           
            <svg height="247" width="501">

<rect x="109" y="22" rx="2" ry="2" width="290" height="30"
  style="fill:<?php echo $row_ajustes['top_backgraund']; ?>;stroke:black;stroke-width:1;" />

<rect x="50" y="23" rx="2" ry="2" width="50" height="188"
  style="fill:<?php echo $row_ajustes['side_backgraund']; ?>;stroke:black;stroke-width:1;" />

<rect x="110" y="60" rx="2" ry="2" width="290" height="150"
  style="fill:<?php echo $row_ajustes['backgraund_conten']; ?>;stroke:black;stroke-width:1;" />
Sorry, your browser does not support inline SVG.
</svg>




<svg width="490" height="247">

<rect x="136" y="22" rx="2" ry="2" width="270" height="30"
  style="fill:<?php echo $row_ajustes['top_backgraund']; ?>;stroke:black;stroke-width:1;" />

<rect x="50" y="23" rx="2" ry="2" width="80" height="189"
  style="fill:<?php echo $row_ajustes['side_backgraund']; ?>;stroke:black;stroke-width:1;" />

<rect x="136" y="60" rx="2" ry="2" width="270" height="150"
  style="fill:<?php echo $row_ajustes['backgraund_conten']; ?>;stroke:black;stroke-width:1;" />
Sorry, your browser does not support inline SVG.
</svg>



<svg width="500" height="247">

<rect x="56" y="22" rx="2" ry="2" width="275" height="30"
  style="fill:<?php echo $row_ajustes['top_backgraund']; ?>;stroke:black;stroke-width:1;" />



<rect x="56" y="60" rx="2" ry="2" width="275" height="150"
  style="fill:<?php echo $row_ajustes['backgraund_conten']; ?>;stroke:black;stroke-width:1;" />


<rect x="340" y="23" rx="2" ry="2" width="80" height="188"
  style="fill:<?php echo $row_ajustes['side_backgraund']; ?>;stroke:black;stroke-width:1;" />



Sorry, your browser does not support inline SVG.
</svg>



		   
			</div>
				
			
			
			</div>

