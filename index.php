<?php  
	session_start();
	include_once 'includes/dbh.inc.php';

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Atabug Network</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation Bar -->
   	<?php 
   		include 'header.php';
   	 ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <?php  
      if(isset($_SESSION['u_id'])){
      	echo "
		<header class='jumbotron my-4'>
        <h1 class='display-3'>Welcome  " . $_SESSION['u_first'] . ' ' . $_SESSION['u_last'] . "!</h1><br>
    	";
       }else{
       	echo "
      <header class='jumbotron my-4'>
        <h1 class='display-3'>Login Now!</h1><br>
        <form action='includes/login.inc.php' method='POST'>
        Username: <input type='text' name='uid' placeholder='Username/E-mail'><br><br>
        Password: <input type='password' name='pwd' placeholder='Password'><br><br>
        <button class='btn btn-primary btn-lg' type ='submit' name='submit'>Login</button>
    	</form>
    	</header>
       
      ";
     }
      ?>
      <!-- Page Features -->
     	<?php 
     		include 'body.php';
     	 ?>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    	<?php
    		include 'footer.php';
    	?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
