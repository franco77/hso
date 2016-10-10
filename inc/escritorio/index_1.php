<?php require_once('Connections/hso.php'); ?>
<?php

$maxRows_nota_index = 4;
$pageNum_nota_index = 0;
if (isset($_GET['pageNum_nota_index'])) {
  $pageNum_nota_index = $_GET['pageNum_nota_index'];
}
$startRow_nota_index = $pageNum_nota_index * $maxRows_nota_index;


$autor=$row_user_login['email'];

mysql_select_db($database_hso, $hso);
$query_nota_index = "SELECT * FROM tb_eventos WHERE tipo_eveto = 'nota' AND estado_evento = 'Activo' AND autor_evento = '$autor' ORDER BY fecha_eveto DESC";
$query_limit_nota_index = sprintf("%s LIMIT %d, %d", $query_nota_index, $startRow_nota_index, $maxRows_nota_index);
$nota_index = mysql_query($query_limit_nota_index, $hso) or die(mysql_error());
$row_nota_index = mysql_fetch_assoc($nota_index);

if (isset($_GET['totalRows_nota_index'])) {
  $totalRows_nota_index = $_GET['totalRows_nota_index'];
} else {
  $all_nota_index = mysql_query($query_nota_index);
  $totalRows_nota_index = mysql_num_rows($all_nota_index);
}
$totalPages_nota_index = ceil($totalRows_nota_index/$maxRows_nota_index)-1;

$maxRows_task_in = 3;
$pageNum_task_in = 0;
if (isset($_GET['pageNum_task_in'])) {
  $pageNum_task_in = $_GET['pageNum_task_in'];
}
$startRow_task_in = $pageNum_task_in * $maxRows_task_in;

mysql_select_db($database_hso, $hso);
$query_task_in = "SELECT * FROM tb_task WHERE asignar_tarea = '$autor' ORDER BY fecha_create DESC";
$query_limit_task_in = sprintf("%s LIMIT %d, %d", $query_task_in, $startRow_task_in, $maxRows_task_in);
$task_in = mysql_query($query_limit_task_in, $hso) or die(mysql_error());
$row_task_in = mysql_fetch_assoc($task_in);

if (isset($_GET['totalRows_task_in'])) {
  $totalRows_task_in = $_GET['totalRows_task_in'];
} else {
  $all_task_in = mysql_query($query_task_in);
  $totalRows_task_in = mysql_num_rows($all_task_in);
}
$totalPages_task_in = ceil($totalRows_task_in/$maxRows_task_in)-1;
?>


             
            <?php 
			if($totalRows_nota_index == 0)
			{ 
			echo '<div class="alert alert-warning" role="alert">DISCULPA NO HAY EVENTOS PUBLICADOS</div>';
			}
			else
			{
				
			
			
			?> 
             
              <div class="row">
            
              <?php do { ?>
              <a href="javascript:;" onclick="jQuery('#modalnota-<?php echo $row_nota_index['id_evento']; ?>').modal('show', {backdrop: 'fade'});">
              <div class="col-md-3">
                  <div class="panel panel-inverted">
                    <div class="panel-heading">
                    
                      <?php echo $row_nota_index['titulo_evento']; ?>
                      
                      </div>
                    
                    <div class="panel-body">
                    <p><div class="label label-danger">Fecha Del Evento: <?php echo $row_nota_index['desde_evento']; ?></div></p>
                    
                     </div>
                    </div>
               </div>
               </a>
                <?php } while ($row_nota_index = mysql_fetch_assoc($nota_index)); ?>
                
                
                
              </div>
            <?php 
			 }
			?>   
             
             
             
             
             
             
             
             
            
             
             
              <div class="row">
               <div class="col-md-12">
               
               <div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Normal panel with controls</h3>
                            <div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">–</span>
									<span class="expand-icon">+</span>
								</a>
								<a href="#" data-toggle="remove"> × </a>
							</div>
						</div>
						
						<div class="panel-body">
              <div align="center"><?php include("map_imagen.html"); ?></div>
              </div>
              </div>
     
          </div>
		</div>


 			 <?php 
			if($totalRows_task_in == 0)
			{ 
			echo '<div class="alert alert-warning" role="alert">DISCULPA NO HAY TAREAS PUBLICADOS</div>';
			}
			else
			{
				
			
			
			?> 
             
                
             <div class="row">
             
               <?php do { ?>
               <div class="col-md-4">
               <?php if($row_task_in['prioridad_tarea'] == 'Urgente')
			   {
				   echo '<div class="panel panel-color panel-danger">';
				   
			   }
			   else
			   
			     echo '<div class="panel panel-color panel-black">';
			    ?>
                  <div class="panel-heading">
                  <a href="javascript:;" onclick="jQuery('#modaltask-<?php echo $row_task_in['id_tarea']; ?>').modal('show', {backdrop: 'fade'});" style="color:#F5F5F5">
                       <h3 class="panel-title"><?php echo $row_task_in['titulo_tarea']; ?></h3>
                     </a>
                     </div>
                     
                     
       <div class="panel-body">
       <p><?php echo substr($row_task_in['contenido_tarea'],0,200); ?> <a href="javascript:;" onclick="jQuery('#modaltask-<?php echo $row_task_in['id_tarea']; ?>').modal('show', {backdrop: 'fade'});">Leer Mas...</a></p>
            <hr/>
            <p><div class="label label-default">Autor: <?php echo $row_task_in['autor_tarea']; ?></div></p>
            <p><div class="label label-warning">Asignado A: <?php echo $row_task_in['asignar_tarea']; ?></div></p>
            <p>
            <div class="progress">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
                  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row_task_in['progreso_tarea']; ?>%">
                    <span class="sr-only"><?php echo $row_task_in['progreso_tarea']; ?>% Completo</span>
                  </div>
                </div>
                </p>
             </div>
                </div>
                   
               </div>
                 <?php } while ($row_task_in = mysql_fetch_assoc($task_in)); ?>
				
			
				
		
				
</div>
            
            
             <?php 
			 }
			?>  
            
            
            
            
            
            
            
            
          
            
            
            
            
            
            
            
            
          
              
              
              
              
              
              
              
              
              
           <?php
mysql_free_result($task_in);
?>
