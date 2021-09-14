<?php

	/*Incluimos el fichero del modelo*/
	require 'DataBase.php';

    $bdc=new DataBase();
    $result=$bdc->consultar("SELECT * FROM tproductos");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inventario Productos</title>
</head>
<body>
<div class="container">
	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Producto</th>
      <th scope="col">Referencia</th>
      <th scope="col">Precio</th>
      <th scope="col">Peso</th>
      <th scope="col">Categoria</th>
      <th scope="col">Stock</th>
      <th scope="col">FechaCreado</th>
      <th scope="col">FechaUltimaventa</th>

    </tr>
  </thead>
  <tbody>
  	<?php
   while ($f = mysqli_fetch_row($result)) {
      
  	?>
    <tr>
      <th scope="row"><?=$f[0]?></th>
      <td><?=$f[1]?></td>
      <td><?=$f[2]?></td>
      <td><?=$f[3]?></td>
      <td><?=$f[4]?></td>
      <td><?=$f[5]?></td>
      <td><?=$f[6]?></td>
      <td><?=$f[7]?></td>
      <td><?=$f[8]?></td>
   <td><a href="eliminarRegistro.php?id=<?=$f[0]?>" class="btn btn-primary" type="button">Eliminar</a>

   <a href="editarP.php?id=<?=$f[0]?>" class="btn btn-primary" type="button">Editar</a>
   </td>
    </tr>
    <?php 

}
    ?>
  </tbody>
</table>
<div class="d-grid gap-2 d-md-block">
  <a href="crearProducto.php" class="btn btn-primary" type="button">Crear Producto</a>
  <button class="btn btn-primary" type="button">Vender</button>
</div>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</div>
</body>
</html>