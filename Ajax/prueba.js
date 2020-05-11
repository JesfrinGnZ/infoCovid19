$(document).ready(function(){
  console.log('JQuery esta funcionando');

  $('#entrada').keyup(function(e){
    let variable = $('#entrada').val();
    console.log(variable);

    $.ajax({
      data : {variable},
      url  : 'miphp.php',
      type : 'POST',
      beforeSend : function(){
        $('#texto').html('PROCESANDOOOO');
      },
      succes : function(response){
        $('#texto').html(response);
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
      alert("Status: " + textStatus); alert("Error: " + errorThrown);
      }
    });
  })

  function probandoAjax (){
    $.ajax({
      data : {variable},
      url  : 'miphp.php',
      type : 'POST',
      beforeSend : function(){
        $('#texto').html('PROCESANDOOOO');
      },
      succes : function(response){
        $('#texto').html(response);
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
      alert("Status: " + textStatus); alert("Error: " + errorThrown);
      }
    });
  }
})
