<?php

require 'DataBase.php';
$id=$_GET["id"];

    $bdc=new DataBase();
    $result=$bdc->eliminarRegistro($id);
?>
<p>resgistro borrado</p>
<a href="index.php">regresar</a>