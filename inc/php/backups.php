<?php
error_reporting(0);

backup_tables('localhost','root','15925621','hso');


/* backup the db OR just a table */
//En la variable $talbes puedes agregar las tablas especificas separadas por comas:
//profesor,estudiante,clase
//O déjalo con el asterisco '*' para que se respalde toda la base de datos

function backup_tables($host,$user,$pass,$name,$tables = '*')
{
   
   $link = mysql_connect($host,$user,$pass);
   mysql_select_db($name,$link);
   
   //get all of the tables
   if($tables == '*')
   {
      $tables = array();
      $result = mysql_query('SHOW TABLES');
      while($row = mysql_fetch_row($result))
      {
         $tables[] = $row[0];
      }
   }
   else
   {
      $tables = is_array($tables) ? $tables : explode(',',$tables);
   }
   
   //cycle through
   foreach($tables as $table)
   {
      $result = mysql_query('SELECT * FROM '.$table);
      $num_fields = mysql_num_fields($result);
      
      $return.= 'DROP TABLE '.$table.';';
      $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
      $return.= "\n\n".$row2[1].";\n\n";
      
    for ($i = 0; $i < $num_fields; $i++)
      {
         while($row = mysql_fetch_row($result))
         {
            $return.= 'INSERT INTO '.$table.' VALUES(';
            for($j=0; $j<$num_fields; $j++) 
            {
               $row[$j] = addslashes($row[$j]);
               $row[$j] = ereg_replace("\n","\\n",$row[$j]);
               if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
               if ($j<($num_fields-1)) { $return.= ','; }
            }
            $return.= ");\n";
         }
      }
      $return.="\n\n\n";
   }
   
   //save file
   $handle = fopen('../../backups/'.'db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
    fwrite($handle,$return);
  fclose($handle);
  
echo '<div class="alert alert-dismissable alert-success">
					<i class="fa fa-fw fa-check"></i>&nbsp; <strong>Exitoso!</strong> Tu respaldo se realizo con exito.
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				</div>';
  }


?>
