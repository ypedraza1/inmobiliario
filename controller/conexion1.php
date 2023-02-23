<?php

function conexion(){
    $usuario='root';
    $servidor='localhost';
    $password ='';
    $database ='proyecto';
    
    try{
        return new PDO('mysql:host='.$servidor.
    ';dbname='.$database.';charset=UTF8', 
    $usuario,$password);
    } catch (PDOException $e){

        exit('Error de conexion con la base de datos'.$e);

    }
} conexion();
?>