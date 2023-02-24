<?php  
 $connect = mysqli_connect("localhost", "root", "", "userform");  
 $query = "SELECT blood, count(*) as number FROM student_table GROUP BY blood";  
 $result = mysqli_query($connect, $query); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Summary</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Blood', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["blood"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of organ donees',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           } 
           
           </script>  
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        * {
	box-sizing: border-box;
}
.back{
    background-image: url(new.jpg);
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

           <br /><br />   <br /><br /> <br /><br />
           <div style="width:900px;">  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div> 
 
           
          
      </body>  
 </html>  