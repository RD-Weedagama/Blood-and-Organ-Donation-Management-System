
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Upcoming Campaigns</title>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
    <style>
        body{
    margin: 0;
    padding: 0;
    background: url(b.jpg);
    background-size: cover;
    font-family: sans-serif;
   
    
    
}
.login-box{
    width: 1020px;
    height: 560px;
    background: rgba(255, 255, 255, 0.575);
    color: rgba(255, 255, 255, 0.753);
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    border-radius: 30px;  
    font-weight: 600;
      
}
          
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="#">
          <img src="blood-8370.png" alt="" width="30" height="24" class="d-inline-block align-text-top">  
          One Blood</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="upcoming-campaigns.php">Upcoming Campaigns</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="donee-request.php">Blood Requests</a>
              </li>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="profile.php">Profile</a></li>
            <li><a class="dropdown-item" href="#">Security</a></li>
            <li><a class="dropdown-item" href="#">Setting</a></li>
          </ul>
        </li>
        <li><a href="logout-user.php" class="btn btn-primary w-100" type="button" >Logout</a></li>

      </ul>
          
        </div>
      </nav>
    <div class="login-box">
    <form action="" method="POST">

<table class="table table-bordered">
         
<tbody>
<?php

      $link = mysqli_connect("localhost", "root", "", "userform");

      // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }
       
      // Attempt select query execution
     
      $query = "SELECT caption,date,venue,message FROM campaigns";
      if($result = mysqli_query($link,$query)){
          if(mysqli_num_rows($result) > 0){
              
              while($row = mysqli_fetch_array($result)){
                  echo "<tr>";
                
                  
                  

                      ?>
                                  <tr>
                      
                                      <div class="card text-white bg-primary mb-3" style="max-width: 100rem;">
                                      <div class="card-header"><?= $row['caption']; ?></div>
                                      <div class="card-body">
                                       <h5 class="card-title"><?= $row['date']; ?></h5>
                                       <h5 class="card-title"><?= $row['venue']; ?></h5>
                                       <p class="card-text"><?= $row['message']; ?></p>
                                      </div>

                                  </tr>


                                  <?php

                  echo "</tr>";
              }
              echo "</table>";
              // Close result set
              mysqli_free_result($result);
          } else{
              echo "No records matching your query were found.";
              
          }
      } 
       
      // Close connection
      mysqli_close($link);



      


?>
 </table>
</tbody>

</form>
         
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
  </body>
</html>