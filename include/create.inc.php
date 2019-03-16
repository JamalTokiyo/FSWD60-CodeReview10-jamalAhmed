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
  

   $sql = "INSERT INTO bookinfo (sub, title, author,publish,copyright,edition,ISBN,library) VALUES ('$sub', '$title', '$author','$publisher','$copyright','$edition','$isbn','$lib')";
   if($conn->query($sql) === TRUE) {
       echo "<p style='text-align:center;font-size:20px;color:green'>New Record Successfully Created to library Database!!!</p>";
       echo "<a href='../create.php'><button type='button' style='margin-left:50%;font-size:20px;color:black'>Add New</button></a>";
      
   } else {
       echo "Error " . $sql . ' ' . $conn->connect_error;
   }

  
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>display data</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
</head>
<body>
<div class="container">
  <h2 style="text-align:center">The list for the Avialable Books</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Subject</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Publisher</th>
      <th scope="col">Copyright</th>
      <th scope="col">Edition</th>
      <th scope="col">#ISBN</th>
      <th scope="col">Library</th>
    </tr>
  </thead>
  <tbody>
   <?php
           $sql = "SELECT * FROM bookinfo ";
           $result = $conn->query($sql);

           if($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
                   echo "<tr>
                       <td>".$row['sub']."</td>
                       <td> ".$row['title']."</td>
                       <td>".$row['author']."</td>
                       <td>".$row['publish']."</td>
                       <td>".$row['copyright']."</td>
                       <td>".$row['edition']."</td>
                       <td>".$row['ISBN']."</td>
                       <td>".$row['library']."</td>
                       <td>
                           <a href='include/update.inc.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                           <a href='delete.php?id=".$row['id']."'><button type='button'>Delete</button></a>
                       </td>
                   </tr>";
               }
           } 
           
           ?>

  </tbody>
</table>
</div>
</body>
</html>
 
