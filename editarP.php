<?php
/*Incluimos el fichero del modelo*/
  require 'DataBase.php';

$id=$_GET["id"];
    $bdc=new DataBase();
    $result=$bdc->consultarId("SELECT * FROM tproductos where ID=".$id);



?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar Producto</title>
</head>
<body>
	<div class="container"> 
		<h2>Editar Productos</h2>
	<form action="actualizaProducto.php" method="post">
    <?php
   while ($f = mysqli_fetch_row($result)) {
      
    ?>
    <input type="hidden" name="id" value="<?=$id?>">
  <div class="row">
    <div class="col">
      <input name="np" type="text" class="form-control" placeholder="<?=$f[1]?>">
    </div>
    <div class="col">
      <input name="dp" type="text" class="form-control" placeholder="<?=$f[2]?>">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <input name="pp" type="text" class="form-control" placeholder="<?=$f[3]?>">
    </div>
    <div class="col">
      <input name="psp" type="text" class="form-control" placeholder="<?=$f[4]?>"/>
    </div>
  </div>
   <div class="row">
    <div class="col">
      <input name="catp" type="text" class="form-control" placeholder="<?=$f[5]?>">
    </div>
    <div class="col">
      <input name="stp" type="text" class="form-control" placeholder="<?=$f[6]?>">
    </div>
    <div class="col">
      <input name="fcrp" type="date" class="form-control" placeholder="<?=$f[7]?>">
    </div>
  </div>
<input name="enviar" type="submit" class="btn btn-primary">
<?php }?>
</form>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>