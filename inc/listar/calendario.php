
			<section class="calendar-env">
				
				<div class="col-sm-9 calendar-right">
					
					<div class="calendar-main">
						
						<div id="calendar"></div>
						
					</div>
					
				</div>
				
				<div class="col-sm-3 calendar-left">
					
					<div class="calendar-sidebar">
						
						<form action="<?php echo $editFormAction; ?>" name="reg-eventos" method="POST" >
                        
                        
                        <div class="form-group">
						<div class='input-group'>
                            <input type="text" name="titulo" class="form-control" placeholder="Titulo..." />
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
                                  <input name="desde" type='text' required="required" class="form-control" id="desde" />
                                 <span class="input-group-addon">
                            <a href="#"><span class="glyphicon glyphicon-calendar"></span></a>
                                 </span>
                                    </div>  
                          </div>       
                                
                                
                                 <p>&nbsp;</p>
                                 
                                    
                                
                    <div class="form-group">        
                      <div class='input-group' id='datetimepicker2'>
                    <input name="hasta" type='text' class="form-control" id="hasta" />
                    <span class="input-group-addon">
                        <a href="#"><span class="glyphicon glyphicon-calendar"></span></a>
                    </span>
                </div>  
                </div> 
                
                <p>&nbsp;</p>
                
                   <div class="form-group">
						<div class='input-group'>
                <!--<textarea name="nota" cols="50" required class="form-control" id="field-5" style="height:150px" placeholder="Nota Del Evento"></textarea>-->
                <textarea class="form-control wysihtml5" cols="50" data-stylesheet-url="assets/js/wysihtml5/lib/css/wysiwyg-color.css" name="nota" id="sample_wysiwyg"></textarea>     
                                
                   </div>
                   </div>             
                                
                       <div class="form-group">         
                      <input type="submit" class="btn btn-orange" value="Guardar"> 
                      <input type="reset" class="btn btn-primary" value="Limpiar"> 
                      <input type="hidden" name="autor" value="<?php echo $row_user_login['nombre']; ?>">       
                       </div>  
                       <input type="hidden" name="MM_insert" value="reg-eventos">   
					  </form>
                        
						
						
							
					
						
					</div>
					
				</div>
				
			</section>