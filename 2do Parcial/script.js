
function cargarBotones(abrir){

    document.getElementById("botones").innerHTML="";

    var contenido = document.getElementById('botones');

    var ajax = new XMLHttpRequest();
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {

        if (ajax.readyState == 4) {
            contenido.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8")
    ajax.send();


}

function cargarhistorial(){
    document.getElementById("historial").innerHTML = "El historial deberia ir aqui";




}


function cargarContenido(abrir) {

    document.getElementById("principal").innerHTML="";

    var contenido = document.getElementById('principal');

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


function calcularTabla() {


    var opciones = document.getElementsByName("opcion");

    console.log(opciones);

    var opcion;

    for (var i = 0; i < opciones.length; i++) {

        if (opciones[i].checked) {
            opcion = parseInt(opciones[i].value);
        }
    }
    console.log(opcion);

    generarTabla(opcion);

}

function generarTabla(opcion) {

    var numero = parseInt(document.getElementById("numero").value);
    var hasta = parseInt(document.getElementById("hasta").value);

    var resultado = document.getElementById("resultado");

    var html = ``;

    var factorial1 = 1;
    var resultadofactorial = 1;

    console.log("el numero es: " + numero);
        
        for (var i = 1; i <= hasta; i++) {

            switch (opcion) {
                case 1:
                    html += `<div>${i + 1}+${numero}=${(i + 1) + numero}</div>`;
                    break;
                case 2:
                    html += `<div>${i + 1}-${numero}=${(i + 1) - numero}</div>`;
                    break;
                case 3:{
                    //console.log("entro al case 3");


                    console.log("el factorial es: " + resultadofactorial);


                    html += `<div>Factorial de ${numero + i-1} es: ${resultadofactorial}</div>`;


                }break;
            }
        }
    
    resultado.innerHTML = html;
    
}

function MostrarCalendario(){

    var boton = document.getElementById("boton");
    var formulario = document.getElementById("formulario");
    var calendario = document.getElementById("calendario");
    archivo = "../5tapregunta/calendario.php?mes=" + mes + "&anio=" + anio
  
    boton.addEventListener("click", function(event) {
      event.preventDefault();
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          calendario.innerHTML = xhr.responseText;
        }
      };
      xhr.open("GET", archivo, true);
      xhr.send();
    });

}