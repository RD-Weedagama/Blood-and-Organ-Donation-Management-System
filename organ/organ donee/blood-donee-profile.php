<?php require_once('connection.php'); ?>
<?php  session_start()?>
<?php  $email=$_SESSION['email'] ?>
<?php 
	
	$query = "SELECT name,email,gender,nic,dob,address,contact_no FROM donee WHERE email = '$email'";

	$result_set = mysqli_query($con, $query);
    if($result_set){
      

       while ($record= mysqli_fetch_assoc($result_set)){
           $a=$record['name'];
           $b=$record['email'];
		   $c=$record['gender'];
           $d=$record['nic'];
		   $e=$record['dob'];
           $f=$record['address'];
		   $g=$record['contact_no'];
          
           
           

       }
        
    }

	

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
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
                <a class="nav-link " aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Seacrh for Blood</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Upcoming Campaigns</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Account
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a href="donee.php" class="btn btn-primary w-50" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ග්‍රාහකයා"><i class="fas fa-user"></i>Donee</a><br>

				
                  <a href="#"><i class="fas fa-sliders-h"></i> Settings</a> <br>
                  <button type="button" class="btn btn-light"><a href="logout-user.php" ><i class="fas fa-sign-out-alt"></i>Logout</a></button>

                </div>
              </li>
          </ul>
         
        </div>
      </nav>
    
<div class="container p-5">
    
    
<div class="row gutters pt-5">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
				</div>
				<h5 class="user-name"><?php echo $a ?></h5>
				<h6 class="user-email"><?php echo $b ?></h6>
			</div>
			<div class="about">
				<h5></h5>
				<p></p>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Personal Details</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Full Name</label>
					<input type="text" class="form-control" disabled value="<?php echo $a ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email" class="form-control" disabled value="<?php echo $b ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Gender</label>
					<input type="text" class="form-control" disabled value="<?php echo $c ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="website">National Identity Card No</label>
					<input type="url" class="form-control" disabled value="<?php echo $d ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Date of Birth</label>
					<input type="text" class="form-control" disabled value="<?php echo $e ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Address</label>
					<input type="email" class="form-control" disabled value="<?php echo $f ?>">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Contact No</label>
					<input type="text" class="form-control" disabled value="<?php echo $g ?>">
				</div>
			</div>
			
		</div>
		
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right">
                    <a class="btn btn-secondary" href="blood-donee-home.php" role="button">Cancel</a>
                    <a class="btn btn-primary" href="blood-donee-update-profile.php" role="button">Update</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>

<style type="text/css">
* {
	box-sizing: border-box;
}
body {
    margin: 0;
    
    color: #2e323c;
    background-image: url(b.jpg);
    position: relative;
   
    width: 100%;
    height:100vh;
    background-size: cover;
    z-index: -1;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}


</style>

<script type="text/javascript">

</script>
</body>
</html>
<?php mysqli_close($con);?>

