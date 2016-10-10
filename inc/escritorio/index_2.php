<?php require_once('Connections/hso.php'); ?>
<?php


$maxRows_index_datos = 19;
$pageNum_index_datos = 0;
if (isset($_GET['pageNum_index_datos'])) {
  $pageNum_index_datos = $_GET['pageNum_index_datos'];
}
$startRow_index_datos = $pageNum_index_datos * $maxRows_index_datos;

mysql_select_db($database_hso, $hso);
$query_index_datos = "SELECT * FROM tb_arduino, tb_usuarios WHERE tb_arduino.id_usuarios = tb_usuarios.id_usuario";
$query_limit_index_datos = sprintf("%s LIMIT %d, %d", $query_index_datos, $startRow_index_datos, $maxRows_index_datos);
$index_datos = mysql_query($query_limit_index_datos, $hso) or die(mysql_error());
$row_index_datos = mysql_fetch_assoc($index_datos);

if (isset($_GET['totalRows_index_datos'])) {
  $totalRows_index_datos = $_GET['totalRows_index_datos'];
} else {
  $all_index_datos = mysql_query($query_index_datos);
  $totalRows_index_datos = mysql_num_rows($all_index_datos);
}
$totalPages_index_datos = ceil($totalRows_index_datos/$maxRows_index_datos)-1;
?>

<div class="row">
<div class="col-sm-6">
<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Ultimos Registros De Las Bombas</h3>
							
							<div class="panel-options">
								<a href="#">
									<i class="linecons-cog"></i>
								</a>
								
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">–</span>
									<span class="expand-icon">+</span>
								</a>
								
								<a href="#" data-toggle="reload">
									<i class="fa-rotate-right"></i>
								</a>
								
								<a href="#" data-toggle="remove">
									×
								</a>
							</div>
						</div>
						<div class="panel-body">
         
           <table class="table table-bordered table-striped table-condensed table-hover">
             <thead>
               <tr>
                 <th>#</th>
                 <th>Usuario</th>
                 <th>Sector</th>
                 <th>Cm3</th>
                 <th>Hora</th>
                 <th>Fecha</th>
                 </tr>
               </thead>
             
             <tbody>
             
               <?php 
			if($totalRows_index_datos == 0)
			{ 
			echo '<div class="alert alert-warning" role="alert">DISCULPA NO HAY DATOS PUBLICADOS</div>';
			}
			else
			{
				
			?> 
             
               <?php do { ?>
              <tr> 
                 <td><?php echo $row_index_datos['id_datos']; ?></td>
                 <td><?php echo $row_index_datos['nombre']; ?></td>
                 <td><?php echo $row_index_datos['id_sector']; ?></td>
                 <td><?php echo $row_index_datos['cmxhora']; ?></td>
                 <td><?php echo $row_index_datos['fecha_hora']; ?></td>
                 <td><?php echo $row_index_datos['fecha']; ?></td>
                 </tr>
                
               <?php } while ($row_index_datos = mysql_fetch_assoc($index_datos)); ?>
               
               <?php 
				}
				?>
               </tbody>
             </table>
 
 </div>          
</div>
 </div>          




			
<div class="col-sm-6">
<section class="calendar-env">
	<div class="calendar-main">
		<div id="calendar"></div>
	</div>
    </section>
</div>                

</div>
<?php
mysql_free_result($index_datos);
?>
