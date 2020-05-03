<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Login</title>
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style >
    body {
      margin: 0;
      padding: 0;
      background-color: #ffffff;
      height: 100vh;
    }
    #login .container #login-row #login-column #login-box {
      margin-top: 80px;
      max-width: 600px;
      height: 460px;
      border: 3px solid #00aae4;
      background-color: #ffffff;
    }
    #login .container #login-row #login-column #login-box #login-form {
      padding: 20px;
    }
    #login .container #login-row #login-column #login-box #login-form #register-link {
      margin-top: -85px;
    }
    </style>
  </head>
  <body>
    <div id="login">
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="accionRegistro.php" method="post">
                        <h3 class="text-center text-info">Registrarse</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Correo electronico:</label><br>
                            <input type="email" name="correo" id="correo" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="username" class="text-info">Usuario:</label><br>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Contraseña:</label><br>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label for="userType" class="text-info">Tipo de usuario:</label><br>
                            <select name="tipoDeUsuario" id="tipoDeUsuario" class="form-control" required>
                              <option value="normal">Usuario Normal</option>
                              <option value="administrador">Usuario Administrador</option>
                            </select>
                        </div>

                        <div class="form-group text-center">
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="Registrarme">
                        </div>
                    </form>
                    <form class="" action="../indexCovid.php" method="post">
                      <div id="register-link" class="text-center  ">
                        <input class="btn btn-link" type="submit" value="Volver a pagina principal" />
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  </body>
</html>
