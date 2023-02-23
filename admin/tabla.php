



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">
	<meta name="author" content="">
	<title>FooTable - A jQuery Responsive Table</title>

	
	
    <?php include '../modules/iconos.php';
    ?>

	<style>
    <?php include './css/bootstrap.min.css';
    ?>
  </style>
	

	
	<style>
    <?php include './compiled/footable.bootstrap.min.css';
    ?>
  </style>

</head>

<body>

<!--  ////////////////////////-->

<?php
    class Configuracion{
    function conectarDB(){
      $servidor = "localhost";
      $user = "root";
      $password = "";
      $database = "proyecto";
      $con = new mysqli($servidor, $user, $password,$database);
   
     
      if(isset($_POST['but_delete'])){
      
        if(isset($_POST['delete'])){
          foreach($_POST['delete'] as $deleteid){
      
            $deleteUser = "DELETE from propiedades WHERE ID=".$deleteid;
           
            if (mysqli_query($con, $deleteUser)){
        
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
      window.top.location.reload();
      window.top.location.reload();
  }
}
     </SCRIPT>");
     echo ("<SCRIPT LANGUAGE='JavaScript'>
     document.getElementById('section').contentWindow.location.reload();

          </SCRIPT>");
    
       echo '<meta http-equiv="refresh" content="0;url=tabla.php"> ';
       echo '<meta http-equiv="refresh" content="0;url=tabla.php"> ';
       echo '<meta http-equiv="refresh" content="0;url=tabla.php"> ';
       echo '<meta http-equiv="refresh" content="0;url=tabla.php"> ';
              
            }else{
              header( "refresh:0" );
              
           
            }
          }
        }
       
      }
     
   
      if(isset($_REQUEST['submit'])){


        $sqli = "DELETE FROM propiedades WHERE ID =  {$_REQUEST['ID']}";
            if (mysqli_query($con, $sqli)){
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
                    window.top.location.reload();
                    window.top.location.reload();
                    window.top.location.reload();
                 
                }
              }
                   </SCRIPT>");
                   echo ("<SCRIPT LANGUAGE='JavaScript'>
                   document.getElementById('section').contentWindow.location.reload();
              
                        </SCRIPT>");
                        echo '<meta http-equiv="refresh" content="0;url=tabla.php"> ';
                        echo '<meta http-equiv="refresh" content="0;url=tabla.php"> ';
              
            }else{
             
              header( "refresh:0" );
      ;
              
            }
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


<div  class="container" >
  <br>
  <form method='POST' action=''>
	<table class="table table-striped" id='table'>
  <input type='submit' id="submit_prog"  value='Delete' name='but_delete'  onclick='return deleletconfig(); ' > <br>

  <input type="checkbox" name="delete[]" />Todo
	</table>

    </form>

    
</div> 
<iframe id="section" src="docs/content/content.php" style="position: absolute;width:0;height:0;border:0;"title="hola2" > </iframe> 

<script src="./js/jquery.min.js"></script>

<script>
  
</script>
<script src="./compiled/footable.js"></script>

<script>
      $(document).ready(function() {
    
    var $submit = $('#submit_prog').hide(),
        $cbs = $('input[name="delete[]"]').click(function() {
            $submit.toggle( $cbs.is(':checked') );
        });

});
</script>


<script>$('.dropdown-toggle').dropdown();</script>



<script> 

	jQuery(function($){
		$('.table').footable({
			"paging": {
				"enabled": true
			},
			"filtering": {
				"enabled": true
			},
			"sorting": {
				"enabled": true
			},
			"columns": $.get("docs/content/columns.json"),
			
			"rows": $.get("docs/content/rows.json"),
		
		});
	});
</script>
<script>
  $('#select-all').click(function(event) {   
    if(this.checked) {
        // Iterate each checkbox
        $(':checkbox').each(function() {
            this.checked = true;                        
        });
    } else {
        $(':checkbox').each(function() {
            this.checked = false;                       
        });
    }
}); 
</script>

<style>/* Follow me for more pens like this! */

/* Tweak to change the look and feel */
:root {
  --button-background: dodgerblue;
  --button-color: white;
  
  --dropdown-highlight: dodgerblue;
  --dropdown-width: 160px;
  --dropdown-background: white;
  --dropdown-color: black;
}

/* Center the planet */
body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 10vh;
  background-color: #222229;
}

/* Boring button styles */
a.button {
  /* Frame */
  display: inline-block;
  
  
  box-sizing: border-box;
  
  /* Style */
  border: none;
  background: transparent;
  color: var(--button-color);
  font-size: 24px;
  cursor: pointer;
}

a.button:active {
  filter: brightness(75%);
}
a.button:hover {
  color: rgb(0, 255, 81);
}

/* Dropdown styles */
.dropdown {
  position: relative;
  padding: 0;
  margin-right: 1em;
  
  border: none;
}

.dropdown summary {
  list-style: none;
  list-style-type: none;
}

.dropdown > summary::-webkit-details-marker {
  display: none;
}

.dropdown summary:focus {
  outline: none;
}

.dropdown summary:focus a.button {
  border: 2px solid white;
}

.dropdown summary:focus {
  outline: none;
}

.dropdown ul {
  position: absolute;
  margin: 20px 0 0 0;
  padding: 20px 0;
  width: var(--dropdown-width);
  left: 50%;
  margin-left: calc((var(--dropdown-width) / 2)  * -1);
  box-sizing: border-box;
  z-index: 2;
  
  background: var(--dropdown-background);
  border-radius: 6px;
  list-style: none;
}

.dropdown ul li {
  padding: 0;
  margin: 0;
}

.dropdown ul li a:link, .dropdown ul li a:visited {
  display: inline-block;
  padding: 10px 0.8rem;
  width: 100%;
  box-sizing: border-box;
  
  color: var(--dropdown-color);
  text-decoration: none;
  
}

.dropdown ul li a:hover {
  background-color: var(--dropdown-highlight);
  color: var(--dropdown-background);
}

/* Dropdown triangle */
.dropdown ul::before {
  content: ' ';
  position: absolute;
  width: 0;
  height: 0;
  top: -10px;
  left: 50%;
  margin-left: -10px;
  border-style: solid;
  border-width: 0 10px 10px 10px;
  border-color: transparent transparent var(--dropdown-background) transparent;
}


/* Close the dropdown with outside clicks */
.dropdown > summary::before {
  display: none;
}

.dropdown[open] > summary::before {
    content: ' ';
    display: block;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    z-index: 1;
}
</style>


<style>
 



.dropdown-menu{
    display: none;   /*hide the menu*/
  
margin-left: -500px;
}

.open .dropdown-menu{
    display: block;  /*show the menu when its parent has class "open"*/
}

a.nav-item{
    display: inline-block;
    padding: 10px;
    text-decoration: none;
    cursor: pointer;
}

.dropdown-menu{
    background: white;
    margin-left: -500px;
}



</style>

<script>$(document).ready(function(){
    $("[data-toggle='dropdown']").click(function(e) {   
        $(this).parents(".dropdown").toggleClass("open");  /*when you click on an element with attr data-toggle='dropdown' it toggle the class "open" on its parent with class "dropdown"*/
        e.stopPropagation();
    });
 
});</script>



<script>
</script>
<script>
      
      
      function deleletconfig(){
      
      var del=confirm('Porfavor Confirme que desea eliminar este registro ');
      if (del==true){
         alert('Ok, Supresión exitosaaaaa')
         
      }else{
          alert('Supresión Cancelada')
      }
      return del;
      }
      </script>
   

</body>
</html>
</section>

