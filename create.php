

<!DOCTYPE html>
<html>
<head>
   <title>Add new book in the list</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
</head>
<body>


 <div class="container">
  <h2> Add new Books of the Datebase</h2>

   <form action="include/create.inc.php" method="post">
       <table>
           <tr>
               <th>Subject</th>
               <td><input type="text" name="sub" placeholder="subject" required="required" /></td>
           </tr>     
           <tr>
               <th>Title</th>
               <td><input type="text" name="title" placeholder="title" required="required"  /></td>
           </tr>
           <tr>
               <th>Author</th>
               <td><input type="text" name="author" placeholder="author" required="required"  /></td>
           </tr>
            <tr>
               <th>Publisher</th>
               <td><input type="text" name="publisher" placeholder="publisher" required="required"  /></td>
           </tr>
            <tr>
               <th>Copyright</th>
               <td><input type="text" name="copyright" placeholder="copyright" required="required" /></td>
           </tr>
            <tr>
               <th>Edition</th>
               <td><input type="text" name="edition" placeholder="edition" required="required" /></td>
           </tr>
            <tr>
               <th>ISBN</th>
               <td><input type="text" name="ISBN" placeholder="ISBN" required="required" /></td>
           </tr>
            <tr>
               <th>Library</th>
               <td><input type="text" name="library" placeholder="library"  required="required" /></td>
           </tr>
           <tr>
               <td><button type="submit">Add</button></td>
               <td><a href="include/create.inc.php"><button type="button">see avaiblable Books</button></a></td>
           </tr>
       </table>
   </form>


</div>
</body>
</html>






