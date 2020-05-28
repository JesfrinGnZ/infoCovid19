$(document).ready(function(){

  console.log("HOLA DESDE JS");

  $(document).on('click','.buscar-usuarios',function(){
    buscarUsuariosFiltro();
  });

/***
Funcion que actua al activar-desactivar un anuncio
***/

$(document).on('click','.usuario-activar',function(){
//console.log($(this));
 let element=$(this)[0].parentElement.parentElement;
 let nombre=$(element).attr('nameUsuario');
 $.post('activacionUsuario.php',{nombre},function(response){
   if(response==1){
     alert("Se ha Activado el usuario");
   }else {
     alert("Se ha desactivado el usuario");
   }
   //Se muestra un mensaje que indica que el anuncio ha sido eliminado
   //alert("Se ha ejecutado la accion para el usuario");
   //Se actualizan los anuncios
   buscarUsuariosFiltro();
 })

 console.log(nombre);
});
/****
FUNCION QUE BUSCSA LOS USUARIOS SEGUN FILTRO
*/
  function buscarUsuariosFiltro(){
    let filtro=$('#seleccionTipoDeAnuncios').val();
    console.log("Filtro:"+filtro);
    let template="";
    $.ajax({
        type: "POST",
        url: 'consultaDeUsuarios.php',
        data: {filtro},
        success: function(response){
          $('#parrafo').html(response);
          console.log(response);
          let usuarios=JSON.parse(response);
          usuarios.forEach(usuario => {


            template+=`
            <tr nameUsuario="${usuario.correoUsuario}">
              <td>${usuario.correoUsuario}</td>
              <td>${usuario.idUsuario}</td>

            `
            if(usuario.verificado==0){
              console.log("NO ESTA VERIFICADO");
              template+=`
              <td>
                  <button class="usuario-activar btn btn-success">
                      ACTIVAR
                  </button>
              </td>

              </tr>
              `
            }else{
              template+=`
              <td>
                  <button class="usuario-activar btn btn-danger">
                      DESACTIVAR
                  </button>
              </td>

              </tr>
              `
            }
          });
          $('#usuarios').html(template);

       }
   });
  }
})
