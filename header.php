<?php 

if(isset($_SESSION['u_id'])){
echo "
 <nav class='navbar navbar-expand-lg navbar-dark bg-dark fixed-top'>
     	 <div class='container'>
        <a class='navbar-brand' href='#'>Atabug Network</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarResponsive'>
          <ul class='navbar-nav ml-auto'>
            <li class='nav-item active'>
              <a class='nav-link' href='#'>Home
                <span class='sr-only'>(current)</span>
              </a>
            </li>
             <li class='nav-item'>
              <a class='nav-link' href='#'>My Profile</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='#'>Gallery</a>
            </li>
            <form action = 'includes/logut.inc.php' method = 'POST'>
            <li class='nav-item'>
              <a class='nav-link' href='includes/logout.inc.php'>Logout</a>
            </li>
            </form>
          </ul>
        </div>
      </div>
    </nav>
         "; 
     }else{
     	echo "
     	<nav class='navbar navbar-expand-lg navbar-dark bg-dark fixed-top'>
     	 <div class='container'>
        <a class='navbar-brand' href='#'>Atabug Network</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarResponsive' aria-controls='navbarResponsive' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarResponsive'>
          <ul class='navbar-nav ml-auto'>
            <li class='nav-item active'>
            <button id ='btn_Signup' class='btn btn-danger btn-lg' type ='button' data-toggle='modal' data-target='#myModal'>Sign Up</button>
                <span class='sr-only'>(current)</span>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    ";
     }
        
           
    
 ?>