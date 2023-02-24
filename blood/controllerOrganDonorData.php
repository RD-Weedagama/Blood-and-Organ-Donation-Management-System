<?php 
session_start();
require "connection.php";
$email = "";
$name = "";
$errors = array();

//if user signup button
if(isset($_POST['organdonor'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM organ_donor WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $gender =  "empty";
        $nic =  "empty";
        $dob =  "empty";
        $address =  "empty";
        $contact_no =  "empty";
        $blood_group =  "empty";


        $insert_data = "INSERT INTO organ_donor (name, email, password, code, status,gender,nic,dob,address,contact_no,blood_group)
                        values('$name', '$email', '$encpass', '$code', '$status','$gender','$nic','$dob','$address','$contact_no','$blood_group')";
        $data_check = mysqli_query($con, $insert_data);
        if($data_check){
            $subject = "Email Verification Code";
            $message = "Your verification code is $code";
            $sender = "From: shahiprem7890@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: organ-donor-user-otp.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while sending code!";
            }
        }else{
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }

}
    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM organ_donee WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE organ_donor SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: organ-donee-personal-details.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click login button
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $check_email = "SELECT * FROM usertable WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);
        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;
                    header('location: home.php');
                }else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: organ-donee-user-otp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM usertable WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE usertable SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: shahiprem7890@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $code_res = mysqli_query($con, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

    //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE usertable SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($con, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: login-user.php');
    }




    
 //organ-donor-personal info page
if(isset($_POST['personal'])){
        
        
    $email = $_SESSION['email'];
    
    $gender = $_POST['gender'];
    $nic = $_POST['nic'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $verify="no";

    
    if(!empty($gender) || !empty($nic) || !empty($dob) || !empty($address) ||
    !empty($contact_no)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        

    }
    else {
      
        
        $update_don = "UPDATE organ_donor SET gender = '$gender', nic = '$nic', dob = '$dob', address = '$address', contact_no = '$contact_no' WHERE email = '$email'";
        $update_res = mysqli_query($con, $update_don);
             	// Get name of images
  	$Get_image_name = $_FILES['image']['name'];
  	
  	// image Path
  	$image_Path = "images/".basename($Get_image_name);

  	$sql = "INSERT INTO organ_donor_req (imagename,nic,dob,address,email,id_verification,contact) VALUES ('$Get_image_name', '$nic','$dob','$address','$email','$verify','$contact_no')";
  	
	// Run SQL query
  	mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $image_Path)) {
  		echo "Your Image uploaded successfully";
  	}else{
  		echo  "Not Insert Image";
  	}
        if($update_res){
    
            header('Location: organ-details.php');
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



   


//organ type page
if(isset($_POST['odetails'])){
        
        
    $email = $_SESSION['email'];
    
    
    
    $otype = $_POST['otype'];
    $oblood = $_POST['oblood'];
    

   

    if(!empty($otype) || !empty($oblood)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "UPDATE organ_donor SET blood_group = '$oblood', organ_type = '$otype' WHERE email = '$email'";
$update_res = mysqli_query($con, $update_don);
    if($update_res){
    
        header('Location: evidence1.php');
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



//evidence 1
if(isset($_POST['evi1'])){
        
        
    $email = $_SESSION['email'];
    
    
    
    $name1 = $_POST['name1'];
    $address1 = $_POST['address1'];
    $nic1 = $_POST['nic1'];
    $relationship1 = $_POST['relationship1'];
    $contact_no1 = $_POST['contact_no1'];
    $email1 = $_POST['email1'];
    

   

    if(!empty($name1) || !empty($address1)||!empty($nic1) || !empty($relationship1)||!empty($contact_no1) || !empty($email1)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "UPDATE organ_donor SET name1 = '$name1', address1 = '$address1',nic1 = '$nic1', relationship1 = '$relationship1',contact_no1 = '$contact_no1', email1 = '$email1' WHERE email = '$email'";
$update_res = mysqli_query($con, $update_don);
    if($update_res){
    
        header('Location: evidence2.php');
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



//evidence 2
if(isset($_POST['evi2'])){
        
        
    $email = $_SESSION['email'];
    
    
    
    $name2 = $_POST['name2'];
    $address2 = $_POST['address2'];
    $nic2 = $_POST['nic2'];
    $relationship2 = $_POST['relationship2'];
    $contact_no2 = $_POST['contact_no2'];
    $email2 = $_POST['email2'];
    

   

    if(!empty($name2) || !empty($address2)||!empty($nic2) || !empty($relationship2)||!empty($contact_no2) || !empty($email2)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "UPDATE organ_donor SET name2 = '$name2', address2 = '$address2',nic2 = '$nic2', relationship2 = '$relationship2',contact_no2 = '$contact_no2', email2 = '$email2' WHERE email = '$email'";
$update_res = mysqli_query($con, $update_don);
    if($update_res){
    
        header('Location: organ-donor-home.php');
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



//update personal info page
if(isset($_POST['save'])){
        
        
    $email = $_SESSION['email'];
    
    
    
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];
    $f = $_POST['f'];
    $g = $_POST['g'];
    
    
    
    if(!empty($a) || !empty($b) || !empty($c) || !empty($d) ||
    !empty($e) || !empty($f) || !empty($g) || !empty($h)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "UPDATE organ_donor SET name = '$a', email = '$b', gender = '$c', nic = '$d', dob = '$e', address = '$f', contact_no = '$g'  WHERE email = '$email'";
        $update_res = mysqli_query($con, $update_don);
        if($update_res){
    
             header('Location: organ-donor-profile.php');
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