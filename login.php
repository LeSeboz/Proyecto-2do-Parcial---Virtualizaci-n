<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/darkly/bootstrap.min.css">
<link rel="" href="">
<html lang="en-es">
    <head>
        <meta charset="UTF-8">
	<title>Gamestart | Login</title>
        <header style="text-align: center; margin-top: 1%;"><h2>Gamestart</h2></header>
    </head>
    <body>
        <div class="card border-secondary mb-3" style="max-width: 20rem; margin-left: auto; margin-right: auto; margin-top: 10%;">
            <div class="card-header">Inicio de sesión</div>
            <div class="card-body">
              <p class="card-text" style="text-align: center;">Ingrese sus credenciales de inicio de sesión.</p>
                
                <form action="validar.php" method="post">
                    <div class="card">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="usuario" placeholder="">
                            <label for="usuario">Usuario</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="contraseña" placeholder="">
                            <label for="contraseña">Contraseña</label>
                        </div>
                        <button type="submit" class="btn btn-outline-warning" style="margin-top: 1rem;" >Iniciar Sesión</button>
                    </div>
                </form>
            </div>
        </div>   
    </body>
    <footer style="margin-left:2rem; margin-top:10rem; margin-bottom:auto; font-size:1.5rem;">
	<a href="index.php">Volver a inicio</a>
    </footer>
</html>
