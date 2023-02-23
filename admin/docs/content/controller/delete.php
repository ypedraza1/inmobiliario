<?php

if(isset($_POST['but_delete'])){

  if(isset($_POST['delete'])){
    foreach($_POST['delete'] as $deleteid){

      $deleteUser = "DELETE from propiedades WHERE ID=".$deleteid;
     if (mysqli_query($con, $deleteUser)){
               
      header("Refresh:0;");    
        
    echo '<div class="alert alert-success m-0">
    <strong>Exito</strong> La operación ha sido realizada.
    </div> <meta http-equiv="refresh" content="0;url="tabla.php"> ' ;
    
  }else{
 
    header("Refresh:0; url=delete.php");
  }
      
    }
   

  }

}
 
?>
