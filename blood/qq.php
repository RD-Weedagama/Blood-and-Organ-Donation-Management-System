<?php 
session_start();
require "connection.php";
$email = "";
$name = "";
$errors = array();
if(isset($_POST['find'])){
    $nic = $_POST['nic'];
    echo " $nic";
    if(strlen($nic)<4){
        $errors['nic'] = "id not matched!";
    }
}

?>