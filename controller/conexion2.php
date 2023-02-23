<?php 
session_start();
class Conexion{
        private $servidor;
        private $user;
        private $password;
        private $database;
    function conectarDB(){
        $servidor = "localhost";
        $user = "root";
        $password = "";
        $database = "proyecto";
        $con = new mysqli($servidor, $user, $password,$database);

        if($con->connect_error){
            echo 'error conectando';
        }else{
            $status=1;
        }
        return $con;
    }       
    function crearUsuario(){
        $con=$this->conectarDB();
        $sql="INSERT INTO USUARIO (Correo)
        VALUES('".$_POST["email"]."');";

        if($con->query($sql) === TRUE){ 
            $_SESSION["Status"]="Se ha creado un usuario en la base de datos";
        header('Location: config.php');
        }else{
            $_SESSION["ErrorDB"]="Error creando un usuario en la base de datos".$con->error;
                header('Location: config.php');
        }
        $con->close();
    }
}
?>