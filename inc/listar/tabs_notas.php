			<div class="row">
			
				<div class="col-md-12">
					
					<ul class="nav nav-tabs nav-tabs-justified">
						<li class="active">
							<a href="#todo" data-toggle="tab">
								<span class="visible-xs"><i class="fa-home"></i></span>
								<span class="hidden-xs">Todas Las Notas</span>
							</a>
						</li>
						<li>
							<a href="#notas" data-toggle="tab">
								<span class="visible-xs"><i class="fa-user"></i></span>
								<span class="hidden-xs">Notas</span>
							</a>
						</li>
						<li>
							<a href="#recordatorio" data-toggle="tab">
								<span class="visible-xs"><i class="fa-envelope-o"></i></span>
								<span class="hidden-xs">Recordatorios</span>
							</a>
						</li>
						
						
					</ul>
					
					<div class="tab-content">
						<div class="tab-pane active" id="todo">
							
							<?php include("todos_eventos.php"); ?>
							
						</div>
						<div class="tab-pane" id="notas">
							
							<?php include("todo_notas.php"); ?>
								
						</div>
						<div class="tab-pane" id="recordatorio">
							
							<?php include("todo_recordatorios.php"); ?>
					
						</div>
						
						
					
					</div>
					
					
				</div>
			</div>
		
        
        
        
        
        
        
      