<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilocalendario.css" type="text/css"/>
    
    <title>Document</title>
  </head>
  <body>
    <div class="main">

      <div class="calendario" id="calendario">

        <h1>Aqui ira el calendario</h1>
      </div>
      

      <div class="seleccionar">
        <form  action="javascript:MostrarCalendario()">
            <div>Mes</div>
            <div>
              <select name="mes" id="mes">
                <option value="1">enero</option>
                <option value="2">febrero</option>
                <option value="3">marzo</option>
                <option value="4">abril</option>
                <option value="5">mayo</option>
                <option value="6">junio</option>
                <option value="7">julio</option>
                <option value="8">agosto</option>
                <option value="9">septiembre</option>
                <option value="10">octubre</option>
                <option value="11">noviembre</option>
                <option value="12">diciembre</option>
              </select>
            </div>
    
            <div>Año</div>
            <div>
                <select name="anio" id="anio" onchange="seleccionar();MostrarCalendario() ">
                  <?php
                  for($i=1972; $i<2023; $i++){?>
                    <option value="<?php echo $i?>"><?php echo $i?></option>
                  <?php }
                  ?>
                </select>
            </div>
            <!-- <button id="boton" onclick="">Mostrar calendario</button> -->
            <input type="submit"  value="Mostra calendario xd">

        </form>




      </div>
    </div>

    <script src="../script.js"></script>

  </body>
</html>
