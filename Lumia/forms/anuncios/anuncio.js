$(document).ready(function() {

obtenerAnuncios();

    $('#loginform').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'login.php',
            data: 'Hola',
            success: function(response)
            {
              $('#parrafo').html(response);

              /*  var jsonData = JSON.parse(response);
                $('#parrafo').html(response);

                // user is logged in successfully in the back-end
                // let's redirect
                if (jsonData.success == "1")
                {
                  //$('#parrafo').html(response);
                }
                else
                {
                    alert('Invalid Credentials!');
                    //$('#parrafo').html(response);

                }*/
           }
       });
     });

     $('#creacionAnuncio').submit(function(e){
       const postData={
         correo: $('#correo').val(),
         descripcion: $('#descripcionAnuncio').val(),
         nombre: $('#nombreAnuncio').val(),
         link: $('#link').val()
       };
       console.log(postData);

       $.post('creacionAnuncio.php',postData,function(response){
         console.log(response);
         $('#creacionAnuncio').trigger('reset');
         obtenerAnuncios();
       });

       //Limpiando los datos del modal
       //$('#descripcionAnuncio').val('');
       //$('#nombreAnuncio').val('');
       //$('#link').val('');
       //Ocultando el modal y evitando q se recargue la pagina
       $('#modalCreacionAnuncio').modal('hide');
       e.preventDefault();

     });

     function obtenerAnuncios(){
       $.ajax({
           type: "GET",
           url: 'listarAnuncios.php',
           success: function(response){
             let anuncios = JSON.parse(response);
             let template= '';
             anuncios.forEach(anuncio=>{
               template+= `
                <tr nameAnuncio="${anuncio.nombre}">
                  <td>${anuncio.nombre}</td>
                  <td>${anuncio.descripcion}</td>
                  <td>${anuncio.link}</td>
                  <td>${anuncio.verificado}</td>
                  <td>
                      <button class="anuncio-delete btn btn-danger">
                          Delete
                      </button>
                  </td>
                </tr>
               `
             });
             $('#anuncios').html(template);
          }
      });
     }

     $(document).on('click','.anuncio-delete',function(){
     //console.log($(this));
      let element=$(this)[0].parentElement.parentElement;
      let nombre=$(element).attr('nameAnuncio');
      console.log(nombre);
     });

     $('#search').keyup(function(e){
       let search=$('#search').val();
       console.log(search);
       //Enviando dato al servidor con AJAX
       $.ajax({
           type: "POST",
           url: 'busquedaAnuncio.php',
           data: {search},
           success: function(response){
             $('#parrafo').html(response);
             //console.log(response);
             let anuncios=JSON.parse(response);
             anuncios.forEach(anuncio => {
               console.log(anuncio);
             });

          }
      });

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

});
