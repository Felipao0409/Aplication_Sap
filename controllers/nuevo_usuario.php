<?php

    require ("../config/connect.php");


    $name = $_POST["nombre"];
    $id_sap = $_POST["id_sap"];
    $city = $_POST["ciudad"];
    $email = $_POST["correo"];
    

    
    $registro="INSERT INTO usuario (nombre, id_sap, ciudad, correo) VALUES ('$name','$id_sap','$city','$email')";

    $resultado=mysqli_query($connect, $registro);

    if ($resultado=false) 

    ?>

    <script>alert("El Empleado ha sido registrado exitosamente")
                window.location="../index.php"
            </script>

<script>
    setTimeout(()=>{ window.location.href='http://localhost:3000/index.php'}, 2000);
</script>