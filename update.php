<?php 

require_once 'dbconnect.php';

if($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM bookinfo WHERE id = {$id}";
   $result = $conn->query($sql);

   $data = $result->fetch_assoc();

  

?>

<!DOCTYPE html>
<html>
<head>
  

</head>
<body>

<fieldset>
   <legend>Update user</legend>

   <form action="include/update.inc.php" method="post">
       <table cellspacing="0" cellpadding="0">
           <tr>
               <th>First Name</th>
               <td><input type="text" name="sub" placeholder="First Name" value="<?php echo $data['sub'] ?>" /></td>
           </tr>     
           <tr>
               <th>Last Name</th>
               <td><input type="text" name="title" placeholder="Last Name" value="<?php echo $data['title'] ?>" /></td>
           </tr>
           <tr>
               <th>Date of birth</th>
               <td><input type="text" name="author" placeholder="Date of birth" value="<?php echo $data['author'] ?>" /></td>
           </tr> 
           <tr>
               <th>Date of birth</th>
               <td><input type="text" name="publish" placeholder="Date of birth" value="<?php echo $data['publish'] ?>" /></td>
           </tr> 
           
           <tr>
               <th>Date of birth</th>
               <td><input type="text" name="copyright" placeholder="Date of birth" value="<?php echo $data['copyright'] ?>" /></td>
           </tr> 
           <tr>
               <th>Date of birth</th>
               <td><input type="text" name="edition" placeholder="Date of birth" value="<?php echo $data['edition'] ?>" /></td>
           </tr> 
           <tr>
               <th>Date of birth</th>
               <td><input type="text" name="ISBN" placeholder="Date of birth" value="<?php echo $data['ISBN'] ?>" /></td>
           </tr> 
           <tr>
               <th>Date of birth</th>
               <td><input type="text" name="library" placeholder="Date of birth" value="<?php echo $data['library'] ?>" /></td>
           </tr> 
           <tr>
               <input type="hidden" name="id" value="<?php echo $data['id']?>" />
               <td><button type="submit">Save Changes</button></td>
               <td><a href="create.php"><button type="button">Back</button></a></td>
           </tr>
       </table>
   </form>

</fieldset>

</body>
</html>

<?php
}
 $conn->close();
?>