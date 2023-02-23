<?php
    class Configuracion{
    function conectarDB(){
        $servidor = "localhost";
        $user = "root";
        $password = "";
        $database = "proyecto";
        $con = new mysqli($servidor, $user, $password,$database);
        if(isset($_REQUEST['submit'])){
            $sqli = "DELETE FROM propiedades WHERE ID =  {$_REQUEST['ID']}";
            header("Refresh:0; url=index.php");
        } 
        $con = new mysqli($servidor, $user, $password,$database);
        if($con->connect_error){
            
            
        
            $_SESSION["ErrorDB"]="No ha sido posible establecer la conexion con la base de datos";
        
        }else{
            $status=1;
        }
        return $con;
       
    }
  
    function Lista(){
        
        $enlace = $this->conectarDB();
        $consulta = "SELECT * FROM propiedades ORDER by ID ASC ";
       
          if ($resultado = mysqli_query($enlace, $consulta)and($value = mysqli_fetch_assoc($resultado))) { 
            foreach ($resultado as $value){ 
             
              


         } 
        }
    }
    }
$conexion = new Configuracion();
$conexion->Lista();
?>