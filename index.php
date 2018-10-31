<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <title>PRUEBA DE PHP CON BOOTSTRAP</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/CSS.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-image: url('imagenes/fondo.jpg'); background-repeat: no-repeat; background-size: 100%; color:white; ">

        <div id="papa" >
            <div id = "cabecera" class="row"  style="margin: 0 auto; margin-top: 2%; border: 2px solid yellow; background-image: url('imagenes/banner.jpg');
                 background-size: cover;">
                <div class="col-10" style="display: block"> 
                    <h2 class="text-center" style="color: white"><a href="index.php"> <img src="imagenes/homer.png"class="img-fluid"></a>BIENVENIDOS AL TRIVIAL DE LA EVAU2018</h2>
                </div>
                <div id="registro" class="col-2" style="display: block; margin-top: 2.8%; margin-left: 0px" alt="Responsive image" onclick="registrate();">
                    <a  class="btn btn-block btn-outline-warning"><img src="imagenes/add.png"></a></div>
            </div>
        </div>

        <div class="container" id="principal" style="clear: both; background-image: url('imagenes/matrix.gif'); border: solid 2px yellow;">
            <br>
            <br>
            <br>
            <div class ="row">
                <div class="col-12">
                    <h2 class="text-center" style="color:white;">Bienvenidos</h2> 
                </div>
            </div>
            <div class ="row">
                <div class="col-4">
                </div>
                <div class="col-4">
                    <br/><br/>
                    <input id ="cajaNombre" class="form-control" type="text" placeholder="Usuario" required="required" style="text-align: center">
                    <br/>
                    <input id ="cajaPassword" class="form-control" type="password" placeholder="Contraseña" required="required" style="text-align: center">
                    <br/>
                    <button id="boton1" class="btn btn-warning btn-block" type="submit">Iniciar Sesión</button>
                    <br/><br/>
                </div>
                <div class="col-4">
                </div>
            </div>
        </div>

    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <script>
                    // document ready se ejecuta cuando toda la página se ha cargado correctamente
                    $(document).ready(function () {
                        //$('#cajaNombre').hide();

//                            $('#login').hide();

                    });

                    $.validate({
                        lang: 'es'
                    });

                    //Mostrar login pulsando a homer
//                        if ($('#botonLogin').click(function)) {
//                            $('#login').show();
//                        }


                    function registrate() {
                        $('#cabecera').hide();
                        $('#principal').load('registro.php');
                    }



//        $('#registro').click(function () {
//            $('#papa').hide();
//            $('#papa').load("registro.php");
//        });


                    $('#boton1').click(function () {
                        //leo el contenido de las cajas de nombre y contraseña
                        var _cajaNombre = $('#cajaNombre').val();
                        var _cajaPassword = $('#cajaPassword').val();

                        $('#principal').load("login.php", {
                            cajaNombre: _cajaNombre,
                            cajaPassword: _cajaPassword
                        });
                    });
    </script>
</html>
