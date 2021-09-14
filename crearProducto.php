
<!DOCTYPE html>
<html>
<head>
	<title>Crear Producto</title>
</head>
<body>
	<div class="container"> 
		<h2>Registrar Productos</h2>
	<form action="procesarCreaProducto.php" method="post">
  <div class="row">
    <div class="col">
      <input name="np" type="text" class="form-control" placeholder="Nombre del Producto">
    </div>
    <div class="col">
      <input name="dp" type="text" class="form-control" placeholder="Descripcion del producto">
    </div>
  </div>

  <div class="row">
    <div class="col">
      <input name="pp" type="text" class="form-control" placeholder="Precio del Producto">
    </div>
    <div class="col">
      <input name="psp" type="text" class="form-control" placeholder="Peso del producto KiloGramos">
    </div>
  </div>
   <div class="row">
    <div class="col">
      <input name="catp" type="text" class="form-control" placeholder="Categoria del Producto">
    </div>
    <div class="col">
      <input name="stp" type="text" class="form-control" placeholder="Stock del producto numero entero">
    </div>
    <div class="col">
      <input name="fcrp" type="date" class="form-control" placeholder="fecha creacion del producto numero entero">
    </div>
  </div>
<input name="enviar" type="submit" class="btn btn-primary">

</form>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>