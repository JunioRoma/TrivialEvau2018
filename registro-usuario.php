<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>

    <body style="background-color:  #138496; color:white; ">
        
        
        
    </body>

    <?php
    $host_db = "localhost";

    $user_db = "root";

    $pass_db = "";

    $db_name = "evau2018";

    $tbl_name = "Usuarios";



    $form_pass = $_POST['userPass'];


    $hash = password_hash($form_pass, PASSWORD_BCRYPT);


    $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);



    if ($conexion->connect_error) {

        die("La conexion falló: " . $conexion->connect_error);
    }



    $buscarUsuario = "SELECT * FROM $tbl_name WHERE nombreUsuario = '$_POST[nombreUsuario]' ";
    $buscarContra = "SELECT * FROM $tbl_name WHERE userPass = '$_POST[userPass]' ";




    $result = $conexion->query($buscarUsuario);



    $count = mysqli_num_rows($result);



    if ($count == 1) {

        echo "<br />" . "El Nombre de Usuario ya a sido tomado." . "<br />";



        echo "<a href='index.php'>Por favor escoga otro Nombre</a>";
    } else {


        $query = "INSERT INTO Usuarios (nombreUsuario, userPass)

           VALUES ('$_POST[nombreUsuario]', '$hash')";



        if ($conexion->query($query) === TRUE) {



            echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";

            echo "<h4>" . "Bienvenido: " . $_POST['nombreUsuario'] . "</h4>" . "\n\n";
        } else {

            echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
        }
    }

    mysqli_close($conexion);
    ?>
    <div style = "position: relative; width: 15%; height: 10%; margin-bottom: 2%; margin-right: 2%;">
        <p><a class = "btn btn-block btn-warning" <a href="index.php">Empieza a jugar</a></a></p>
    </div>
</html>