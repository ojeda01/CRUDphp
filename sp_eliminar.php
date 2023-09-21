<?php
$id = $_GET['id'];


$cnx = mysqli_connect("localhost","root","","dbprueba");
$sql = "DELETE FROM talumno WHERE id like $id";
$rta = mysqli_query($cnx, $sql);

if (!rta) {
    echo "No se eliminó";
}
else {
    header("Location: index.php");
}
?>