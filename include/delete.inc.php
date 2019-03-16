<?php 

require_once 'dbconnect.inc.php';

if($_POST) {
   $id = $_POST['id'];

   $sql = "DELETE FROM bookinfo WHERE bookid = {$id}";
   if($conn->query($sql) === TRUE) {
       echo "<p>Successfully deleted!!</p>";
      
   } else {
       echo "Error updating record : " . $conn->error;
   }

   $conn->close();
}

?>

