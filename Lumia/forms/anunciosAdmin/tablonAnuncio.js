$(document).ready(function(){
  buscarAnuncios();

/***Para buscar aprobados y no aprobados***/
$(document).on('click','.buscar-anuncios',function(){
  buscarAnuncios();
});

/*****Funcion para buscar anuncio por filtro***/
function buscarAnuncios(){
  let  template ='';
  let filtro=$('#seleccionTipoDeAnuncios').val();
  console.log(filtro);
  $.ajax({
    type: "GET",
    url: 'listarAnunciosTablon.php',
    data: {filtro},
    success: function(response){
      console.log(response);

      let anuncios = JSON.parse(response);
      anuncios.forEach(anuncio=>{
        template+= `
          <ul class="list-group">
            <li class="list-group-item list-group-item-success">${anuncio.nombreDeEmpresa}:${anuncio.nombre}</li>
            <li class="list-group-item">Descripcion:${anuncio.descripcion}</li>
            <li class="list-group-item">Direccion:${anuncio.direccion}</li>

          </ul>
          <br>
          <div class="text-center">
          <img src="../anuncios/${anuncio.direccionImagen}" id="imagenDeAnuncio" class="cambio-imagen"width="800" height="453">
          </div>
          <br>

          <form action="verificacionAnuncio.php" method="POST">
            <div class="form-group text-center">
              <input id="idHito" name="idAnuncio" type="hidden" value="${anuncio.idAnuncio}">
              <input  type="submit" value="Ver anuncio" class="btn btn-danger">
            </div>
          </form>
        `
      });
      $('#anunciosBuscados').html(template);
    }
  });


}


/****Para buscar por palabra clave******/

$('#buscarAnuncioTexto').keyup(function(e){
  buscarAnunciosPorPalabraClave();
});

/****FUncion para buscar anuncio por palabra clave*****/
function buscarAnunciosPorPalabraClave(){
  let search=$('#buscarAnuncioTexto').val();
  console.log(search);
  let template="";
  $.ajax({
      type: "POST",
      url: 'busquedaAnuncio.php',
      data: {search},
      success: function(response){
        $('#parrafo').html(response);
        console.log(response);
        let anuncios=JSON.parse(response);
        anuncios.forEach(anuncio => {
          console.log(anuncio);
          template+= `
            <ul class="list-group">
              <li class="list-group-item list-group-item-success">${anuncio.nombreDeEmpresa}:${anuncio.nombre}</li>
              <li class="list-group-item">Descripcion:${anuncio.descripcion}</li>
              <li class="list-group-item">Direccion:${anuncio.direccion}</li>

            </ul>
            <br>
            <div class="text-center">
            <img src="../anuncios/${anuncio.direccionImagen}" id="imagenDeAnuncio" class="cambio-imagen"width="800" height="453">
            </div>
            <br>
            <form action="verificacionAnuncio.php" method="POST">
              <div class="form-group text-center">
                <input id="idHito" name="idAnuncio" type="hidden" value="${anuncio.idAnuncio}">
                <input  type="submit" value="Ver Anuncio" class="btn btn-danger">
              </div>
            </form>

          `
        })
        $('#anunciosBuscados').html(template);
     }
 });

}

});
