$(document).ready(function(){

  console.log("HOLA DESDE JS");

  $('#accionHito').click(function(){
    console.log("AJJAJAJAJ");
    let idHito=$('#idHito').val();
    $.ajax({
        type: "POST",
        url: 'activarDesactivarHito.php',
        data: {idHito},
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
    let idHito=$('#idHito').val();
    $.ajax({
        type: "POST",
        url: 'borrarHito.php',
        data: {idHito},
        success: function(response){
          console.log(response);
          let resp=response+"";
       }
   });
   alert("HITO BORRADO");
   window.location.href = "hitosIndex.php";

  });


});
