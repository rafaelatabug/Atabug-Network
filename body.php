 <style>
   
   button{
    color:#ccc;
   }




 </style>

 <?php  

  if(isset($_SESSION['u_id'])){


echo "
 <div class='row text-center'>

        <div class='col-lg-3 col-md-6 mb-4'>
          <div class='card'>
            <img class='card-img-top' src='img/upload.png'>
            <div class='card-body'>
              <h4 class='card-title'>Upload Files to Server</h4>
              <p class='card-text'>Choose any files that you want to be uploaded in the server.</p>
            </div>
            <form action = 'upload.php' method = 'POST' enctype='multipart/form-data'>
              <input type ='file' name = 'file'>
            <div class='card-footer'>
              <button type = 'submit' name = 'submit' class='btn btn-primary'>Upload Now!</button>
            </form>
            </div>
          </div>
        </div>

        <div class='col-lg-3 col-md-6 mb-4'>
          <div class='card'>
            <img class='card-img-top' src='img/gallery.png'>
            <div class='card-body'>
              <h4 class='card-title'>Upload Image to Your Profile</h4>
              <p class='card-text'>Save your Pictures inside your profile.</p>
            </div>
            <div class='card-footer'>
              <a href='#' class='btn btn-primary'>Upload Image!</a>
            </div>
          </div>
        </div>

        <div class='col-lg-3 col-md-6 mb-4'>
          <div class='card'>
            <img class='card-img-top' src='img/feed.png'>
            <div class='card-body'>
              <h4 class='card-title'>Check Your Feed</h4>
              <p class='card-text'>Be Updated to the Posts of your Friends.</p>
            </div>
            <div class='card-footer'>
              <a href='#' class='btn btn-primary'>Check Feed</a>
            </div>
          </div>
        </div>

        <div class='col-lg-3 col-md-6 mb-4'>
          <div class='card'>
            <img class='card-img-top' src='http://placehold.it/500x325' alt=''>
            <div class='card-body'>
              <h4 class='card-title'>Card title</h4>
              <p class='card-text'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
            </div>
            <div class='card-footer'>
              <a href='#' class='btn btn-primary'>Find Out More!</a>
            </div>
          </div>
        </div>

      </div>
";
 }else{

 }