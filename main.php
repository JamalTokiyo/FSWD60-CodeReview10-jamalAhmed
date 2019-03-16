<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// it will never let you open index(login) page if session is set
if ( isset($_SESSION['user'])!="" ) {
 header("Location: create.php");
 exit;
}

$error = false;

if( isset($_POST['btn-login']) ) {

 // prevent sql injections/ clear user invalid inputs
 $email = trim($_POST['email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $pass = trim($_POST['pass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);
 // prevent sql injections / clear user invalid inputs

 if(empty($email)){
  $error = true;
  $emailError = "Please enter your email address.";
 } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address.";
 }

 if(empty($pass)){
  $error = true;
  $passError = "Please enter your password.";
 }

 // if there's no error, continue to login
 if (!$error) {
  
  $password = hash('sha256', $pass); // password hashing

  $res=mysqli_query($conn, "SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
  $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
  $count = mysqli_num_rows($res); // if uname/pass is correct it returns must be 1 row
  
  if( $count == 1 && $row['userPass']==$password ) {
   $_SESSION['user'] = $row['userId'];
   header("Location: create.php");
  } else {
   $errMSG = "Incorrect Credentials, Try again...";
  }
  
 }

}
?>
<?php ob_end_flush(); ?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
</head>
 
<body>
    <div class="container">
       
        <div class="login">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

             
            
            <input type="text" name="email" placeholder="E-mail" required="required">
            
            <input type="password" name="pass" placeholder="password..." required="required">
           
            <button type="submit" name="btn-login">login</button>
        </form>
         <a href="register.php" class="sign">Signup</a>
          
      </div>

       <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
 
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Books & Media<span class="sr-only"></span></a>
      </li>
        <span class="input-group-addon"><i class="fal fa-books"></i></span>
      <li class="nav-item"> <a class="nav-link" href="#">Events</a>
       
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Research</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kids & Teens</a>
      </li>
    </ul>
    
  </div>
</nav>
   <!-- carousel of the page begins here...           -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/TechClasses.png" class="d-block w-100" alt="techclasses">
            </div>
            <div class="carousel-item">
                <img src="img/Brainfuse.png" class="d-block w-100" alt="Brainfuse">
            </div>
            <div class="carousel-item">
                <img src="img/kids.png" class="d-block w-100" alt="kindsannual">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><br>
    <!-- library blog here !...           -->
    <div class="container">
  
      <ul class="list-unstyled">
      <li class="media">
        <img src="img/library.jpg" class="mr-3" alt="...">
        <div class="media-body">
          <h5 class="mt-0 mb-1">List-based media object</h5>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
      </li>
  <li class="media my-4">
    <img src="img/books.jpg" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0 mb-1">List-based media object</h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </li>
  <li class="media">
    <img src="img/libro.jpg" class="mr-3" alt="..." height="340" width="340">
    <div class="media-body">
      <h5 class="mt-0 mb-1">List-based media object</h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </li>
</ul>
</div>
    
</div>
<hr style="border: 4px solid lightgray" />
 <div class="footer">
    <footer class="lead">

       @copyright:Jamal@codefactory.<br> 
       <small> All Rights Reserved!</small>

    </footer>
  </div>
</body>

</html>
<?php ob_end_flush(); ?>