<?php 

require_once 'dbconnect.inc.php';
 

if($_POST) {
   $sub = $_POST['sub'];
   $title = $_POST['title'];
   $author = $_POST['author'];
   $publisher = $_POST['publisher'];
   $copyright = $_POST['copyright'];
   $edition = $_POST['edition'];
   $isbn = $_POST['ISBN'];
   $lib = $_POST['library'];
  

   $id = $_POST['id'];

   $sql = "UPDATE bookinfo SET sub = '$sub', title = '$title', author = '$author',publish = '$publisher',  copyright='$copyright',edition   = '$edition',library = '$lib'   WHERE id = {$id}";
   if($conn->query($sql) === TRUE) {
       echo "<p>Successfully Updated</p>";
       echo "<a href='../create.php?id=".$id."'><button type='button'>Back</button></a>";
       echo "<a href='../create.php'><button type='button'>Home</button></a>";
   } else {
       echo "Error while updating record : ". $conn->error;
   }

   

}
$conn->close();
?>