<?php

if(isset($_POST['but_delete'])){

  if(isset($_POST['delete'])){
    foreach($_POST['delete'] as $deleteid){

      $deleteUser = "DELETE from propiedades WHERE ID=".$deleteid;
      mysqli_query($con,$deleteUser);

      if (mysqli_query($con, $deleteUser)){
        echo '<meta http-equiv="refresh" content="0;url=content.php">';
   
echo ("<SCRIPT LANGUAGE='JavaScript'>
window.onload = function() {
if(!window.location.hash) {
window.location = window.location + '#loaded';
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.location.reload();
window.top.location.reload();window.top.location.reload();

}
}
</SCRIPT>");
echo '<meta http-equiv="refresh" content="0;url=tabla.php"> ';
            
    }else{
      header( "refresh:0" );
     
    
  
      
  }
 
} } }
 
?>
