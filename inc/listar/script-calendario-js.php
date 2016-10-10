<?php require_once('Connections/hso.php'); ?>
<?php

$autor=$row_user_login['email'];

mysql_select_db($database_hso, $hso);
$query_eventos = "SELECT * FROM tb_eventos WHERE autor_evento = '$autor'";
$eventos = mysql_query($query_eventos, $hso) or die(mysql_error());
$row_eventos = mysql_fetch_assoc($eventos);
$totalRows_eventos = mysql_num_rows($eventos);
?>

<script>
			// Calendar Initialization
			jQuery(document).ready(function($)
			{
				// Form to add new event
				
				
				// Calendar Initialization
				$('#calendar').fullCalendar({
					header: {
						left: 'title',
						center: '',
						right: 'month,agendaWeek,agendaDay prev,next'
					},
					buttonIcons: {
						prev: 'prev fa-angle-left',
						next: 'next fa-angle-right',
					},
					defaultDate: new Date(),
					editable: true,
					eventLimit: true,
					 lang: 'es',
					events: [
						<?php do { ?>
						{
							id: <?php echo $row_eventos['id_evento']; ?>,
							title: '<?php echo $row_eventos['titulo_evento']; ?>',
							start: '<?php echo $row_eventos['desde_evento']; ?>',
							end: '<?php echo $row_eventos['hasta_evento']; ?>'
						},
						 <?php } while ($row_eventos = mysql_fetch_assoc($eventos)); ?>
					],
					droppable: true,
					drop: function(date) {
						
						var $event = $(this).find('a'),
							eventObject = {
								title: $event.find('.badge').text(),
								start: date,
								className: $event.data('event-class')
							};
						
						$('#calendar').fullCalendar('renderEvent', eventObject, true);
						
						// Remove event from list
						$(this).remove();
					}
				});
				
				
				// Draggable Events
				$("#events-list li").draggable({
					revert: true,
					revertDuration: 50,
					zIndex: 999
				});
			});
			</script>
<?php
mysql_free_result($eventos);
?>
