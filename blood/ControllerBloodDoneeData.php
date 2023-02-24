<?php 

session_start();
require "connection.php";
$email = "";
$name = "";
$errors = array();


//Blood Donee signup
if(isset($_POST['signupdonee'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM donee WHERE email = '$email'";
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
       
    
       
        $insert_data = "INSERT INTO donee(name, email, password, code, status,gender,nic,dob,address,contact_no)
                        values('$name', '$email', '$encpass', '$code', '$status','$gender','$nic','$dob','$address','$contact_no')";
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
                header('location: blood-donee-user-otp.php');
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
    $check_code = "SELECT * FROM donee WHERE code = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if(mysqli_num_rows($code_res) > 0){
        $fetch_data = mysqli_fetch_assoc($code_res);
        $fetch_code = $fetch_data['code'];
        $email = $fetch_data['email'];
        $code = 0;
        $status = 'verified';
        $update_otp = "UPDATE donee SET code = $code, status = '$status' WHERE code = $fetch_code";
        $update_res = mysqli_query($con, $update_otp);
        if($update_res){
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            header('location: blood-donee-personal-details.php');
            exit();
        }else{
            $errors['otp-error'] = "Failed while updating code!";
        }
    }else{
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}
    


 //blood-donee-personal info page
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
      
        
        $update_don = "UPDATE donee SET gender = '$gender', nic = '$nic', dob = '$dob', address = '$address', contact_no = '$contact_no' WHERE email = '$email'";
        $update_res = mysqli_query($con, $update_don);
             	// Get name of images
  	$Get_image_name = $_FILES['image']['name'];
  	
  	// image Path
  	$image_Path = "images/".basename($Get_image_name);

  	$sql = "INSERT INTO donee_req (imagename,nic,dob,address,email,id_verification,contact) VALUES ('$Get_image_name', '$nic','$dob','$address','$email','$verify','$contact_no')";
  	
	// Run SQL query
  	mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $image_Path)) {
  		echo "Your Image uploaded successfully";
  	}else{
  		echo  "Not Insert Image";
  	}
        if($update_res){
    
            header('Location: blood-donee-home.php');
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




//update blood-donee-personal info page
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
      
        
        $update_don = "UPDATE donee SET name = '$a', email = '$b', gender = '$c', nic = '$d', dob = '$e', address = '$f', contact_no = '$g' WHERE email = '$email'";
        $update_res = mysqli_query($con, $update_don);
        if($update_res){
    
             header('Location: blood-donee-profile.php');
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




//search
if(isset($_POST['submit_address'])){
        
    $em = $_POST['search'];  

    $query = "SELECT address FROM usertable WHERE email = '$em'";

	$result_set = mysqli_query($con, $query);
    if($result_set){
      

       while ($record= mysqli_fetch_assoc($result_set)){
           $address=$record['address'];

       }
       $address = str_replace(" ", "+", $address);
       ?>

       <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>

       <?php
    }  
    else{
        echo "No address";
    }
}



 //search blood donor
if(isset($_POST['request'])){        
    $email = $_SESSION['email'];
    $em = $_POST['search'];  
    $blood = $_POST['blo'];  
    
    if(!empty($em)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "INSERT INTO blood_request(donor_email,donee_email,status,blood) value ('$em','$email','pending','$blood')";
        $update_res = mysqli_query($con, $update_don);
        if($update_res){
            header('Location: test-blood-search.php');
            $subject = "Email Verification Code";
            $message = "Your have a blood request";
            $sender = "From: ravidesh99@gmail.com";
            mail($em, $subject, $message, $sender);
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