<?php 
$mysqli = new mysqli('localhost', 'root', '', 'proyecto');

if($mysqli->connect_errno != 0){
   echo $mysqli->connect_error;

}   

  
if(isset($_POST['but_delete'])){
      
   if(isset($_POST['delete'])){
     foreach($_POST['delete'] as $deleteid){
 
       $deleteUser = "DELETE from propiedades WHERE ID=".$deleteid;
       mysqli_query($con,$deleteUser);
     }
   }
  
 }


?>