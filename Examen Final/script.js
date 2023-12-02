

function cargarContenido(abrir) {

    document.getElementById("contenido").innerHTML = "";

    var contenido = document.getElementById('contenido');

    var ajax = new XMLHttpRequest();
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {

        if (ajax.readyState == 4) {
            contenido.innerHTML = ajax.responseText;
            contenido.style = ajax.responseType;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8")
    ajax.send();


}

function cargarContenido2(abrir) {

    document.getElementById("sub-menu").innerHTML = "";
    document.getElementById("contenido").innerHTML = "";

    var contenido2 = document.getElementById('sub-menu');

    var ajax = new XMLHttpRequest();
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {

        if (ajax.readyState == 4) {
            contenido2.innerHTML = ajax.responseText;
            contenido2.style = ajax.responseType;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8")
    ajax.send();
}

function cargartabla(){
    console.log("cargando tabla");

    var contenido = document.getElementById('contenido');

    console.log(contenido);
    archivo = "tabla.php";

    console.log(archivo);



    var ajax = new XMLHttpRequest();
    ajax.open("get", archivo, true);
    ajax.onreadystatechange = function () {

        if (ajax.readyState == 4) {
            contenido.innerHTML = ajax.responseText;
            contenido.style = ajax.responseType;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8")
    ajax.send();


}

function listar(){
    function listar() {
        var contenido = document.getElementById('contenido');
        var archivo = "pregunta4.php";
    
        var ajax = new XMLHttpRequest();
        ajax.open("get", archivo, true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                contenido.innerHTML = ajax.responseText;
                contenido.style = ajax.responseType;
            }
        }
        ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8")
        ajax.send();
    }

}

function insertar(){

}













































function generarEjercicios() {
    var operacion = document.getElementById('operacion').value;
    var cantidadEjercicios = parseInt(document.getElementById('cantidad').value);
    var ejerciciosDiv = document.getElementById('ejercicios');
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
    var ejerciciosDiv = document.getElementById('ejercicios');
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
