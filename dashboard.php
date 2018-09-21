 <?php  

 
      if(isset($_SESSION['u_id'])){
        echo "
      <header class='jumbotron my-4'>
        <h1 class='display-3'>Welcome  " . $_SESSION['u_first'] . ' ' . $_SESSION['u_last'] . "!</h1><br>
      </header>
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