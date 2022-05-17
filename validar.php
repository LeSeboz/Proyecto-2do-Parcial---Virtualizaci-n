<?php
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contraseña'];

    session_start();
    $_SESSION['usuario']=$usuario;

    $conn=mysqli_connect("localhost","dylan","1234","registros");

    $consulta="SELECT * FROM usuarios where nombre='$usuario' and pass='$contrasena'";
    $resultado=mysqli_query($conn,$consulta);

    $filas=mysqli_num_rows($resultado);
	    

    if($filas){
        header("location:ftp.php");
    }
    else{
        ?>
        <?php
        include("login.php");
        ?>
        <h1 style='text-align: center; font-size: 1rem;'>El usuario o contraseña son incorrectos</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conn);
