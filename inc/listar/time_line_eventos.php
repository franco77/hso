<?php
$autor=$row_user_login['email'];

$maxRows_line_eventos = 12;
$pageNum_line_eventos = 0;
if (isset($_GET['pageNum_line_eventos'])) {
  $pageNum_line_eventos = $_GET['pageNum_line_eventos'];
}
$startRow_line_eventos = $pageNum_line_eventos * $maxRows_line_eventos;

mysql_select_db($database_hso, $hso);
$query_line_eventos = "SELECT * FROM tb_eventos WHERE autor_evento = '$autor' ORDER BY fecha_eveto DESC";
$query_limit_line_eventos = sprintf("%s LIMIT %d, %d", $query_line_eventos, $startRow_line_eventos, $maxRows_line_eventos);
$line_eventos = mysql_query($query_limit_line_eventos, $hso) or die(mysql_error());
$row_line_eventos = mysql_fetch_assoc($line_eventos);

if (isset($_GET['totalRows_line_eventos'])) {
  $totalRows_line_eventos = $_GET['totalRows_line_eventos'];
} else {
  $all_line_eventos = mysql_query($query_line_eventos);
  $totalRows_line_eventos = mysql_num_rows($all_line_eventos);
}
$totalPages_line_eventos = ceil($totalRows_line_eventos/$maxRows_line_eventos)-1;
?>
<ul class="cbp_tmtimeline">
				
                
                <li>
	<time class="cbp_tmtime" datetime="2014-10-03T18:30"><span><?php echo date('d-m-Y'); ?></span> <span class="large"><?php date_default_timezone_set("America/Caracas"); echo date("h:i:sa"); ?></span></time>
					
					<div class="cbp_tmicon timeline-bg-gray">
						<i class="fa-user"></i>
					</div>
					
					<div class="cbp_tmlabel empty">
						<span>No Activity</span>
					</div>
				</li>
				
                
	           <?php do { ?>
               
               <?php
				$date=date_create($row_line_eventos['fecha_eveto']);
				?> 
               
              
               
	               <li>
				    <time class="cbp_tmtime" datetime="<?php echo date_format($date,"Y-m-d"); ?>"><span><?php echo date_format($date,"d-m-Y"); ?></span> <span><?php echo date_format($date,"H:i:s"); ?></span></time>
				    
                     <?php if($row_line_eventos['tipo_eveto'] =='nota')
					 {
					  ?>
				    <div class="cbp_tmicon timeline-bg-info">
				      <i class="fa-paper-plane-o"></i>
				      </div>
				    <?php }
					else
					{
					 ?>
                    
                      <div class="cbp_tmicon timeline-bg-purple">
				      <i class="fa fa-newspaper-o"></i>
				      </div>
                    
                    <?php } ?>
                    
				    <div class="cbp_tmlabel">
				      <h2><span><a href="#"><?php echo $row_line_eventos['titulo_evento']; ?></a> </span></h2>
				      <p><?php echo $row_line_eventos['nota_eveto']; ?></p>
                      <p>Autor:<strong> <?php echo $row_line_eventos['autor_evento']; ?></strong></p>
                      <p>Estado:<strong> <?php echo $row_line_eventos['estado_evento']; ?></strong></p>
				      </div>
			      </li>
                  
                  
                  
				  <?php } while ($row_line_eventos = mysql_fetch_assoc($line_eventos)); ?>
				
                
                

				
                
                
			
			</ul>
			<?php
mysql_free_result($line_eventos);
?>
