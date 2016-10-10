<?php require_once('Connections/hso.php'); ?>
<?php



mysql_select_db($database_hso, $hso);
$query_notas = "SELECT * FROM tb_eventos WHERE tipo_eveto = 'nota'";
$notas = mysql_query($query_notas, $hso) or die(mysql_error());
$row_notas = mysql_fetch_assoc($notas);
$totalRows_notas = mysql_num_rows($notas);

mysql_select_db($database_hso, $hso);
$query_recordator = "SELECT * FROM tb_eventos WHERE tipo_eveto = 'recordatorio'";
$recordator = mysql_query($query_recordator, $hso) or die(mysql_error());
$row_recordator = mysql_fetch_assoc($recordator);
$totalRows_recordator = mysql_num_rows($recordator);

mysql_select_db($database_hso, $hso);
$query_todo = "SELECT * FROM tb_eventos";
$todo = mysql_query($query_todo, $hso) or die(mysql_error());
$row_todo = mysql_fetch_assoc($todo);
$totalRows_todo = mysql_num_rows($todo);
?>



<?php do { ?>
  <div class="modal fade" id="modalnota-<?php echo $row_notas['id_evento']; ?>">
    <div class="modal-dialog" style="width: 40%;">
      <div class="modal-content">
        
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><?php echo $row_notas['titulo_evento']; ?></h4>
        </div>
        
        <div class="modal-body">
          <table class="table table-bordered table-striped table-condensed table-hover" >
            <tbody>
              <tr>
                <th scope="row">#</th>
                <td><?php echo $row_notas['id_evento']; ?></td>
              </tr>
              <tr>
                <th scope="row">Titulo Del Evento</th>
                <td><?php echo $row_notas['titulo_evento']; ?></td>
              </tr>
              <tr>
                <th scope="row">Nota Del Evento</th>
                <td><?php echo $row_notas['nota_eveto']; ?></td>
              </tr>
              <tr>
                <th scope="row">Desde</th>
                <td><?php echo $row_notas['desde_evento']; ?></td>
              </tr>
              <tr>
                <th scope="row">Hasta</th>
                <td><?php echo $row_notas['hasta_evento']; ?></td>
              </tr>
              <tr>
                <th scope="row">Autor</th>
                <td><?php echo $row_notas['autor_evento']; ?></td>
              </tr>
              <tr>
                <th scope="row">Tipo Evento</th>
                <td><?php echo $row_notas['tipo_eveto']; ?></td>
              </tr>
              <tr>
                <th scope="row">Estado</th>
                <td><?php echo $row_notas['estado_evento']; ?></td>
              </tr>
              <tr>
                <th scope="row">Creado El</th>
                <td><?php echo $row_notas['fecha_eveto']; ?></td>
              </tr>
              
              </tbody>
          </table>
          
          
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
 <?php } while ($row_notas = mysql_fetch_assoc($notas)); ?>









<?php do { ?>
  <div class="modal fade" id="dialogo-<?php echo $row_recordator['id_evento']; ?>">
     <div class="modal-dialog" style="width: 40%;">
       <div class="modal-content">
         
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4 class="modal-title"><?php echo $row_recordator['titulo_evento']; ?></h4>
         </div>
         
         <div class="modal-body">
           <table class="table table-bordered table-striped table-condensed table-hover" >
             <tbody>
               <tr>
                 <th scope="row">#</th>
                 <td><?php echo $row_recordator['id_evento']; ?></td>
               </tr>
               <tr>
                 <th width="150" scope="row">Titulo Del Evento</th>
                 <td><?php echo $row_recordator['titulo_evento']; ?></td>
               </tr>
               <tr>
                 <th scope="row">Nota Del Evento</th>
                 <td><?php echo $row_recordator['nota_eveto']; ?></td>
               </tr>
               <tr>
                 <th scope="row">Desde</th>
                 <td><?php echo $row_recordator['desde_evento']; ?></td>
               </tr>
               <tr>
                 <th scope="row">Hasta</th>
                 <td><?php echo $row_recordator['hasta_evento']; ?></td>
               </tr>
               <tr>
                 <th scope="row">Autor</th>
                 <td><?php echo $row_recordator['autor_evento']; ?></td>
               </tr>
               <tr>
                 <th scope="row">Tipo Evento</th>
                 <td><?php echo $row_recordator['tipo_eveto']; ?></td>
               </tr>
               <tr>
                 <th scope="row">Estado</th>
                 <td><?php echo $row_recordator['estado_evento']; ?></td>
               </tr>
               <tr>
                 <th scope="row">Creado El</th>
                 <td><?php echo $row_recordator['fecha_eveto']; ?></td>
               </tr>
               
               
               
               
             </tbody>
           </table>
           
           
           
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
         </div>
       </div>
    </div>
  </div>
   <?php } while ($row_recordator = mysql_fetch_assoc($recordator)); ?>









<?php do { ?>
  <div class="modal fade" id="dialogo1-<?php echo $row_todo['id_evento']; ?>">
       <div class="modal-dialog" style="width: 40%;">
         <div class="modal-content">
           
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             <h4 class="modal-title"><?php echo $row_todo['titulo_evento']; ?></h4>
           </div>
           
           <div class="modal-body">
             <table class="table table-bordered table-striped table-condensed table-hover" >
               <tbody>
                 <tr>
                   <th scope="row">#</th>
                   <td><?php echo $row_todo['id_evento']; ?></td>
                 </tr>
                 <tr>
                   <th width="150" scope="row">Titulo Del Evento</th>
                   <td><?php echo $row_todo['titulo_evento']; ?></td>
                 </tr>
                 <tr>
                   <th scope="row">Nota Del Evento</th>
                   <td><?php echo $row_todo['nota_eveto']; ?></td>
                 </tr>
                 <tr>
                   <th scope="row">Desde</th>
                   <td><?php echo $row_todo['desde_evento']; ?></td>
                 </tr>
                 <tr>
                   <th scope="row">Hasta</th>
                   <td><?php echo $row_todo['hasta_evento']; ?></td>
                 </tr>
                 <tr>
                   <th scope="row">Autor</th>
                   <td><?php echo $row_todo['autor_evento']; ?></td>
                 </tr>
                 <tr>
                   <th scope="row">Tipo Evento</th>
                   <td><?php echo $row_todo['tipo_eveto']; ?></td>
                 </tr>
                 <tr>
                   <th scope="row">Estado</th>
                   <td><?php echo $row_todo['estado_evento']; ?></td>
                 </tr>
                 <tr>
                   <th scope="row">Creado El</th>
                   <td><?php echo $row_todo['fecha_eveto']; ?></td>
                 </tr>
                 
                 
                 
                 
                 
              
                 
               </tbody>
             </table>
             
             
             
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
           </div>
         </div>
       </div>
       </div>
     <?php } while ($row_todo = mysql_fetch_assoc($todo)); ?>


