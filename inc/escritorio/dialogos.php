<?php require_once('Connections/hso.php'); ?>
<?php include("inc/php/sql_fun.php"); ?>
<?php
mysql_select_db($database_hso, $hso);
$query_sector = "SELECT * FROM tb_sectores";
$sector = mysql_query($query_sector, $hso) or die(mysql_error());
$row_sector = mysql_fetch_assoc($sector);
$totalRows_sector = mysql_num_rows($sector);
?>


<?php do { ?>
  <div class="modal fade" id="modal-<?php echo $row_sector['id']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><?php echo $row_sector['nombre_sect']; ?></h4>
          </div>
        
        <div class="modal-body">
          <?php echo $row_sector['contenido_sect']; ?>
          </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
           <a href="ver_sector.php?nombre_sect=<?php echo $row_sector['nombre_sect']; ?>" class="btn btn-orange" data-dismiss="modal">Gestionar Sector</a>
          
          </div>
        </div>
      </div>
    </div>
  <?php } while ($row_sector = mysql_fetch_assoc($sector)); ?>

