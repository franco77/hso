<?php require_once('Connections/hso.php'); ?>

<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}



mysql_select_db($database_hso, $hso);
$query_grafica = "SELECT id_sector, SUM(cmxhora) FROM tb_arduino GROUP BY id_sector";
$grafica = mysql_query($query_grafica, $hso) or die(mysql_error());
$row_grafica = mysql_fetch_assoc($grafica);
$totalRows_grafica = mysql_num_rows($grafica);


$mes=date(7);

mysql_select_db($database_hso, $hso);
$query_mes_actual = "SELECT id_sector, SUM(cmxhora) FROM tb_arduino WHERE MONTH(fecha) = '$mes' GROUP BY id_sector";
$mes_actual = mysql_query($query_mes_actual, $hso) or die(mysql_error());
$row_mes_actual = mysql_fetch_assoc($mes_actual);
$totalRows_mes_actual = mysql_num_rows($mes_actual);

mysql_select_db($database_hso, $hso);
$query_pie_chart = "SELECT id_sector, SUM(cmxhora) FROM tb_arduino WHERE MONTH(fecha) = '$mes' GROUP BY id_sector";
$pie_chart = mysql_query($query_pie_chart, $hso) or die(mysql_error());
$row_pie_chart = mysql_fetch_assoc($pie_chart);
$totalRows_pie_chart = mysql_num_rows($pie_chart);





?>

<div id="chart_3">

<div class="row">
				<div class="col-sm-12">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Total Litros Por Centimetros Cubicos</h3>
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
								</a>
								<a href="#" data-toggle="remove">
									&times;
								</a>
                                
                                 <a class="btn btn-success" href="javascript:void(0)" id="imprime_3"><i class="fa fa-print"></i> Imprimir</a>
							</div>
						</div>
						<div class="panel-body">	
							<script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$("#bar-1").dxChart({
										dataSource: [
											<?php do { ?>
											{day: "<?php echo $row_grafica['id_sector']; ?>", Litros: <?php echo $row_grafica['SUM(cmxhora)']; ?> },
											<?php } while ($row_grafica = mysql_fetch_assoc($grafica)); ?>
											
										],
									 
										series: {
											argumentField: "day",
											valueField: "Litros",
											name: "Litros",
											type: "bar",
											color: '#E5272A'
										}
									});
									
									
								});
								
								function between(randNumMin, randNumMax)
								{
									var randInt = Math.floor((Math.random() * ((randNumMax + 1) - randNumMin)) + randNumMin);
									
									return randInt;
								}
							</script>
							<div id="bar-1" style="height: 440px; width: 100%;"></div>
							<br />
							
						</div>
					</div>
						
				</div>
			</div>
            
            </div>
    


<div id="chart_2">

<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Litros Por Centimetros Cubicos Mes En Curso</h3>
        <div class="panel-options">
         <a href="#" data-toggle="panel"> 
         <span class="collapse-icon">&ndash;</span> 
         <span class="expand-icon">+</span> </a> 
         <a href="#" data-toggle="remove"> &times; </a>
         
          <a class="btn btn-success" href="javascript:void(0)" id="imprime_2"><i class="fa fa-print"></i> Imprimir</a>
         </div>
      </div>
      <div class="panel-body">
        <script type="text/javascript">
								jQuery(document).ready(function($)
								{
									$("#bar-44").dxChart({
										dataSource: [
											<?php do { ?>
											{day: "<?php echo $row_mes_actual['id_sector']; ?>", Litros: <?php echo $row_mes_actual['SUM(cmxhora)']; ?> },
											 <?php } while ($row_mes_actual = mysql_fetch_assoc($mes_actual)); ?>
											
										],
									 
										series: {
											argumentField: "day",
											valueField: "Litros",
											name: "Litros",
											type: "bar",
											color: '#1992C4'
										}
									});
									
									
								});
								
								function between(randNumMin, randNumMax)
								{
									var randInt = Math.floor((Math.random() * ((randNumMax + 1) - randNumMin)) + randNumMin);
									
									return randInt;
								}
							</script>
        <div id="bar-44" style="height: 440px; width: 100%;"></div>
        <br />
      </div>
    </div>
  </div>
</div>

</div>







          <div id="chart_1">
          
          <div class="row">
				<div class="col-sm-12">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Porcentaje De Consumo En EL Mes</h3>
                            
                            
                            
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
                                    
								</a>
								<a href="#" data-toggle="remove">
									&times;
								</a>
                                
                                <a class="btn btn-success" href="javascript:void(0)" id="imprime"><i class="fa fa-print"></i> Imprimir</a>
                            </div>
						</div>
						<div class="panel-body">	
						  

<script type="text/javascript">




    var dataSource = [
	
	<?php do { ?>
        {
    country: "<?php echo $row_pie_chart['id_sector']; ?>",
    medals: <?php echo $row_pie_chart['SUM(cmxhora)']; ?>
}, 
<?php } while ($row_pie_chart = mysql_fetch_assoc($pie_chart)); ?>
    ];
     
    $(function () {
       
	$("#container").dxPieChart({
    dataSource: dataSource,
   
    legend: {
        orientation: "horizontal",
        itemTextPosition: "right",
        horizontalAlignment: "right",
        verticalAlignment: "bottom",
        columnCount: 4
    },
    "export": {
        enabled: true
    },
    series: [{
        argumentField: "country",
        valueField: "medals",
        label: {
            visible: true,
            font: {
                size: 16
            },
            connector: {
                visible: true,
                width: 0.5
            },
            position: "columns",
            customizeText: function(arg) {
                return arg.valueText + " (" + arg.percentText + ")";
            }
        }
    }]
});   
	   
	   
    });



</script>







    <div id="container" style="height: 740px; width: 100%;"></div>






							<br />
							
						</div>
					</div>
						
				</div>
			</div>
            


            </div>
            
