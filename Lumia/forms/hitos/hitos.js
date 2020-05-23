$(document).ready(function(){

  //  console.log("HOLA DESDE JS");
  obtenerHitos();

/**
Funcion que se encargara de cargar los hitos
**/

function obtenerHitos(){
    let  template ='';
    template+=`<h1>ESTE ES UN TITULO<h1>
    <a>CLICKEAME<a>`;
    $('#prueba').html(template);

    console.log("OBTENIENDO LOS ANUNCIOS");
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
        fuente:$('#fuente').val(),
      };
      $('#crearHito').trigger('reset');
      $.ajax({
          type: 'POST',
          url: 'creacionHito.php',
          data: postData,
          success: function(response)
          {
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
