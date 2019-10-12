<?php
include 'conexion.php';
$sel = $con->query("SELECT id, producto, precio, cantidad, categoria FROM inventario ");
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
    <nav class="navbar navbar-light bg-warning" >
        <a href="#" class="navbar-brand" >CRUD</a>
    </nav>

    <div class="container" style="padding-top:30px;" >

        <form action="guardar.php" method="POST">
            <div class="form-group" >
                <input type="text" name="producto" placeholder="Producto" class="form-control" >
            </div>
            <div class="form-group" >
                <input type="number" name="precio" placeholder="Precio" step="0.01" class="form-control" >
            </div>
            <div class="form-group" >
                <input type="numer" name="cantidad" placeholder="Cantidad" class="form-control" >
            </div>
            <div class="form-group" >
                <input type="text" name="categoria" placeholder="Categoria" class="form-control" >
            </div>
            <div class="form-group" >
                <input type="submit" value="Guardar"  class="btn btn-info" >
            </div>
        </form>
       
    </div>

    <div class="container" >
        
        <table class="table" >
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Categoria</th>
            <th>Editar</th>
            <th>Eliminar</th>
            <?php while($f = $sel->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $f['producto'] ?></td>
                <td><?php echo "$". number_format($f['precio'],2) ?></td>
                <td><?php echo $f['cantidad'] ?></td>
                <td><?php echo $f['categoria'] ?></td>
                <td><a href="editar.php?id=<?php echo $f['id'] ?>" class="btn btn-warning" >editar</a></td>
                <td><a href="eliminar.php?id=<?php echo $f['id'] ?>" class="btn btn-danger" >eliminar</a></td>
                
            </tr>
            <?php } ?>  
        </table>

        
    </div>     
    
</body>
</html>