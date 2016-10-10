			<div class="row">
            <div class="col-md-12">
             <div id="div-results"></div>
            
            
            
            <div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Respaldos De La Base De Datos</h3>
						</div>
                        <div class="panel-body">
            


  

 

  
 <?php  function listar_archivos($carpeta){
    if(is_dir($carpeta)){
        if($dir = opendir($carpeta)){
            while(($archivo = readdir($dir)) !== false){
                if($archivo != '.' && $archivo != '..' && $archivo != '.htaccess'){
					
						 
                    echo '<div class="col-md-12">
					      <h3>Respaldo</h3>
					<p><h5><i class="fa fa-database"></i>  '.$archivo.'</h5></p> 
					 <p> <i class="fa fa-calendar"></i> '.date("d M Y H:i:s.", fileatime($carpeta.'/'.$archivo)).'</p>
<p><a target="_blank" href="'.$carpeta.'/'.$archivo.'" class="btn btn-info"> Descargar<i class="fa fa-download"></i></a>  <a data-href="inc/eliminar/eliminar_backup.php?archivo='.$archivo.'" data-toggle="modal" data-target="#confirm-delete" href="#" class="btn btn-danger"> Eliminar<i class="fa fa-ban"></i></a></p>
			       
					<hr/>
					</div>';
				
                }
            }
            closedir($dir);
        }
    }
}
echo listar_archivos('backups/');
 ?>

 
 
 
 
 
 
 

    <a id="div-btn1" class="btn btn-success">Generar Respaldo <i class="fa fa-plus"></i>
</a>         
   
  
			
            </div>
            </div>
            
            </div></div>
			
			
			
			

