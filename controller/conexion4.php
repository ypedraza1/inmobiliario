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
            if (mysqli_query($con, $sqli)){
               
                echo  '<div class="alert alert-success m-0">
                <strong>Exito</strong> La operación ha sido realizada.
                </div>';
            }else{
                '<div class="alert alert-danger m-0">
                <strong>Error eliminando el usuario:</strong> ';
            }
        } 
        $con = new mysqli($servidor, $user, $password,$database);
        if($con->connect_error){
            
            
        
            $_SESSION["ErrorDB"]="No ha sido posible establecer la conexion con la base de datos";
            header('Location: index.php');
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
             
                echo '<form action="" method="POST"><input type="hidden" name="ID" value='.$value['ID'].'><input type="submit" class="btn btn-sm btn-danger table__item__link" name="submit" value="Delete"> </form>';


         } 
        }
    }
    }
$conexion = new Configuracion();
$conexion->Lista();
?>