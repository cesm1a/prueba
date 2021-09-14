<?php
/*Incluimos el fichero del modelo*/
	require 'DataBase.php';

    $bdc=new DataBase();
   

$nomp=$_POST['np'];
$descp=$_POST['dp'];
$prep=$_POST['pp'];
$pesop=$_POST['psp'];
$catep=$_POST['catp'];
$stop=$_POST['stp'];
$fecrep=date("Y-m-d");


 $estado=$bdc->insertar("INSERT INTO tproductos (ID, NombreP, ReferenciaP, PrecioP, PesoP, CategoriaP, StockP, FechaCreacionP, FechaUltVenta) VALUES (NULL, '$nomp', '$descp', $prep, $pesop, '$catep', $stop, '$fecrep', '2021-09-14 17:19:15.000000');");


?>
<h2>Registro guardado con exito</h2>
<a href="index.php">ir al inicio</a>