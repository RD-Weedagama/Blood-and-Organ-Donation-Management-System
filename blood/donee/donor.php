<?php require_once "controllerUserData.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Hello, world!</title>
    <scriptsrc="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        * {
	box-sizing: border-box;
}
.back{
    background-image: url(b.jpg);
    width: 100%;
    height:100vh;
    background-size: cover;
    z-index: -1;
}
.back .overlay{
    background: #171819;
    width: 100%;
    height: 100%;
    opacity: 0.8;
}


    </style>

    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
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
              <a class="nav-link " aria-current="page" href="main.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="for_donors.php">For Donors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upcoming_campaigns.php">Upcoming Campaigns</a>
            </li>
            <li>
              <div>
                <a class="btn btn-primary" href="login-user.ph" role="button">Sign in</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>



    <form method="select.php" action="get">
        <div class="back">
            <div class="overlay"></div>
        </div>
       
            <div class="mid align-content-center">
                <div class="container pt-lg-5">
                    <div class="row">
                        
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="blood.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title">Blood Donor</h4>
                              <p class="card-text">The one who's donating blood for the people who need blood is known as blood donor.</p>
                              <a href="signup-user.php" class="btn btn-primary w-25" data-bs-toggle="tooltip" data-bs-placement="bottom" title="රුධිර දායකයා"> Ok</a>

                            </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="organ.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title">Organ Donor</h4>
                              <p class="card-text">The one who's donating organs for the people who need organs are known as organ donors.</p>
                              <a href="signup-user.php" class="btn btn-primary w-25" data-bs-toggle="tooltip" data-bs-placement="bottom" title="අවයව දායකයා"> Ok</a>

                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
           

        </div>
    </form>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
  </script>
</body>
</html>