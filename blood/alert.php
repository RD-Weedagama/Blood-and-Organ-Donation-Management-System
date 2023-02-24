<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Registraion Sucessfully</title>
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
.mid{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
    color: #fff;
}

.mid h2{
    color: #fff;
    font-size: 3rem;
}
.mid .btn{
    margin-top: 1rem;
}

    </style>

    
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
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
              <a class="nav-link" href="select-user.php">Sign up</a>
            </li>
            <li>
              <div>
                <a class="btn btn-primary" href="login-user.php" role="button">Sign in</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   

  <div class="back">
      <div class="overlay"></div>
  </div>
  <div class="mid">
      <h1>Sucessfully Registred!</h1>
      <p>Now you have to fill your personal details and blood donation forms</p>
      
      <div>
          <a href="personal_details.php" class="btn btn-primary w-25" data-bs-toggle="tooltip" data-bs-placement="bottom"> Ok</a>
      </div>
  </div>

  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>