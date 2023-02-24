<?php require_once "controllerUserData.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
    

    <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      body{
        background: rgba(21, 21, 22, 0.267);
      }
      .row{
        background: #ffffff;
        border-radius: 30px;
        box-shadow: 12px 12px 22px gray;
      }
      img{
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px; 
      
      }
      .btn1{
        border: none;
        outline: none;
        height: 50px;
        width: 100%;
        background-color: black;
        color: white;
        border-radius: 4px;
        font-weight: bold;
      }
      .btn1:hover{
        background: white;
        border: 1px solid;
        color: black;
      }
     
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="blood-8370.png" alt="" width="30" height="24" class="d-inline-block align-text-top">  
          One Blood</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="home.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="for_donors.html">For Donors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upcoming_campaigns.html">Upcoming Campaigns</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sign_up.html">Sign up</a>
            </li>
            <li>
              <div>
                <a class="btn btn-primary" href="sign_in.html" role="button">Sign in</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br>
   

 

    


    <section class="Form">
      <div class="container mt-2 mb-2 px-3 pt-5">
        <div class="row g-0">
          <div class="col-lg-5">
            <img src="hand1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-7  px-5 pt-5">
            <h3>Forgot Password</h3>
            <h4>Enter your email</h4>
            <form  action="forgot-password.php" method="POST" autocomplete="">
            <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>

            

              <div class="form-row">
                <div class="">
                  <input type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>" class="form-control p-3 my-3" >
                </div>
              </div>
              <div class="form-row">
              <div class="form-group">
                  <input class="form-control button btn1 my-3" type="submit" name="check-email" value="Continue">
              </div>
              </div>
             
             

            </form>
          </div>
        </div>
      </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
           
