<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php
    include ("../Conexion/Conexion.php");
    session_start();
     ?>
    <title>Administracion de anuncios</title>

    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->

    <!-- Vendor CSS Files -->
    <link href="https://bootswatch.com/4/lux/bootstrap.min.css" rel="stylesheet">


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a href="#" class="navbar-brand">Anuncios</a>
      <ul class="navbar-nav ml-auto">
        <form class="form-inline my-2 mylg-0">
          <input type="search" id="search" class="form-control mr-sm-2" placeholder="buscarAnuncio">
          <button type="submit" name="button">Buscar</button>
        </form>
      </ul>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-5">
            <div class="card-body">
              <form id="anuncioForm">
                <div class="form-group">
                  <input type="text" id="nombreAnuncio" placeholder="nombre de Anuncio*">
                </div>
                <div class="form-group">
                  <input type="text" id="descripcionAnuncio" placeholder="Descripcion de Anuncio*">
                </div>
                <div class="form-group">
                  <input type="text" id="link" placeholder="link">
                </div>
                <button type="submit" class="btn btn-primary btn-block text-center" name="button">Guardar anuncio</button>
              </form>
            </div>
        </div>
        <div class="col-md-7">
          <div class="table table-bordered table-sm">
            <thead>
              <tr>
                <td>Nombre</td>
                <td>Descripcion</td>
                <td>link</td>
              </tr>
            </thead>
            <tbody id="anuncios"></tbody>

          </div>
        </div>
      </div>
    </div>

<script src="jquery.min.js"></script>
<script src="anuncios.js"></script>

<!--
<div class="containter">
  <div class="row">
    <button type="button" onclick="sendRequest()" name="button">Enviar peticion</button>
    <h1 id="titulo"></h1>
  </div>
</div>
-->
<script>
function sendRequest(){
  //Metodo get para Obtner datos
  //Para mandar datos con Post
  var theObject = new XMLHttpRequest();
  theObject.open('POST','requestAnuncios.php',true);
  theObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
  theObject.onreadystatechange = function(){
  console.log(theObject.responseText);
  document.getElementById('titulo').innerHTML=theObject.responseText;
  }
  theObject.send('usrname=miUsuer');
}
</script>

  </body>
</html>
