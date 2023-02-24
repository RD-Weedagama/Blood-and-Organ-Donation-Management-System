
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Blood Donation Form 1</title>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

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
                <a class="nav-link " aria-current="page" href="admin-home.php">Home</a>
              </li>
             
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenu" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          User Verification
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenu">
            <li><a class="dropdown-item" href="donor-request.php">Blood Donor Verification</a></li>
            <li><a class="dropdown-item" href="donee-request-verify.php">Blood Donee Verification</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenu" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Search Donors
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenu">
            <li><a class="dropdown-item" href="admin-blood-donor-search.php">Search a Blood Donor</a></li>
            <li><a class="dropdown-item" href="admin-organ-donor-search.php">Search a Organ Donor</a></li>
          </ul>
        </li>
              <li class="nav-item">
                <a class="nav-link" href="sum.php">Summary</a>
              </li>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Upcoming Campaigns
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="admin-upcoming-campaign.php">Post a campaign</a></li>
            <li><a class="dropdown-item" href="admin-campaign-history.php">Campaign History</a></li>
            <li><a class="dropdown-item" href="admin-update-campaign.php">Update campaign</a></li>
          </ul>
        </li>
        <li class="nav-item">
                <a class="nav-link" href="contact-us-message.php">Contact us</a>
              </li>
        <li><a href="logout-user.php" class="btn btn-primary w-100" type="button" >Logout</a></li>

      </ul>
          
        </div>
      </nav>

    
    <div class="login-box mt-5">
   

<table class="table table-bordered">
         
<tbody>
<?php

      $link = mysqli_connect("localhost", "root", "", "userform");

      // Check connection
      if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
      }
       
      // Attempt select query execution
     
      $query = "SELECT * FROM campaigns";
      if($result = mysqli_query($link,$query)){
          if(mysqli_num_rows($result) > 0){
              
              while($row = mysqli_fetch_array($result)){
                  echo "<tr>";
                
                  
                  

                      ?>
                                  <tr>
                                      <td>
                                          
                                      <div class="card text-white bg-primary mb-3" style="max-width: 40rem;">
                                      <div class="card-header"><?= $row['caption']; ?></div>
                                      <div class="card-body">
                                       <h5 class="card-title"><?= $row['date']; ?></h5>
                                       <h5 class="card-title"><?= $row['time']; ?></h5>
                                       <h5 class="card-title"><?= $row['venue']; ?></h5>
                                       <p class="card-text"><?= $row['message']; ?></p>
                                      </div>

                                      </td>
                                      <td><form action="admin-update-edit-campaign.php" method="POST">
                                                    <input type="hidden" name="camp_id" value="<?php echo $row['id'];?>">    
                                                    <input type="submit" class="btn btn-primary" value="Update" name="camp_update">
                                                    <input type="submit" class="btn btn-danger" value="Delete" name="camp_delete"></form></td>
                      
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


         
    </div>
 
  </body>
</html>