<?php session_start();
$loc_ema = "";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


   
    <style>
        body {
            color: #2e323c;
    background-image: url(b.jpg);
    position: relative;
   
    width: 100%;
    height:100vh;
    background-size: cover;
    z-index: -1;
}

.card {
    border: none;
    background: #eee
}

.search {
    width: 100%;
    margin-bottom: auto;
    margin-top: 20px;
    height: 50px;
    background-color: #fff;
    padding: 10px;
    border-radius: 5px
}

.search-input {
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    margin-top: 5px;
    caret-color: transparent;
    line-height: 20px;
    transition: width 0.4s linear
}

.search .search-input {
    padding: 0 10px;
    width: 100%;
    caret-color: #536bf6;
    font-size: 19px;
    font-weight: 300;
    color: black;
    transition: width 0.4s linear
}

.search-icon {
    height: 34px;
    width: 34px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    background-color: #536bf6;
    font-size: 10px;
    bottom: 30px;
    position: relative;
    border-radius: 5px
}

.search-icon:hover {
    color: #fff !important
}

a:link {
    text-decoration: none
}

.card-inner {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: .25rem;
    border: none;
    cursor: pointer;
    transition: all 2s
}

.card-inner:hover {
    transform: scale(1.1)
}

.mg-text span {
    font-size: 12px
}

.mg-text {
    line-height: 14px
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
   
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Search blood groups here</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="POST" id="my_form">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" class="form-control" placeholder="Search data">
                                        <button type="submit" name="ser" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                  

                  <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Blood Group</th>
                                    <th>Contact No</th>
                                    <th>Location</th>
                                </tr>
                            </thead>
                  <tbody>
                  <?php
                  
                    if(isset($_POST['ser']))
                    {
                        $link = mysqli_connect("localhost", "root", "", "userform");
 
                        // Check connection
                        if($link === false){
                            die("ERROR: Could not connect. " . mysqli_connect_error());
                        }
                         
                        // Attempt select query execution
                        $search = $_POST['search'];
                        $sql = "SELECT * FROM organ_donor WHERE blood_group='$search'";
                        if($result = mysqli_query($link,$sql)){
                            if(mysqli_num_rows($result) > 0){
                                
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                  
                                    
                                    

                                        ?>
                                                    <tr>
                                        
                                                        <td><?= $row['email']; ?></td>
                                                        <td><?= $row['address']; ?></td>
                                                        <td><?= $row['blood_group']; ?></td>
                                                        <td><?= $row['contact_no']; ?></td>
                                                        <td><iframe width="100%" height="100" src="https://maps.google.com/maps?q=<?php echo $row['address']; ?>&output=embed"></iframe>


                                                        </td>  
                                                        <td>
                                                        <form action="ControllerBloodDoneeData.php" method="post">
                                                        <input type="hidden" name="search" value="<?php echo $row['email'];?>">
    


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
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
                         
                        // Close connection
                        mysqli_close($link);}



?>
                   </table>
                  </tbody>

                  
                    </div>
                </div>
            </div>
        </div>
    </div>





  </body>
</html>