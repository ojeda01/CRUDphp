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

    <!--Etiquetas DIV para dividir el código-->
    <div>
        <TAble border = "1"> <!--El table indica que se creará una tabla-->
           
            <TR> <!--TR indica el esqueleto de la tabla-->
                <td>ID</td> <!--Apartado para indicar cada columna de la tabla con "td"-->
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Opciones</td>
            </TR>

            <!--Conectividad PHP-->
            <?php
                $cnx = mysqli_connect("localhost","root","","dbprueba"); // Variable "cnx" que indica la conexión hacia la base de datos.
                $sql = "SELECT id, nom, ape FROM talumno order by id desc"; // Consulta MySQL para traer los apartados tal y como están escritos en la base de datos. Y se indica tabla
                $rta = mysqli_query($cnx, $sql); // variable que almacena la función de mysql query de php hacia cnx y sql
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