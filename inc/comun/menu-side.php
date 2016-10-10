

<div class="sidebar-menu toggle-others fixed <?php echo $row_ajustes['tipo_menu']; ?>">
			
			<div class="sidebar-menu-inner">	
				
				<header class="logo-env">
					
					<!-- logo -->
					<div class="logo">
						<a href="index.php" class="logo-expanded">
							<h3 class="titulo"><?php echo $row_ajustes['nombre_sitio']; ?></h3>
						</a>
						
						<a href="index.php" class="logo-collapsed">
							<i class="fa-user" style="color: #fefefe;"></i>
						</a>
					</div>
					
					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
						<a href="#" data-toggle="user-info-menu">
							<i class="fa-bell-o"></i>
							<span class="badge badge-success">7</span>
						</a>
						
						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>
					
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->

					
								
				</header>
						
				
						
				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<li>
						<a href="index.php">
							<i class="linecons-desktop"></i>
							<span class="title">Escritorio</span>
						</a>
						</li>
						
						
                         
                      
                      
                      <li>
						<a href="list-notas.php">
							<i class="linecons-doc"></i>
							<span class="title">Notas</span>
						</a>
				    </li>
                      
                      

                       
	
					
                    
                    
					<li>
						<a href="eventos.php">
							<i class="linecons-calendar"></i>
							<span class="title">Calendario</span>
						</a>
				    </li>
					
				
						<li>
						<a href="list-datos.php">
							<i class="linecons-beaker"></i>
							<span class="title">Datos Arduino</span>
						</a>
				    </li>
                    
                    
                     <li>
						<a href="regist_tareas.php">
							<i class="linecons-lightbulb"></i>
							<span class="title">Tareas</span>
						</a>
				    </li>
                    
                    
                      <li>
						<a href="list-tareas.php">
							<i class="linecons-wallet"></i>
							<span class="title">Listar Tarea</span>
						</a>
				    </li>
                    
                    
                    
                    <li>
						<a href="stadisticas.php">
							<i class="linecons-params"></i>
							<span class="title">Estadisticas</span>
						</a>
				    </li>
                    
                    	<?php if($row_user_login['nivel'] == 'Admin')
					{
					?>
                    
                    
                    
                       <li>
						<a href="list-setores.php">
							<i class="linecons-location"></i>
							<span class="title">Sectores</span>
						</a>
				    </li>
                    
                    
					<li>
						<a href="list-usuarios.php">
							<i class="linecons-user"></i>
							<span class="title">Usuarios</span>
						</a>
				    </li>
					
					<li>
						<a href="gestor_archivos.php">
							<i class="linecons-attach"></i>
							<span class="title">Gestor De Archivos</span>
						</a>
				    </li>
                   
                    	<li>
						<a href="respaldos.php">
							<i class="linecons-database"></i>
							<span class="title">Backups</span>
						</a>
				    </li>
                    
                    <li>
						<a href="reportes.php">
							<i class="linecons-star"></i>
							<span class="title">Reportes</span>
						</a>
				    </li>
                    
                    
                    <li>
						<a href="logs.php">
							<i class="linecons-cd"></i>
							<span class="title">Registros</span>
						</a>
				    </li>
                    
                    <li>
						<a href="editar_ajustes.php?id_ajuste=<?php echo $row_ajustes['id_ajuste'] ?>">
							<i class="linecons-pencil"></i>
							<span class="title">Personalizar</span>
						</a>
				    </li>
                    
                    
					 <?php } ?>
                    
					</ul>
				</div>
			</div>
			
			
            
            
            
            
            
            
            
            
