$(document).ready(function(){


/**Funcion para guardar comentario*/

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
    console.log("HOLA DESDE JS");

  }

});
