<?php include "conexion.php"; ?>
<?php include "delete.php"; ?>



  <form method='post' action=''>
        <input type='submit' value='Delete' name='but_delete'><br><br>
     <?php 
     $query = "SELECT * FROM propiedades";
     $result = mysqli_query($con,$query);
     
     while($row = mysqli_fetch_array($result) ){
        $id = $row['ID'];
        
     ?>
        <!-- Checkbox -->
        <input type='checkbox' name='delete[]' value='<?= $id ?>' ></td>
    <?php
    }
    ?>
 </form>
