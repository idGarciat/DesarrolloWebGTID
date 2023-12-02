<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="pregunta2.html">
    
    <title>Document</title>
</head>
<body>

<div class="principal">

    <div class="arriba">

        <div class="izquierda">
            <div style="width: 100%; height: 20%;">
                <img src="imagenes\logousfx.png" alt="No hay" height="100%" width="100%">

            </div>

            <div class="sub-menu" id="sub-menu">
                <div class="botonsubmenu" style="background-color: orange; color: white;">
                    Opciones
                </div>

                <div class="botonsubmenu">
                    Detalle 1
                </div>
                <div class="botonsubmenu">
                    Detalle 2
                </div>
        
            </div>

        </div>

        <div class="derecha">
                <div class="menu" id="menu">
                    <div class="botones">

                        <button class="botonmenu" onclick="Pregunta1btn();">
                            Pregunta 1
                        </button>
                            |
                        <button class="botonmenu" onclick="Pregunta2btn();">
                            Pregunta 2
                        </button>
                            |
                        <button class="botonmenu" onclick="Pregunta3btn()">
                            Pregunta 3
                        </button>
                            |
                        <button class="botonmenu" onclick="Pregunta4btn()">
                            Pregunta 4
                        </button>
                            |
                        <button class="botonmenu" onclick="Pregunta5btn()">
                            Pregunta 5
                        </button>

                    </div>

                </div>
            
                <div class="titulo" id="titulo">
                    Pregunta 1
            
                </div>
            
                <div class="contenido" id="contenido">

                    <div class="card">

                        <div class="header-card">
                            <div class="fontZise1 violeta">SIS 256 Programacion Web</div>
                            <div class="fontZise2 violeta">Examen Final-02-12-2023 7:00 am</div>
                        </div>
                        <img src="imagenes/perfil.jpg" alt="imagen del estudiante" class="superpuesta" width="90px" height="90px">
                        <div class="content-card">
                            <div class="fontZise1 grey-down">Garcia Torricos Ismael Derick</div>
                            <div class="fontZise2 grey-down">Carrera: Ingieneria de sistemas</div>
                            <div class="fontZise3 grey-down enlace">Repositorio Examen:<a href="cdssdsdsdsd" class="grey-down">Examen Final</a></div>
                        </div>
                    </div>
            
                </div>

        </div>
    
    </div>

    <div class="abajo">

        <div class="pie" id="pie">
            Sucre – Semestre 2-2023
    
        </div>

        
    </div>
</div>
    
<script src="script.js"></script>

<script>
    function Pregunta1btn(){
        document.getElementById("titulo").innerHTML = "Pregunta 1";
        location.reload();

        
    }
    function Pregunta2btn(){
        document.getElementById("titulo").innerHTML = "Pregunta 2";   
        cargarContenido2('pregunta2.html');
    }
    function Pregunta3btn(){
        document.getElementById("titulo").innerHTML = "Pregunta 3";    
        cargarContenido('pregunta3.php')
    }
    function Pregunta4btn(){
        document.getElementById("titulo").innerHTML = "Pregunta 4";    
        cargarContenido2('pregunta4.php')
    }
    function Pregunta5btn(){
        document.getElementById("titulo").innerHTML = "Pregunta 5";    
        cargarContenido('pregunta5.html')
    }


    function cambiarColor() {
            var color = document.getElementById('elegircolor').value;
            var idelemento = document.getElementById('seleccionarelemento').value;
            var tipocolor = document.getElementById('tipocolor').value;

            var divseleccionado = document.getElementById(idelemento);

            if (tipocolor === 'backgroundColor') {
                divseleccionado.style.backgroundColor = color;
            } else {
                divseleccionado.style.color = color;
            }

        }
</script>




























<script>
        
        function generarEjercicios() {
    var operacion = document.getElementById('operacion').value;
    var cantidadEjercicios = parseInt(document.getElementById('cantidad').value);
    var ejerciciosDiv = document.getElementById('contenido');
    ejerciciosDiv.innerHTML = '';

    var simboloOperacion = '';

    if (operacion === 'suma') {
        simboloOperacion = '+';
    } else if (operacion === 'resta') {
        simboloOperacion = '-';
    } else if (operacion === 'multiplicacion') {
        simboloOperacion = '*';
    } else if (operacion === 'division') {
        simboloOperacion = '/';
    }

    for (var i = 1; i <= cantidadEjercicios; i++) {
        var a = Math.floor(Math.random() * 10) + 1;
        var b = Math.floor(Math.random() * 10) + 1;
        var resultado = realizarOperacion(a, b, operacion);

        var ejercicio = document.createElement('div');
        ejercicio.innerHTML = a + ' ' + simboloOperacion + ' ' + b + ' = <input type="number" id="resultado' + i + '"> (Resultado: ' + resultado + ')';
        ejerciciosDiv.appendChild(ejercicio);

    }
}


        function realizarOperacion(a, b, operacion) {
            switch (operacion) {
                case 'suma':
                    return a + b;
                case 'resta':
                    return a - b;
                case 'multiplicacion':
                    return a * b;
                case 'division':
                    return a / b;
                default:
                    return 0;
            }
        }

        function calificar() {
            var ejerciciosDiv = document.getElementById('contenido');
            var ejercicios = ejerciciosDiv.getElementsByTagName('div');

            for (var i = 0; i < ejercicios.length; i++) {
                var input = ejercicios[i].getElementsByTagName('input')[0];
                var respuesta = parseInt(input.value);
                var resultado = parseInt(ejercicios[i].innerText.split('Resultado: ')[1]);

                if (respuesta === resultado) {
                    input.style.backgroundColor = 'green';
                } else {
                    input.style.backgroundColor = 'red';
                }
            }
        }

        function cambiarColor() {
            var color = document.getElementById('elegircolor').value;
            var idelemento = document.getElementById('seleccionarelemento').value;
            var tipocolor = document.getElementById('tipocolor').value;

            var divseleccionado = document.getElementById(idelemento);

            if (tipocolor === 'backgroundColor') {
                divseleccionado.style.backgroundColor = color;
            } else {
                divseleccionado.style.color = color;
            }
        }
</script>


</body>
</html>