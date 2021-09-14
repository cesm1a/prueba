
<?php

	/*Incluimos el fichero del modelo*/
	require 'DataBase.php';
    $bdc=new DataBase();
    

$id=$_POST['id'];
$nomp=$_POST['np'];
$descp=$_POST['dp'];
$prep=$_POST['pp'];
$pesop=$_POST['psp'];
$catep=$_POST['catp'];
$stop=$_POST['stp'];
$fecrep=date("Y-m-d");

$result=$bdc->actualizar("UPDATE tproductos set  NombreP='$nomp', ReferenciaP='$descp', PrecioP=$prep, PesoP=$pesop, CategoriaP='$catep', StockP=$stop, FechaCreacionP='$fecrep', FechaUltVenta='2021-09-14 17:19:15.000000') where ID=$id");

 ?>

<a href="index.php">datos actualizados regrezar</a>

