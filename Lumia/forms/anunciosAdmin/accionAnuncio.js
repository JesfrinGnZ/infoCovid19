$(document).ready(function(){

  console.log("HOLA DESDE JS");

  $('#accionHito').click(function(){
    console.log("AJJAJAJAJ");
    let idAnuncio=$('#idAnuncio').val();
    console.log(idAnuncio);
    $.ajax({
        type: "POST",
        url: 'activarDesactivarAnuncio.php',
        data: {idAnuncio},
        success: function(response){
          console.log(response);
          let resp=response+"";
          if(resp=="0"){
            $('#accionHito').html("ACTIVAR");
          }else {
            $('#accionHito').html("DESACTIVAR");

          }
       }
   });



  });

  $('#borrarHito').click(function(){
    let idAnuncio=$('#idAnuncio').val();
    $.ajax({
        type: "POST",
        url: 'borrarAnuncio.php',
        data: {idAnuncio},
        success: function(response){
          console.log(response);
          let resp=response+"";
       }
   });
   alert("ANUNCIO BORRADO");
   window.location.href = "anuncioIndex.php";

  });


});
