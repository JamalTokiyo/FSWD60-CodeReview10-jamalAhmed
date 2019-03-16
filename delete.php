<?php 

require_once 'dbconnect.php';

if($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM bookinfo WHERE bookid = {$id}";
   $result = $conn->query($sql);
   $data = $result->fetch_assoc();

  
?>

<!DOCTYPE html>
<html>
<head>
   <title>Delete User</title>
</head>
<body>

<h3>Do you really want to delete this Book?</h3>
<form action="include/delete.inc.php" method="post">

   <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
   <button type="submit">Yes, delete it!</button>
   <a href="create.inc.php"><button type="button">No, go back!</button></a>
</form>

</body>
</html>

<?php
}

?>