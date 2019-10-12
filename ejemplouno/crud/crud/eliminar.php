<?php 
include 'conexion.php';

$id = htmlentities($_GET['id']);
//FORMA NORMAL
//$del = $con -> query("DELETE FORM inventario WHERE id = '$id' ");

//FORMA PREPARADA
$del = $con -> prepare("DELETE FROM inventario WHERE id = ? ");
$del->bind_param("i",$id);

if ($del->execute()) {
    header("location:index.php");
}else{
    echo "no elimina";
}

$del->close();
$con->close();

?>