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

    <style type="text/css">
      p{
        font-weight: bold;
      }
      input{
        font-size: 20px;
      }

    </style>
  </head>

  <body>
 <div class="container">
   
    <!-- Navigation Bar -->
   	<?php 
   		include 'header.php';
   	 ?>

  
      <!-- Jumbotron Header -->
      <?php  
        include 'dashboard.php';
      
      ?>


      <!-- Page Body -->
    

     	<?php 
     		include 'body.php';
     	 ?>
  
    <!-- Footer -->
    	<?php
    		include 'footer.php';
    	?>

        <!-- Sign up Page -->
     <div class="modal fade" id="myModal" role="dialog">
       <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Sign Up</h4>
            </div>
            <div class="modal-body">
              <form class="signup-form" action="includes/signup.inc.php" method="POST">
                <div class = "input-signup">
                <p align="center">Firstname:</p><center>
                  <center><input type="text" name='first' placeholder="Firstname" size="36"></center><br> 
                <p align="center">Lastname:</p>
                  <center><input type="text" name='last' placeholder="Lastname" size="36"></center><br>
                <p align="center">Email:</p>
                  <center><input type="text" name='email' placeholder="E-mail" size="36"></center><br>
                <p align="center">Username:</p>
                  <center><input type="text" name='uid' placeholder="Username" size="36"></center><br>
                <p align="center">Password:</p>
                  <center><input type="password" name='pwd' placeholder="Password" size="36"></center><br> 
               </center>
             </form>
            </div>
             <div class="modal-footer">
               <button class="btn btn-success btn-lg" type="submit" name="submit">Sign up</button>
               <button type="button" class="btn btn-secondary  btn-sm" data-dismiss="modal">Close</button>
            </div>
         </div>
       </div>
     </div>

</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>
  </body>

</html>
