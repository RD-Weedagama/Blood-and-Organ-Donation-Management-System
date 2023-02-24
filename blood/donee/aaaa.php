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
        $insert_data = "INSERT INTO usertable (name, email, password, code, status, A, B ,C , D, E,F, G)
                        values('$name', '$email', '$encpass', '$code', '$status','$A','$B','$C','$D','$E','$F','$G')";
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
        $code_res = mysqli_query($con, $check_code);
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
                header('location: reg1.php');
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
                    header('location: reg1.php');
                }else{
                    $info = "It's look like you haven't still verify your email - $email";
                    $_SESSION['info'] = $info;
                    header('location: user-otp.php');
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


    if(isset($_POST['submit']))
        
  
    {
        
        $email = $_SESSION['email'];
        
        
        
        $A = $_POST['A'];
        $B = $_POST['B'];
        $C = $_POST['C'];
        $D = $_POST['D'];
        $E = $_POST['E'];
        $F = $_POST['F'];
        $G = $_POST['G'];
        

        if(!empty($A) || !empty($B) || !empty($C) || !empty($D) ||
        !empty($E) || !empty($F) || !empty($G)){

        

        if(mysqli_connect_error()){
            die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

        }
        else {
          
            $update_don = "UPDATE usertable SET A = '$A', B = '$B', C = '$C', D = '$D', E = '$E', F = '$F', G = '$G' WHERE email = '$email'";
    $update_res = mysqli_query($con, $update_don);
           
        }
    }
    else {
        echo "All field are required.";
        die();
    }


   
    }


    //if login now button click
    if(isset($_POST['blood_donor'])){
        header('Location: signup-user.php');
    }
        
     
   
?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>reg1</title>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"></script>
    <style>
        body{
    margin: 0;
    padding: 0;
    background: url(hand.jpg);
    background-size: cover;
    font-family: sans-serif;
   
    
    
}
.login-box{
    width: 1020px;
    height: 560px;
    background: rgba(255, 255, 255, 0.575);
    color: rgba(255, 255, 255, 0.753);
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    border-radius: 30px;  
    font-weight: 600;
      
}
          
    </style>
  </head>
  <body>
    
    <div class="login-box">
        <div>
            <nav aria-label="Page navigation example">
                <ul class="pagination  justify-content-center">
                  <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="reg2.php">2</a></li>
                  <li class="page-item"><a class="page-link" href="reg3.html">3</a></li>
                  <li class="page-item"><a class="page-link" href="reg4.html">4</a></li>
                  <li class="page-item"><a class="page-link" href="reg5.html">5</a></li>
                  <li class="page-item"><a class="page-link" href="reg6.html">6</a></li>
                  <li class="page-item"><a class="page-link" href="reg2.html">Next</a></li>
                </ul>
              </nav>
          </div>
       <form action="controllerUserData.php" method="POST">
        <table class="table table-hover">
          
          
            <tr>
              <th >A)</th>
              <td class="col-form-label">Have you donated blood before?</td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="A"  value="yes">
                  <label class="form-check-label">
                    Yes
                  </label>
                </div></td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="A"  value="no">
                  <label class="form-check-label" >
                    No
                  </label>
                </div></td>
            </tr>

            <tr>
              <th >B)</th>
              <td class="col-form-label">If yes,How many times</td>
              <td colspan="2" class="align-items-lg-start">
                <div class="form-group">
                  <input type="text" class="form-control" name="B">
              </div>
                  
            </tr>

            <tr>
              <th >C)</th>
              <td class="col-form-label">Date of last donation</td>
              <td colspan="2" class="align-items-lg-start">
                <div class="form-group">
                  <input type="text" class="form-control" name="C">
              </div>
                  
            </tr>

            <tr>
              <th >D)</th>
              <td class="col-form-label">Did you experience any aliment, difficulty or discomfort during previous donations?</td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="D"  value="yes">
                  <label class="form-check-label">
                    Yes
                  </label>
                </div></td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="D"  value="no">
                  <label class="form-check-label">
                    No
                  </label>
                </div></td>
            </tr>

            <tr>
              <th >E)</th>
              <td class="col-form-label">If yes what was the difficulty?</td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="E"  value="yes">
                  <label class="form-check-label">
                    Yes
                  </label>
                </div></td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="E"  value="no">
                  <label class="form-check-label">
                    No
                  </label>
                </div></td>
            </tr>

            <tr>
              <th >F)</th>
              <td class="col-form-label">Have you ever been medically advised not to donate blood?</td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="F"  value="yes">
                  <label class="form-check-label">
                    Yes
                  </label>
                </div></td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="F"  value="no">
                  <label class="form-check-label">
                    No
                  </label>
                </div></td>
            </tr>

            <tr>
              <th >G)</th>
              <td class="col-form-label">Have you read and understand the “Blood donors Information Leaflets” given to you?</td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="G"  value="yes">
                  <label class="form-check-label">
                    Yes
                  </label>
                </div></td>
              <td><div class="form-check">
                  <input class="form-check-input" type="radio" name="G"  value="no">
                  <label class="form-check-label">
                    No
                  </label>
                </div></td>
            </tr>

            
          
            
        </table> 
        
        <input type="submit" value="Submit" name="submit">
       </form>
         
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>