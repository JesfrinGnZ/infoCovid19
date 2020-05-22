$(document).ready(function() {

obtenerAnuncios();

    $('#loginform').submit(function(e) {
        e.preventDefault();
        var file_data = $('#imagen').prop('files')[0];
        var form_data = new FormData();
        //Anadiendo los datos
        form_data.append('afile', file_data);
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

/**
Funcion que se ejecuta cuando se llama al submit del formulario de
creacion de Anuncio
**/


/*
Funcion que permite obtener los anuncios creados
*/
     function obtenerAnuncios(){
       let correoUsuario=$('#correoUsuario').val();
       //console.log(search);
       console.log(correoUsuario);
       $.ajax({
           type: "GET",
           url: 'listarAnuncios.php',
           data: {correoUsuario},
           success: function(response){
             let anuncios = JSON.parse(response);
             let template= '';
             anuncios.forEach(anuncio=>{
               template+= `
                <tr nameAnuncio="${anuncio.nombre}">
                  <td>
                  <a href="#" class="anuncio-nombre">${anuncio.nombre}</a>
                  </td>
                  <td>${anuncio.descripcion}</td>
                  <td>${anuncio.link}</td>
                  <td>${anuncio.verificado}</td>
                  <td>
                      <button class="anuncio-imagen btn btn-info">
                          Ver imagen
                      </button>
                  </td>
                  <td>
                      <button class="anuncio-delete btn btn-danger">
                          Borrar
                      </button>
                  </td>

                </tr>
               `
             });
             $('#anuncios').html(template);
          }
      });
     }

     $(document).on('click','.anuncio-imagen',function(){
       console.log("Consultando imagen");
       let element=$(this)[0].parentElement.parentElement;
       let nombre=$(element).attr('nameAnuncio');
       var imagen=$('#imagenDeAnuncio').attr('src');
       //console.log("Ruta:"+imagen);
       //console.log("NombreAnuncio:"+nombre);
       $.post('buscarRutaAnuncio.php',{nombre},function(response){
         //Se muestra un mensaje que indica que el anuncio ha sido eliminado
         //alert("El anuncio ha sido eliminado");
         //alert(response);
         let rutaVariable = response+"";
         console.log("RESPONSE CONCATENADO:"+rutaVariable);
         $('.cambio-imagen').attr('src',rutaVariable);

         //Se actualizan los anuncios
         //obtenerAnuncios();
       })
       $('#modalImagen').modal('show');

     });
/**
Funcion que revisa cauando un elemento del documento con la clase anuncio-delete
ha sido clickeado, en este caso revisa el elemento y obtiene el nombre
**/
     $(document).on('click','.anuncio-delete',function(){
     //console.log($(this));
      let element=$(this)[0].parentElement.parentElement;
      let nombre=$(element).attr('nameAnuncio');
      $.post('eliminarAnuncio.php',{nombre},function(response){
        //Se muestra un mensaje que indica que el anuncio ha sido eliminado
        alert("El anuncio ha sido eliminado");
        //Se actualizan los anuncios
        obtenerAnuncios();
      })

      console.log(nombre);
     });

/**
Funcion que revisa cuando se le da click a el nombre de un anuncio
par su posterior modificacion
**/

  $(document).on('click','.anuncio-nombre',function(){
    console.log('editando');
  });

/***
Funcion que atiende al evento keyUp a la hora de realizar una
busqueda
***/

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
     });



});
