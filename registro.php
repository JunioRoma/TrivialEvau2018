
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <title>REGISTRATE PARA ENTRAR</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <form action="registro-usuario.php" method="post"> 
    </head>
    <body style="background-color:  #138496; color:white; ">


        <div id="cabecera" style="width: 100%; height: 15%">


            <div style="height: 50%; width:25%; float: left; margin: 0.5%">
                <div id="logo"><h2 class="text-center" style="color: white"><a href="index.php"> <img src="imagenes/homer.png"class="img-fluid"></h2></div>
            </div>

            <div style=" overflow: hidden; width: 52.4%;  float: left; margin-top: 5%; margin-left: 0%" >
                <div id="banner"><a class="btn btn-block btn-danger">BIENVENIDOS AL REGISTRO DEL TRIVIAL</a></div>
            </div>

        </div>



        <div class="container" id="principal" style="clear: both;">
            <
            <div class ="row">
                <div class="col-4">
                </div>
                <div class="col-4">
                    <br/><br/>
                    <input name="nombreUsuario"  class="form-control" type="text" placeholder="Usuario" required="required" style="text-align: center">
                    <br/>
                    <input name="userPass" class="form-control" type="password" placeholder="Contraseña" required="required" style="text-align: center">
                    <br/>
                    <button  class="btn btn-primary btn-block" type="submit" name="submit" onclick="logearse();">REGISTRATE</button>
                    <br/><br/>
                </div>
                <div class="col-4">
                </div>
            </div>
        </div>
    </body>

    <script>

        function logearse() {
            $('#cabecera').hide();
            $('#principal').load('index.php');
        }

    </script>

</html>







