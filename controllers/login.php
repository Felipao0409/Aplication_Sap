<?php

    require ("../config/connect.php");

    $ids=$_POST['id_sap'];
    

    if(isset($_POST["id_sap"]) <> '' && $_POST["id_sap"]<> ''){


        $sql = "SELECT * FROM id_sap WHERE id_sap='$ids'";

        $acceso_usuario=$connect->query($sql);

        if($acceso_usuario->num_rows==1)

        header("location: ../views/home.php");

        else{
            ?>

            <script>alert("El Empleado con el ID no existe")
                window.location="../index.php"
            </script>
            <?php
        }
    }


?>