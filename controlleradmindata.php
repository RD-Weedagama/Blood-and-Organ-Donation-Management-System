<?php session_start();
require "connection.php";
$email = "";
$name = "";
$camp_id="";
$errors = array();



//confirm blood donor
if(isset($_POST['confirm'])){
        
        
 
    
    
    
    $confirm_email = $_POST['req_id'];
   
    
    if(!empty($confirm_email)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "UPDATE student_table SET id_verification = 'yes' WHERE email = '$confirm_email'";
        $update_res = mysqli_query($con, $update_don);
        if($update_res){
            
            header('Location: donor-request.php');
            $subject = "User verification";
            $message = "Your request has been accepted";
            $sender = "From: ravidesh99@gmail.com";
            mail($confirm_email, $subject, $message, $sender);
        }else{
            echo "not sucessfully updated";
        $errors['db-error'] = "Failed!";
            }

       
            }
}
        else {
            echo "All field are required.";
        die();
            } 
}



//reject blood donor
if(isset($_POST['reject'])){
        
        
    $email = $_SESSION['email'];
    
    
    
    $confirm_email = $_POST['confirm_email'];
   
    
    if(!empty($confirm_email)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "DELETE FROM student_table WHERE email='$confirm_email'";
        $update_res = mysqli_query($con, $update_don);
        if($update_res){
            echo "sucessfully deleted";
            // header('Location: agreement.php');
            $subject = "User verification";
            $message = "Your request has been rejected";
            $sender = "From: ravidesh99@gmail.com";
            mail($confirm_email, $subject, $message, $sender);
        }else{
            echo "not sucessfully updated";
        $errors['db-error'] = "Failed!";
            }

       
            }
}
        else {
            echo "All field are required.";
        die();
            } 
}




//confirm blood donee
if(isset($_POST['confirm_donee'])){
        
    
    $confirm_email = $_POST['req_id'];
   
    
    if(!empty($confirm_email)){


    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "UPDATE donee_req SET id_verification = 'yes' WHERE email = '$confirm_email'";
        $update_res = mysqli_query($con, $update_don);
        if($update_res){
            echo "sucessfully updated";
            header('Location: donor-request.php');
        }else{
            echo "not sucessfully updated";
        $errors['db-error'] = "Failed!";
            }

       
            }
}
        else {
            echo "All field are required.";
        die();
            } 
}



//reject blood donee
if(isset($_POST['reject'])){
        
        
    $email = $_SESSION['email'];
    
    
    
    $confirm_email = $_POST['confirm_email'];
   
    
    if(!empty($confirm_email)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "DELETE FROM donee_req WHERE email='$confirm_email'";
        $update_res = mysqli_query($con, $update_don);
        if($update_res){
            echo "sucessfully deleted";
            // header('Location: agreement.php');
        }else{
            echo "not sucessfully updated";
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
if(isset($_POST['send'])){        
    
    $caption = $_POST['caption'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $venue = $_POST['venue'];
    $message = $_POST['message'];

   
    
    if(!empty($caption)|| !empty($date)|| !empty($venue)|| !empty($message)|| !empty($time)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "INSERT INTO campaigns(caption,date,time,venue,message) value ('$caption','$date','$time','$venue','$message')";
        $update_res = mysqli_query($con, $update_don);
        if($update_res){
           
            header('Location:admin-upcoming-campaign.php');
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





//update upcoming campaigns blood donor
if(isset($_POST['camp_update'])){        
    
    $camp_id = $_POST['camp_id'];
    $_SESSION['camp_id'] = $camp_id;
    echo " $camp_id";
    header('Location: admin-update-edit-campaign.php');

}



   //contact us message
   if(isset($_POST['req_reject'])){
        
    $email = $_SESSION['email'];
    
    
    $req_id = $_POST['req_id'];
   echo "$req_id";
    if(!empty($req_id)){


    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "UPDATE blood_request SET status = 'rejected' WHERE id = '$req_id'";
$update_res = mysqli_query($con, $update_don);
    if($update_res){
        echo "hello";
        header('Location: donee-request.php');
    }else{
        $errors['db-error'] = "Failed!";
    }
    echo "not hello";
       
    }
}
    else {
        echo "All field are required.";
        die();
} 
}



//contact us form
if(isset($_POST['contact'])){        
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $read="no";
  

   
    
    if(!empty($name)|| !empty($email)|| !empty($message)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "INSERT INTO contact_us(name,email,message,read_status) value ('$name','$email','$message','$read')";
        $update_res = mysqli_query($con, $update_don);
        if($update_res){
           
            header('Location:main.php');
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