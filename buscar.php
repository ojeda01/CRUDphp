<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="buscar.php" method = "post">
            <input type="text" name = "buscar" id="">
            <input type="submit" value = "Buscar">
            <a href="nuevo.php">Nuevo</a>
        </form>
    </div>
    <div>
        <TAble border = "1">
           
            <TR>
                <td>ID</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Opciones</td>
            </TR>
            <?php
                $buscar = $_POST['buscar'];
                $cnx = mysqli_connect("localhost","root","","dbprueba");
                $sql = "SELECT id, nom, ape FROM talumno where nom or ape like '$buscar' '%' order by id desc";
                $rta = mysqli_query($cnx, $sql);
                while ($mostrar = mysqli_fetch_row($rta)){
            ?>
                <tr>
                    <td><?php echo $mostrar ['0']?></td>
                    <td><?php echo $mostrar ['1']?></td>
                    <td><?php echo $mostrar ['2']?></td>
                    <td>
                        <a href="editar.php?
                        id=<?php echo $mostrar ['0']?> &
                        nom=<?php echo $mostrar ['1']?> &
                        ape=<?php echo $mostrar ['2']?>
                        ">Editar</a>
                        <a href="sp_eliminar.php? id=<?php echo $mostrar ['0']?>">Eliminar</a>
                    </td>
                </tr>
                <?php
                }
                ?>

        </TAble>
        

    </div>

</body>
</html>