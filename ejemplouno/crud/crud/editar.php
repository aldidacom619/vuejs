<?php
include 'conexion.php';
$id = $con->real_escape_string(htmlentities($_GET['id']));
$sel = $con->query("SELECT * FROM inventario WHERE id = '$id' ");
if ($f = $sel->fetch_assoc()) {
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>crud</title>
</head>
<body>
    <nav class="navbar navbar-light bg-info" >
        <a href="#" class="navbar-brand" >CRUD</a>
    </nav>

    <div class="container" style="padding-top:30px;" >

        <form action="actualizar.php" method="POST">
            <div class="form-group" >
                <input type="hidden" name="id" value="<?php echo $f['id'] ?>" >
                <input type="text" name="producto" placeholder="Producto" class="form-control" value="<?php echo $f['producto'] ?>" >
            </div>
            <div class="form-group" >
                <input type="number" name="precio" placeholder="Precio" step="0.01" class="form-control" value="<?php echo $f['precio'] ?>" >
            </div>
            <div class="form-group" >
                <input type="numer" name="cantidad" placeholder="Cantidad" class="form-control" value="<?php echo $f['cantidad'] ?>" >
            </div>
            <div class="form-group" >
                <input type="text" name="categoria" placeholder="Categoria" class="form-control" value="<?php echo $f['categoria'] ?>" >
            </div>
            <div class="form-group" >
                <input type="submit" value="Editar"  class="btn btn-info" >
            </div>
        </form>
       
    </div>


</body>
</html>