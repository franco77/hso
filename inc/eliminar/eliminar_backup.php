<?php
$archivo = $_GET['archivo'];


$Path = '../../backups/'.$archivo;

chown($Path, 666);

if (unlink($Path)) {
    echo "success";
} else {
    echo "fail";
}

$redir='../../respaldos.php';

header( 'Location:' .$redir ) ;

?>