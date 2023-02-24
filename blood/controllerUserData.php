<?php 
session_start();
require "connection.php";
$email = "";
$name = "";
$errors = array();


//if user signup button
if(isset($_POST['signup'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $_SESSION['name'] = $name;
    if($password !== $cpassword){
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        $A = "empty";
        $B = "empty";
        $C = "empty";
        $D = "empty";
        $E = "empty";
        $F = "empty";
        $G = "empty";
        $A2 = "empty";
        $B2 = "empty";
        $C2 = "empty";
        $D2 = "empty";
        $E2 = "empty";
        $F2 = "empty";
        $H = "empty";
        $I = "empty";
        $A4 = "empty";
        $B4 = "empty";
        $C4 = "empty";
        $D4 = "empty";
        $E4 = "empty";
        $F4 = "empty";
        $A5 = "empty";
        $B5 = "empty";
        $C5 = "empty";
        $D5 = "empty";
        $A6 = "empty";
        $B6 = "empty";
        $C6 = "empty";
        $gender =  "empty";
        $nic =  "empty";
        $dob =  "empty";
        $address =  "empty";
        $contact_no =  "empty";
        $blood_group =  "empty";
        $weight =  "empty";
        $verify =  "No";
        $page1="false";
        $page2="false";
        $page3="false";
        $page4="false";
        $page5="false";
        $page6="false";
        $page7="false";
        $page8="false";
        $page9="false";

       
        $insert_data = "INSERT INTO usertable (name, email, password, code, status, A, B ,C , D, E,F,G,A2, B2 ,C2 ,
         D2, E2,F2,H,I, A4, B4 ,C4 , D4, E4,F4, A5, B5 ,C5 , D5, A6, B6 ,C6,gender,nic,dob,address,contact_no,blood_group,weight,verify,page1,page2,page3,page4,page5,page6,page7,page8,page9)
                        values('$name', '$email', '$encpass', '$code', '$status','$A','$B','$C','$D','$E','$F','$G',
                        '$A2','$B2','$C2','$D2','$E2','$F2','$H','$I','$A4','$B4','$C4','$D4','$E4','$F4','$A5','$B5'
                        ,'$C5','$D5','$A6','$B6','$C6','$gender','$nic','$dob','$address','$contact_no','$blood_group','$weight',' $verify','$page1','$page2','$page3','$page4','$page5','$page6','$page7','$page8','$page9')";
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
                header('location: user-otp.php');
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
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $check_code_donee = "SELECT * FROM donee WHERE code = $otp_code";

        

        $code_res = mysqli_query($con, $check_code);
        $code_res_donee = mysqli_query($con, $check_code_donee);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($con, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: alert.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            if(mysqli_num_rows($code_res_donee) > 0){
                $fetch_data = mysqli_fetch_assoc($code_res_donee);
                $fetch_code = $fetch_data['code'];
                $email = $fetch_data['email'];
                $code = 0;
                $status = 'verified';
                $update_otp = "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
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
    }

    //if user click login button
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        $check_email = "SELECT * FROM usertable WHERE email = '$email'";
        $res = mysqli_query($con, $check_email);

        $check_email_donee = "SELECT * FROM donee WHERE email = '$email'";
        $res_donee = mysqli_query($con, $check_email_donee);

        $check_email_admin = "SELECT * FROM admin WHERE email = '$email'";
        $res_admin = mysqli_query($con, $check_email_admin);

        $check_email_organ_donee = "SELECT * FROM organ_donee WHERE email = '$email'";
        $res_organ_donee = mysqli_query($con, $check_email_organ_donee);

        $check_email_organ_donor = "SELECT * FROM organ_donor WHERE email = '$email'";
        $res_organ_donor = mysqli_query($con, $check_email_organ_donor);


        

        

        if(mysqli_num_rows($res) > 0){
            $fetch = mysqli_fetch_assoc($res);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $status = $fetch['status'];
                $page1=$fetch['page1'];
                $page2=$fetch['page2'];
                $page3=$fetch['page3'];
                $page4=$fetch['page4'];
                $page5=$fetch['page5'];
                $page6=$fetch['page6'];
                $page7=$fetch['page7'];
                $page8=$fetch['page8'];
                $page9=$fetch['page9'];
                if($status == 'verified'){
                  $_SESSION['email'] = $email;
                  $_SESSION['password'] = $password;
                  if($page1=='true'){
                    if($page2=='true'){
                        if($page3=='true'){
                            if($page4=='true'){
                                if($page5=='true'){
                                    if($page6=='true'){
                                        if($page7=='true'){
                                            if($page8=='true'){
                                                if($page9=='true'){
                                                    header('location: home.php');
                                                }
                                                else{
                                                    header('location: agreement.php');
                                                }
                            
                                            }
                                            else{
                                                header('location: reg6.php');
                                            }
                        
                            
                                        }
                                        else{
                                            header('location: reg5.php');
                                        }
                            
                                    }
                                    else{
                                        header('location: reg4.php');
                                    }
                            
                                }
                                else{
                                    header('location: reg3.php');
                                }
                            
                            }
                            else{
                                header('location: reg2.php');
                            }
                        }
                        else{
                            header('location: reg1.php');
                        }
                       
                    }
                    else{
                        header('location: home.php');
                    }
                    
                  }
                  else{
                    header('location: personal_details.php');
                }
                   // header('location: home.php');
                }else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
                }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            if(mysqli_num_rows($res_donee) > 0){
                $fetch = mysqli_fetch_assoc($res_donee);
                $fetch_pass = $fetch['password'];
                if(password_verify($password, $fetch_pass)){
                    $_SESSION['email'] = $email;
                    $status = $fetch['status'];
                    if($status == 'verified'){
                      $_SESSION['email'] = $email;
                      $_SESSION['password'] = $password;
                        header('location: blood-donee-home.php');
                    }else{
                        $info = "It's look like you haven't still verify your email - $email";
                        $_SESSION['info'] = $info;
                        header('location: blood-donee-user-otp.php');
                    }
                }else{
                    $errors['email'] = "Incorrect email or password!";
                }
            }else{
                if(mysqli_num_rows($res_admin) > 0){
                    $fetch = mysqli_fetch_assoc($res_admin);
                    $fetch_pass = $fetch['password'];
                    if(password_verify($password, $fetch_pass)){
                        $_SESSION['email'] = $email;
                        $status = $fetch['status'];
                        if($status == 'verified'){
                          $_SESSION['email'] = $email;
                          $_SESSION['password'] = $password;
                            header('location: admin-home.php');
                        }else{
                            $info = "It's look like you haven't still verify your email - $email";
                            $_SESSION['info'] = $info;
                            header('location: blood-donee-user-otp.php');
                        }
                    }else{
                        $errors['email'] = "Incorrect email or password!";
                    }
                }else{
                    if(mysqli_num_rows($res_organ_donee) > 0){
                        $fetch = mysqli_fetch_assoc($res_organ_donee);
                        $fetch_pass = $fetch['password'];
                        if(password_verify($password, $fetch_pass)){
                            $_SESSION['email'] = $email;
                            $status = $fetch['status'];
                            if($status == 'verified'){
                              $_SESSION['email'] = $email;
                              $_SESSION['password'] = $password;
                                header('location: organ-donee-home.php');
                            }else{
                                $info = "It's look like you haven't still verify your email - $email";
                                $_SESSION['info'] = $info;
                                header('location: organ-donee-user-otp.php');
                            }
                        }else{
                            $errors['email'] = "Incorrect email or password!";
                        }
                    }else{
                        if(mysqli_num_rows($res_organ_donor) > 0){
                            $fetch = mysqli_fetch_assoc($res_organ_donor);
                            $fetch_pass = $fetch['password'];
                            if(password_verify($password, $fetch_pass)){
                                $_SESSION['email'] = $email;
                                $status = $fetch['status'];
                                if($status == 'verified'){
                                  $_SESSION['email'] = $email;
                                  $_SESSION['password'] = $password;
                                    header('location: organ-donor-home.php');
                                }else{
                                    $info = "It's look like you haven't still verify your email - $email";
                                    $_SESSION['info'] = $info;
                                    header('location: organ-donor-user-otp.php');
                                }
                            }else{
                                $errors['email'] = "Incorrect email or password!";
                            }
                        }else{
                            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
                        }
                    }
                }
            }
        }
        
    }

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM usertable WHERE email='$email'";
        $check_email_donee = "SELECT * FROM donee WHERE email='$email'";



        $run_sql = mysqli_query($con, $check_email);
        $run_sql_donee = mysqli_query($con, $check_email_donee);


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
            //blood donee froget password
        if(mysqli_num_rows($run_sql_donee) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE donee SET code = $code WHERE email = '$email'";
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
            echo "aaa";
        }
        }
    }

    //if user click check reset otp button
    if(isset($_POST['check-reset-otp'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
        $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
        $check_code_donee = "SELECT * FROM donee WHERE code = $otp_code";

        $code_res = mysqli_query($con, $check_code);
        $code_res_donee = mysqli_query($con, $check_code_donee);
       
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: new-password.php');
            exit();
        }else{
            //blood donee otp
            if(mysqli_num_rows($code_res_donee) > 0){
                $fetch_data = mysqli_fetch_assoc($code_res_donee);
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

            $update_pass_donee = "UPDATE donee SET code = $code, password = '$encpass' WHERE email = '$email'";
            $run_query_donee = mysqli_query($con, $update_pass_donee);

            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                
            if($run_query_donee){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
            }
        }
    }
    
   //if login now button click
    if(isset($_POST['login-now'])){
        header('Location: login-user.php');
    }

    if(isset($_GET['donor'])){
        header('Location: login-user.php');
    }
   
    //reg1 page
    if(isset($_POST['submit'])){
        
        
        $email = $_SESSION['email'];
        
        
        
        $A = $_POST['A'];
        $B = $_POST['B'];
        $C = $_POST['C'];
        $D = $_POST['D'];
        $E = $_POST['E'];
        $F = $_POST['F'];
        $G = $_POST['G'];
        $page3="true";
        if($A=='no'){
               
            $update_do = "UPDATE student_table SET form_verification='no' WHERE email = '$email'";
            $update_re = mysqli_query($con, $update_do);
        }
       

        if(!empty($A) || !empty($B) || !empty($C) || !empty($D) ||
        !empty($E) || !empty($F) || !empty($G)){

        

        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

        }
        else {
          
            
            $update_don = "UPDATE usertable SET A = '$A', B = '$B', C = '$C', D = '$D', E = '$E', F = '$F', G = '$G', page3='$page3' WHERE email = '$email'";
    $update_res = mysqli_query($con, $update_don);
    if($update_res){
        
        header('Location: reg2.php');
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
        
  
    




   //reg3 page
    if(isset($_POST['submit3']))
        
  
    {
        
        $email = $_SESSION['email'];
        
        
        
        $H = $_POST['H'];
        $I = $_POST['I'];
        $page5="true";
        if($H=='yes'){
               
            $update_do = "UPDATE student_table SET form_verification='no' WHERE email = '$email'";
            $update_re = mysqli_query($con, $update_do);
        }

       

        if(!empty($H) || !empty($I)){

        

        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

        }
        else {
          
            
            $update_don = "UPDATE usertable SET H = '$H', I = '$I', page5='$page5' WHERE email = '$email'";
            $update_res = mysqli_query($con, $update_don);
            if($update_res){
        
                header('Location: reg4.php');
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




     //reg2 page
     if(isset($_POST['submit2'])){
        
        
        $email = $_SESSION['email'];
        
        
        
        $A2 = $_POST['A2'];
        $B2 = $_POST['B2'];
        $ck=implode(',',$B2);
       // echo $ck;
        $C2 = $_POST['C2'];
        $D2 = $_POST['D2'];
        $E2 = $_POST['E2'];
        $F2 = $_POST['F2'];
        $page4="true";
        if($C!='none'){
               
            $update_do = "UPDATE student_table SET form_verification='no' WHERE email = '$email'";
            $update_re = mysqli_query($con, $update_do);
        }
        

       

        if(!empty($A2) || !empty($B2) || !empty($C2) || !empty($D2) ||
        !empty($E2) || !empty($F2)){

        

        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

        }
        else {
          
            
            $update_don = "UPDATE usertable SET A2 = '$A2', B2 = '$ck', C2 = '$C2', D2 = '$D2', E2 = '$E2', F2 = '$F2', page4='$page4'  WHERE email = '$email'";
            $update_res = mysqli_query($con, $update_don);
            if($update_res){
        
                header('Location: reg3.php');
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




   //reg4 page
   if(isset($_POST['submit4'])){
        
        
    $email = $_SESSION['email'];
    
    
    
    $A4 = $_POST['A4'];
    $B4 = $_POST['B4'];
    $C4 = $_POST['C4'];
    $D4 = $_POST['D4'];
    $E4 = $_POST['E4'];
    $F4 = $_POST['F4'];
    $page6="true";
    if($A4=='yes' ||  $F4='yes' ){
               
        $update_do = "UPDATE student_table SET form_verification='no' WHERE email = '$email'";
        $update_re = mysqli_query($con, $update_do);
    }
    

   

    if(!empty($A4) || !empty($B4) || !empty($C4) || !empty($D4) ||
    !empty($E4) || !empty($F4) ){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "UPDATE usertable SET A4 = '$A4', B4 = '$B4', C4 = '$C4', D4 = '$D4', E4 = '$E4', F4 = '$F4', page6='$page6' WHERE email = '$email'";
$update_res = mysqli_query($con, $update_don);
    if($update_res){
    
        header('Location: reg5.php');
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


 //reg5 page
 if(isset($_POST['submit5'])){
        
        
    $email = $_SESSION['email'];
    
    
    
    $A5 = $_POST['A5'];
    $B5 = $_POST['B5'];
    $C5 = $_POST['C5'];
    $D5 = $_POST['D5'];
    $page7="true";
    if($A5=='yes' ||  $B5='yes'||$C5=='yes' ||  $D5='yes'){
               
        $update_do = "UPDATE student_table SET form_verification='no' WHERE email = '$email'";
        $update_re = mysqli_query($con, $update_do);
    }
    
    

   

    if(!empty($A5) || !empty($B5) || !empty($C5) || !empty($D5)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "UPDATE usertable SET A5 = '$A5', B5 = '$B5', C5 = '$C5', D5 = '$D5', page7='$page7' WHERE email = '$email'";
$update_res = mysqli_query($con, $update_don);
    if($update_res){
    
        header('Location: reg6.php');
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




//reg6 page
if(isset($_POST['submit6'])){
        
        
    $email = $_SESSION['email'];
    
    
    
    $A6 = $_POST['A6'];
    $B6 = $_POST['B6'];
    $C6 = $_POST['C6'];
    $page8="true";
    if($B6=='yes' ||  $C6='yes'){
               
        $update_do = "UPDATE student_table SET form_verification='no' WHERE email = '$email'";
        $update_re = mysqli_query($con, $update_do);
    }

    
    if(!empty($A6) || !empty($B6) || !empty($C6)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "UPDATE usertable SET A6 = '$A6', B6 = '$B6', C6 = '$C6', page8='$page8' WHERE email = '$email'";
        $update_res = mysqli_query($con, $update_don);
        if($update_res){
    
             header('Location: agreement.php');
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



//agreement
if(isset($_POST['agreement'])){
        
        
    $email = $_SESSION['email'];
    
    
    
    $timeA = $_POST['timeA'];
    $page9="true";

    
    if(!empty($timeA)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "UPDATE usertable SET timeA = '$timeA', page9='$page9' WHERE email = '$email'";
        $update_res = mysqli_query($con, $update_don);
        if($update_res){
    
             header('Location: home.php');
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


//personal info page
if(isset($_POST['personal'])){
        
        
    $email = $_SESSION['email'];
    

    $gender = $_POST['gender'];
    $nic = $_POST['nic'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $blood_group = $_POST['blood_group'];
    $weight = $_POST['weight'];
    $page1="true";
    $verify="no";
    $form="yes";

   
   
    
    if(!empty($gender) || !empty($nic) || !empty($dob) || !empty($address) ||
    !empty($contact_no) || !empty($blood_group) || !empty($weight)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        

    }
    else {
      
        
        $update_don = "UPDATE usertable SET gender = '$gender', nic = '$nic', dob = '$dob', address = '$address', contact_no = '$contact_no', blood_group = '$blood_group', weight = '$weight',page1='$page1' WHERE email = '$email'";
        $update_res = mysqli_query($con, $update_don);
        	// Get name of images
  	$Get_image_name = $_FILES['image']['name'];
  	
  	// image Path
  	$image_Path = "images/".basename($Get_image_name);

  	$sql = "INSERT INTO student_table (imagename,nic,dob,address,email,blood,id_verification,contact,form_verification) VALUES ('$Get_image_name', '$nic','$dob','$address','$email','$blood_group','$verify','$contact_no','$form')";
  	
	// Run SQL query
  	mysqli_query($con, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $image_Path)) {
  		echo "Your Image uploaded successfully";
  	}else{
  		echo  "Not Insert Image";
  	}
        if($update_res){
    
             header('Location: covid_form.php');
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
    $h = $_POST['h'];
    
    
    if(!empty($a) || !empty($b) || !empty($c) || !empty($d) ||
    !empty($e) || !empty($f) || !empty($g) || !empty($h)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "UPDATE usertable SET name = '$a', email = '$b', gender = '$c', nic = '$d', dob = '$e', address = '$f', contact_no = '$g' , weight = '$h' WHERE email = '$email'";
        $update_res = mysqli_query($con, $update_don);
        if($update_res){
    
             header('Location: profile.php');
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






   //covid-19 form
   if(isset($_POST['don'])){
        
        
    $email = $_SESSION['email'];
    
    
    
    $donA = $_POST['donA'];
    $donB = $_POST['donB'];
    $donC = $_POST['donC'];
    $donD = $_POST['donD'];
    $donE = $_POST['donE'];
    $page2="true";
    

   

    if(!empty($donA) || !empty($donB) || !empty($donC) || !empty($donD) ||
    !empty($donE)){

    

    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "UPDATE usertable SET donA = '$donA', donB = '$donB', donC = '$donC', donD = '$donD', donE = '$donE',page2='$page2' WHERE email = '$email'";
$update_res = mysqli_query($con, $update_don);
    if($update_res){
    
        header('Location: reg1.php');
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





   //accept donee request
   if(isset($_POST['req_confirm'])){
        
    $email = $_SESSION['email'];
    
    $em=$_POST['em'];
    $req_id = $_POST['req_id'];
   echo "$req_id";
    if(!empty($req_id)){


    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else {
      
        
        $update_don = "UPDATE blood_request SET status = 'confirmed' WHERE id = '$req_id'";
$update_res = mysqli_query($con, $update_don);
    if($update_res){
        
        header('Location: donee-request.php');
        $subject = "Email Verification Code";
        $message = "Your request has been accepted";
        $sender = "From: ravidesh99@gmail.com";
        mail($em, $subject, $message, $sender);
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


   //reject donee request
   if(isset($_POST['req_reject'])){
        
    $email = $_SESSION['email'];
    $em=$_POST['em'];
    
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
        
        header('Location: donee-request.php');
        $subject = "Email Verification Code";
        $message = "Your request has been rejected";
        $sender = "From: ravidesh99@gmail.com";
        mail($em, $subject, $message, $sender);
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


   
?>