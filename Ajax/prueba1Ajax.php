<!doctype html>
<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body>
<form id="loginform" method="post">
    <div>
        Username:
        <input type="text" name="username" id="username" />
        Password:
        <input type="password" name="password" id="password" />
        <input type="submit" name="loginBtn" id="loginBtn" value="Login" />
    </div>
    <p id="parrafo"> </p>
</form>

<input type="text" id="search" name="" value="">
<script type="text/javascript">
$(document).ready(function() {

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

     $('#search').keyup(function(e){
       let search=$('#search').val();
       console.log(search);
       //Enviando dato al servidor con AJAX
       $.ajax({
           type: "POST",
           url: 'login.php',
           data: 'Hola',
           success: function(response)
           {
             $('#parrafo').html(response);
             console.log(response);
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
</script>
</body>
</html>
