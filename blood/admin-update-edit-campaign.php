<?php require_once('connection.php'); ?>
<?php  session_start()?>
<?php $camp_id='';?>



<?php 
	if(isset($_POST['camp_update'])){        
    
        $camp_id = $_POST['camp_id'];
        $_SESSION['camp_id'] = $camp_id;
       
        
    
    
	$query = "SELECT * FROM campaigns where id='$camp_id'";

	$result_set = mysqli_query($con, $query);
    if($result_set){
      

       while ($record= mysqli_fetch_assoc($result_set)){
           $caption=$record['caption'];
           $date=$record['date'];
           $time=$record['time'];
		   $venue=$record['venue'];
           $message=$record['message'];
		   
       }
        
    }
    
}
//upcoming campaigns blood donor
if(isset($_POST['update_campaign'])){        
    $camp_id = $_SESSION['camp_id'];
    $caption = $_POST['caption'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $venue = $_POST['venue'];
    $message = $_POST['message'];

   
    
    if(!empty($caption)|| !empty($date)||!empty($time)|| !empty($venue)|| !empty($message)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "UPDATE campaigns SET caption = '$caption',date = '$date',time = '$time',venue = '$venue',message = '$message' WHERE id = '$camp_id'";
        $update_res = mysqli_query($con, $update_don);
        if($update_res){
            
            header('Location: admin-update-campaign.php');
        }else{
           
        $errors['db-error'] = "Failed!";
            }

       
            }
}
        else {
            echo "All field are required.";
        die();
            } 
}


//upcoming campaigns blood donor
if(isset($_POST['update_campaign'])){        
    $camp_id = $_SESSION['camp_id'];
    $caption = $_POST['caption'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $venue = $_POST['venue'];
    $message = $_POST['message'];

   
    
    if(!empty($caption)|| !empty($date)||!empty($time)|| !empty($venue)|| !empty($message)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "UPDATE campaigns SET caption = '$caption',date = '$date',time = '$time',venue = '$venue',message = '$message' WHERE id = '$camp_id'";
        $update_res = mysqli_query($con, $update_don);
        if($update_res){
            
            header('Location: admin-update-campaign.php');
        }else{
           
        $errors['db-error'] = "Failed!";
            }

       
            }
}
        else {
            echo "All field are required.";
        die();
            } 
}


//upcoming campaigns blood donor
if(isset($_POST['camp_delete'])){        
   
    $camp_id = $_POST['camp_id'];
    
   
    
    if(!empty($camp_id)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "DELETE FROM campaigns WHERE id=' $camp_id'";
        $update_res = mysqli_query($con, $update_don);
        if($update_res){
            
            header('Location: admin-update-campaign.php');
        }else{
           
        $errors['db-error'] = "Failed!";
            }

       
            }
}
        else {
            echo "All field are required.";
        die();
            } 
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Campaigns </title>
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
    color: rgba(0, 0, 0, 0.753);
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    border-radius: 30px;   
    font-weight: 700;
}



            
    </style>
  </head>
  <body>

    <div class="login-box">
        
       <form action="admin-update-edit-campaign.php" method="POST">
       
          <div class="form-group row">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Caption</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-lg" name="caption" value="<?php echo "$caption";?>">
            </div>
          </div>
          <div class="form-group row pt-2">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Date</label>
            <div class="col-sm-10">
              <input type="date" class="form-control form-control-lg" name="date" value="<?php echo "$date";?>">
            </div>
          </div>
          <div class="form-group row pt-2">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Time</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-lg" name="time" value="<?php echo "$time";?>">
            </div>
          </div>
          <div class="form-group row pt-2">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Venue</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-lg" name="venue" value="<?php echo "$venue";?>">
            </div>
          </div>
          <div class="form-group row pt-2">
            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Message</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="message" rows="6"><?php echo "$message";?></textarea></div>
          </div>
          <div  class="text-end pt-2">
            <input type="submit" class="btn btn-dark" value="Update" name="update_campaign">
          </div>
       </form>
         
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
  
  </body>
</html>