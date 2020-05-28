$(document).ready(function(){

  //  console.log("HOLA DESDE JS");
  obtenerHitos();


$(document).on('click','.buscar-Hitos',function(){
    obtenerHitos();
});

/**
Funcion que se encargara de cargar los hitos
**/
function obtenerHitos(){
    let  template ='';
    let filtro=$('#seleccionTipoDeHitos').val();
    $.ajax({
      type: "GET",
      url: 'listarHitos.php',
      data: {filtro},
      success: function(response){
        console.log(response);

        let hitos = JSON.parse(response);
        hitos.forEach(hito=>{
          template+= `
          <ul class="list-group">
            <li class="list-group-item active">${hito.idUsuario}</li>
            <li class="list-group-item">${hito.verificado}</li>
            <li class="list-group-item">Fecha de publicacion:${hito.fecha}</li>
            <li class="list-group-item">Fuente:${hito.fuente}    Fecha Suceso:${hito.fechaSuceso}</li>
            <li class="list-group-item">Descripcion: ${hito.descripcion}</li>
            <li class="list-group-item">Comentario creador: ${hito.comentarioCreador}</li>
          </ul>
            <br>
            <form action="verHito.php" method="POST">
              <div class="form-group text-center">
                <input id="idHito" name="idHito" type="hidden" value="${hito.idHito}">
                <input  type="submit" value="Ver Hito" class="btn btn-danger">
              </div>
            </form>
          `
        });
        $('#misHitos').html(template);
      }
    });

    //Otra consulta ajax

}

/**
Accion que se ejecuta al clickear en el formulario '#crearHito'
*/
    $('#crearHito').submit(function(e){
      //Evitando que se recargue la pagina
      const postData ={
        correo:$('#correo').val(),
        fechaSuceso:$('#fechaSuceso').val(),
        detalle:$('#detalle').val(),
        comentario:$('#comentario').val(),
        fuente:$('#fuente').val()
      };
      $('#crearHito').trigger('reset');
      $.ajax({
          type: 'POST',
          url: 'creacionHito.php',
          data: postData,
          success: function(response)
          {
            console.log(response);
            $('#parrafo').html("DATO:"+response);
            //console.log("DATO:"+response);
            let res = response+"";
            //console.log("RES:"+res);
            if(res=="1"){
              alert("Se ha creado el Hito");
            }else{
              alert("No se ha podido crear el hito");
            }
            //Segun lo que responda mandar un alert
            //Colocar a qui la funcion para que agregue los hitos
         }
     });
  //Reseteando los datos del formulario y evitando que se recargue la pagina
      e.preventDefault();
      detalle:$('#detalle').val("");
      comentario:$('#comentario').val("");
      fuente:$('#fuente').val("");
    });



});
