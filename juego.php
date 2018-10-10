
<?php
session_start();

include ('misFunciones.php');
//Capturo los valores de los parametros q se me han sido pasados desde app.php
$vidas = ($_POST['vidas']);
$correctas = ($_POST['correctas']);
$tema = ($_POST['tema']);

$mysqli = conectaBBDD();
$resultadoQuery = $mysqli->query("SELECT * FROM preguntas WHERE tema = '$tema' ");
$numPreguntas = $resultadoQuery->num_rows;

//declaro un array en php para gurdar el resultado de la query
$listaPreguntas = array();

//cargo todas las filas del resultado de la query en el array
for ($i = 0; $i < $numPreguntas; $i++) {
//Leo una fila del resultado de la query
    $registro = $resultadoQuery->fetch_array();
    $listaPreguntas[$i][0] = $registro['numero'];
    $listaPreguntas[$i][1] = $registro['enunciado'];
    $listaPreguntas[$i][2] = $registro['r1'];
    $listaPreguntas[$i][3] = $registro['r2'];
    $listaPreguntas[$i][4] = $registro['r3'];
    $listaPreguntas[$i][5] = $registro['r4'];
    $listaPreguntas[$i][6] = $registro['correcta'];
}
$preguntaActual = rand(0, $numPreguntas - 1);
?>

<div>
    <p><a  class="btn btn-block btn-dark disabled" >Demuestra que estás listo para la EVAU</a></p>
    <p><a id="sigue1" class="btn btn-block disabled"> <?php echo $_SESSION['nombreUsuario']?> </a></p>
    <p><a  class="btn btn-block btn-warning" onclick="volver();">Volver al Menú</a></p>
    <p><a id="sigue1" class="btn btn-block btn-primary"> <?php echo $tema; ?> </a></p>


    <p><a  id="encunciado" class="btn btn-block btn-info" ></a></p>

    <p><a id="r1" class="btn btn-block btn-success" ></a></p>
    <p><a id="r2" class="btn btn-block btn-success" ></a></p>
    <p><a id="r3" class="btn btn-block btn-success" ></a></p>
    <p><a id="r4" class="btn btn-block btn-success" ></a></p>



</div>


<script>

    function volver() {

        $('#principal').load('app.php');


    }

    var listaPreguntas = <?php echo json_encode($listaPreguntas); ?>;

    var numeroPregunta = Math.floor(Math.random() * listaPreguntas.length);
    sigue();



    function sigue() {
       
        numeroPregunta = Math.floor(Math.random() * listaPreguntas.length);
        $('#enunciado').text(listaPreguntas[1]);
        $('#r1').text(listaPreguntas[2]).click(function () {
            sigue();
        });
        $('#r2').text(listaPreguntas[3]).click(function () {
            sigue();
        });
        $('#r3').text(listaPreguntas[4]).click(function () {
            sigue();
        });
        $('#r4').text(listaPreguntas[5]).click(function () {
            sigue();
        });

    }


</script>


/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

