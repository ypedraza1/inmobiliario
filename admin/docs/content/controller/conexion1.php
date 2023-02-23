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
    
    $sql = "DELETE FROM customers WHERE id='".$_GET['id']."' ";

    if ($conn->query($sql) === TRUE) {
       
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();


    
} conexion();
?>