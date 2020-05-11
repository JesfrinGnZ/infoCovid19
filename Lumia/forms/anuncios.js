$(document).ready(function(){
  console.log('jQueryEstaFUncionando');
  $('#search').keyup(function(e){
    let search=$('#search').val();
    console.log(search);
    //Enviando dato al servidor con AJAX
    $.ajax({
      url: "task-searchAnuncio.php",
      type: "POST",//Se le envia algo,
      data: {search:search},
      succes: function(response){
        console.log(response);
      }
    })

/*    $.ajax('task-searchAnuncio.php',{
      type:'POST',
      data:{search},
      succes: function(){
        console.log('RESPUESTA');
      },
      error: function () {
        console.log('ERROR');
      }
    });*/
  })
})
