<?php

date_default_timezone_set('America/Bogota');

    try{

        $connect = new mysqli("localhost","root","","sap_it");

    }catch(Exception $e){

        echo "conexion Fallida: " . $e->getMessage();
    }



?>