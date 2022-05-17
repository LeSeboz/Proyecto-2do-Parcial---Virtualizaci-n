<?php
    $servername = "localhost";
    $database = "registros";
    $username = "dylan";
    $password = "1234";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
    
    $nombre = $_POST['usuario'];
    $contrasena = $_POST['contraseña'];

    $sql = "INSERT INTO usuarios (nombre,pass) VALUES ('$nombre', '$contrasena')";

    if (mysqli_query($conn, $sql)) {
        ?>
        <?php
        include("signup.php");
        ?>
        <h1 style='text-align: center; font-size: 1rem;'>Registro creado con exito!</h1>
        <?php
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>
