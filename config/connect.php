<?php

    try{

        $connect = new mysqli("localhost","root","","sap_it");

    }catch(Exception $e){

        echo "conexion Fallida: " . $e->getMessage();
    }



?>