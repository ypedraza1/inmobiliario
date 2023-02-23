
<?php 

include './controller/conexion.php';

?>
<?php 

include './controller/delete.php';

?>

<?php 

include './controller/conexion2.php';
include './controller/conexion4.php';






	$sql = " SELECT * FROM propiedades  ";
	$results = $mysqli->query($sql);
  

  
	while($product = $results->fetch_assoc()){
		$products[] = $product ;
    header( "refresh:3" );
		$data = file_get_contents('rows.json');
  
	
foreach ($products as $key => $value) {
	if ($value['ID']) {
        $products[$key]['Acciones'] = "
       
        <div class='row'>
        <div class='col-lg-2'>
        <form method='get' action='www.google.com' class='control' >
        <button type='submit' class='transparent '><span class='bi bi-pencil-square text-white '  ></span></button>
      </form>  
        </div>
        <div class='col-lg-3'>
        <form action='' method='POST' class='text-white' >
        
           
        <input type='hidden' id='refresh'   name='ID' value='".$value['ID']."'  onclick='return deleletconfig();'>  <button  id='first_btn' type='submit'  style='border: none transparent;
        outline: none;' class='bi bi-trash   transparent  table__item__link' name='submit' onclick='return deleletconfig();'  > 
      
      
        </form> 
        
        </div>
        
        <div class='col-lg-3'>
       <details class='dropdown'>
          <summary role='button'>
            <a class='button'><i class='bi bi-three-dots'></i></a>
          </summary>
          <ul>
            <li><a href='#'><i class='bi bi-file-earmark-check'></i>Ficha de la Propiedad</a></li>
            <li><a href='#'><i class='bi bi-bank2'></i>Finanzas</a></li>
            <li><a href='#'><i class='bi bi-graph-up-arrow'></i>Balance</a></li>
            <li><a href='#'><i class='bi bi-files'></i>Duplicar</a></li>
            <li><a href='#'><i class='bi bi-archive-fill'></i>Archivar</a></li>
            
        </ul>
      </details>
      
      
      </div>
      
        </div>
      
      </div>
      
      </div>
         
        </div>
        
                        
      <script>
      
      
      function deleletconfig(){
      
      var del=confirm('Porfavor Confirme que desea eliminar este registro ');
      if (del==true){
         alert('Ok, Supresión exitosaaaaa')
         window.location.reload();
         window.location.reload();
         window.location.reload();
         window.location.reload();
         window.location.reload();
      }else{
          alert('Supresión Cancelada')
      }
      return del;
      }
      </script> "
		
		;
	
    }


}


	
		
	
	

	}

	
			
	highlight_string("<?php " . var_export(($products)	, true)   ."  ;?>");
	
	$encoded_data = json_encode($products, JSON_PRETTY_PRINT) ;
	
    file_put_contents('rows.json', $encoded_data);


	


	?>


<form method='post' action=''>
     <?php 
     $query = "SELECT * FROM propiedades";
     $result = mysqli_query($con,$query);
     
     while($row = mysqli_fetch_array($result) ){
       
      $id = $row['ID'];
       
      $value=$id;
 
     ?>

     
     <?php 
     
foreach ($products as $key => $value) {
	if ($id = $row['ID']) {
        $products[$key]['Un'] = " 
    
        <input type='checkbox' name='delete[]' value='".$value['ID']."' ></td>
     
        
        "
		
		;
	
    }


}
		
     
     ?>
   
        
    <?php
    }
    	
			

	
	$encoded_data = json_encode($products, JSON_PRETTY_PRINT) ;
	
    file_put_contents('rows.json', $encoded_data);


    ?>
 </form>
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

    }else{
      header( "refresh:0" );
     
    
  
      
  }
 
} } }
 
?>
