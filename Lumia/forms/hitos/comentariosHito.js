$(document).ready(function(){


/**Funcion para guardar comentario*/
obtenerHitoYComentarios();



  $(document).on('click','.guardar-comentario',function(){
    const postData ={
      idHito:$('#idHito').val(),
      comentario:$('#comentario').val()
    };

    $.ajax({
        type: 'POST',
        url: 'creacionDeComentario.php',
        data: postData,
        success: function(response)
        {
          //$('#parrafo').html("DATO:"+response);
          console.log("DATO:"+response);
          let res = response+"";
          //console.log("RES:"+res);
          if(res=="1"){
            alert("Se ha guardado el Comentario");
          }else{
            alert("No se ha podido guardar el comentario");
          }
          //Segun lo que responda mandar un alert
          //Colocar a qui la funcion para que agregue los hitos
       }
   });
   $('#comentario').val("");
   obtenerHitoYComentarios();
  });


  function obtenerHitoYComentarios(){
    let idHito=$('#idHito').val();
    console.log("HOLA DESDE JS:"+idHito);
    let template="";
    $.ajax({
      type: "GET",
      url: 'listarComentarios.php',
      data: {idHito},
      success: function(response){
      //  console.log(response);
       let hitos = JSON.parse(response);
        hitos.forEach(hito=>{
          template+= `
            <ul class="list-group">
              <li class="list-group-item list-group-item-danger">${hito.idUsuario}</li>
              <li class="list-group-item">Fecha de publicacion:${hito.fecha}</li>
              <li class="list-group-item">${hito.descripcion}</li>
            </ul>
            <br>
          `
        });
        $('#comentarios').html(template);
      }
    });
  }

});
