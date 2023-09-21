<?php
$id = $_POST['id'];
$nom = $_POST['nom'];
$ape = $_POST['ape'];

$cnx = mysqli_connect("localhost","root","","dbprueba");
$sql = "UPDATE talumno SET nom='$nom', ape='$ape' WHERE id like $id";
$rta = mysqli_query($cnx, $sql);

if (!rta) {
    echo "No se actualizó";
}
else {
    header("Location: index.php");
}
?>