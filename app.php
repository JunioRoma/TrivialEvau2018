<div id ="menu" style="color:white;">
    <p></p>
    <p><a  onclick="muestraModalPrueba()" class="btn btn-block btn-dark " >Demuestra que estás listo para la EVAU</a></p>
    <p><a id="sigue1" class="btn btn-block btn-warning" onclick="sigue('1')">HISTORIA</a></p>
    <p><a id="sigue2" class="btn btn-block btn-success" onclick="sigue('2')">ECONOMIA</a></p>
    <p><a id="sigue3" class="btn btn-block btn-secondary" onclick="sigue('3')">FILOSOFIA</a></p>
    <p><a id="sigue4" class="btn btn-block btn-danger" onclick="sigue('4')">LENGUA Y LITERATURA</a></p>
    <p><a id="sigue5" class="btn btn-block btn-info" onclick="sigue('5')">INGLÉS</a></p>
</div>

<script>
    var _vidas = 3;
    function sigue(_tema) {
        switch (_tema) {
            case '1':
                $("#menu").load("juego.php", {vidas: _vidas, correctas: 0, tema: "Historia"});
                break;
            case '2':
                $("#menu").load("juego.php", {vidas: _vidas, correctas: 0, tema: "Economia"});
                break;
            case '3':
                $("#menu").load("juego.php", {vidas: _vidas, correctas: 0, tema: "Filosofia"});
                break;
            case '4':
                $("#menu").load("juego.php", {vidas: _vidas, correctas: 0, tema: "Lengua"});
                break;
            case '5':
                $("#menu").load("juego.php", {vidas: _vidas, correctas: 0, tema: "Ingles"});
                break;
        }


//        function muestraModalPrueba(){
//        $('#modalPrueba').modal('show');
//    }
    }
    detieneTemporizador();
    function detieneTemporizador() {
        clearInterval(progreso);
    }

</script>

<!--
<div id="modalPrueba" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ejemplo Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>JE PAISA SUR MANO TE COMPRO GASOFA MA MI BUGA</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">SALVAR</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
            </div>
        </div>
    </div>
</div>-->


<?php





