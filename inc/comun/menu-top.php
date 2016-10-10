<?php include("inc/php/salir.php"); ?>
<?php include("inc/php/user_login.php"); ?>		
<?php 

$maxRows_notific = 4;
$pageNum_notific = 0;
if (isset($_GET['pageNum_notific'])) {
  $pageNum_notific = $_GET['pageNum_notific'];
}
$startRow_notific = $pageNum_notific * $maxRows_notific;

$autor=$row_user_login['email'];



mysql_select_db($database_hso, $hso);
$query_notific = "SELECT * FROM tb_eventos WHERE autor_evento = '$autor' AND desde_evento = CURDATE() ORDER BY fecha_eveto DESC";
$query_limit_notific = sprintf("%s LIMIT %d, %d", $query_notific, $startRow_notific, $maxRows_notific);
$notific = mysql_query($query_limit_notific, $hso) or die(mysql_error());
$row_notific = mysql_fetch_assoc($notific);

if (isset($_GET['totalRows_notific'])) {
  $totalRows_notific = $_GET['totalRows_notific'];
} else {
  $all_notific = mysql_query($query_notific);
  $totalRows_notific = mysql_num_rows($all_notific);
}
$totalPages_notific = ceil($totalRows_notific/$maxRows_notific)-1;


$maxRows_recorda_task = 5;
$pageNum_recorda_task = 0;
if (isset($_GET['pageNum_recorda_task'])) {
  $pageNum_recorda_task = $_GET['pageNum_recorda_task'];
}
$startRow_recorda_task = $pageNum_recorda_task * $maxRows_recorda_task;

mysql_select_db($database_hso, $hso);
$query_recorda_task = "SELECT * FROM tb_task WHERE asignar_tarea = '$autor' ORDER BY fecha_create DESC";
$query_limit_recorda_task = sprintf("%s LIMIT %d, %d", $query_recorda_task, $startRow_recorda_task, $maxRows_recorda_task);
$recorda_task = mysql_query($query_limit_recorda_task, $hso) or die(mysql_error());
$row_recorda_task = mysql_fetch_assoc($recorda_task);

if (isset($_GET['totalRows_recorda_task'])) {
  $totalRows_recorda_task = $_GET['totalRows_recorda_task'];
} else {
  $all_recorda_task = mysql_query($query_recorda_task);
  $totalRows_recorda_task = mysql_num_rows($all_recorda_task);
}
$totalPages_recorda_task = ceil($totalRows_recorda_task/$maxRows_recorda_task)-1;


mysql_select_db($database_hso, $hso);
$query_count_task = "SELECT COUNT(*) FROM tb_task WHERE tb_task.asignar_tarea = '$autor'";
$count_task = mysql_query($query_count_task, $hso) or die(mysql_error());
$row_count_task = mysql_fetch_assoc($count_task);
$totalRows_count_task = mysql_num_rows($count_task);


mysql_select_db($database_hso, $hso);
$query_count_notas = "SELECT COUNT(*) FROM tb_eventos WHERE desde_evento = CURDATE()";
$count_notas = mysql_query($query_count_notas, $hso) or die(mysql_error());
$row_count_notas = mysql_fetch_assoc($count_notas);
$totalRows_count_notas = mysql_num_rows($count_notas);


?>       
<nav class="navbar user-info-navbar" role="navigation">
				
				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
					
					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>
					
					<li class="dropdown hover-line">
						<a href="#" data-toggle="dropdown">
							<i class="fa-envelope-o"></i>
							<span class="badge badge-green"><?php echo $row_count_task['COUNT(*)']; ?></span>
						</a>
							
						<ul class="dropdown-menu messages">
							<li>
									
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                  <?php if ($totalRows_recorda_task > 0) {  ?>
						  <?php do { ?>
                            <li class="active"><!-- "active" class means message is unread -->
                              <a href="javascript:;" onclick="jQuery('#modaltask-<?php echo $row_recorda_task['id_tarea']; ?>').modal('show', {backdrop: 'fade'});">
                                <span class="line">
                                  <strong><?php echo $row_recorda_task['titulo_tarea']; ?></strong>
                                  </span>
                                
                                <span class="line desc small">
                                  <?php echo substr($row_recorda_task['contenido_tarea'],0,80); ?>
                                  </span>
                                </a>
                            </li>
                            <?php } while ($row_recorda_task = mysql_fetch_assoc($recorda_task)); ?>
                                    <?php }  ?>
                                </ul>
								
							</li>
							
							<li class="external">
								<a href="mi-tareas-pen.php">
									<span>Todas Las Tareas</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>
					
					<li class="dropdown hover-line">
						<a href="#" data-toggle="dropdown">
							<i class="fa-bell-o"></i>
							<span class="badge badge-purple"><?php echo $row_count_notas['COUNT(*)']; ?></span>
						</a>
							
						<ul class="dropdown-menu notifications">
							
							
							<li>
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                  <?php if ($totalRows_notific > 0) {  ?>
							<?php do { ?>
                              <li class="active notification-success">
                                <a href="javascript:;" onclick="jQuery('#dialogo1-<?php echo $row_notific['id_evento']; ?>').modal('show', {backdrop: 'fade'});">
                                  <i class="fa-calendar"></i>
                                  
                                  <span class="line">
                                    <strong><?php echo $row_notific['titulo_evento']; ?></strong>
                                    </span>
                                  
                                  <span class="line small time">
                                    <?php echo $row_notific['fecha_eveto']; ?>
                                    </span>
                                  </a>
                              </li>
                              <?php } while ($row_notific = mysql_fetch_assoc($notific)); ?>
                                    <?php }  ?>
                                </ul>
							</li>
							
							
						</ul>
					</li>
					
				</ul>
				
				
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
					
					<li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->
						
						<form method="get" action="extra-search.html">
							<input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />
							
							<button type="submit" class="btn btn-link">
								<i class="linecons-search"></i>
							</button>
						</form>
						
					</li>
					
					<li class="dropdown user-profile">
						<a href="#" data-toggle="dropdown">
                      <?php
					  if ($row_user_login['foto_usuario'] == '')
					  {
						  echo '<img src="uploads/user/default.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />';
					  }
					  else
					  {
					  ?>
                      
							<img src="uploads/tn/<?php echo $row_user_login['foto_usuario']; ?>" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<?php } ?>
                            
                            <span>
								<?php echo $row_user_login['nombre']; ?> <?php echo $row_user_login['apellido']; ?>
							<i class="fa-angle-down"></i>
							</span>
						</a>
						
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							
                            
                            <li>
								<a href="mi-tareas-pen.php">
									<i class="fa-eye"></i>
									Tareas Pendiente
								</a>
							</li>
                            
                            <li>
								<a href="regist_tareas.php">
									<i class="fa-edit"></i>
									Nueva Tarea
								</a>
							</li>
						
                        
                        
                         <li>
								<a href="linea_tiempo.php">
									<i class="fa-clock-o"></i>
									Lienea De Tiempo
								</a>
							</li>
						
                        
                        
                        
							<li>
								<a href="perfil.php">
									<i class="fa-user"></i>
									Perfil
								</a>
							</li>
						
							<li class="last">
								<a href="<?php echo $logoutAction ?>">
									<i class="fa-lock"></i>
									Salir
								</a>
							</li>
						</ul>
					</li>
					
					<li>
						<a href="#" data-toggle="chat">
							<i class="fa-comments-o"></i>
						</a>
					</li>
					
				</ul>
				
			</nav>
            
            
            
            
            
    
            
            
            
            
            
            
            
            
            
            
            
            
 
            
            
            
            

