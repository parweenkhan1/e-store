<?php
require'./include/common.php';
if(isset($_SESSION)){
    session_start();
}
$email= mysqli_real_escape_string($con, $_POST['email']);

$password = mysqli_real_escape_string($con,(md5($_POST['password'])));

$login_select_query = "SELECT id,email FROM users WHERE email='$email' AND password='$password'";
$select_query_result = mysqli_query($con, $login_select_query) or die(mysqli_error($con)); 
$total_row_fetch = mysqli_num_rows($select_query_result);
if($total_row_fetch!=0){
    $row = mysqli_fetch_array($select_query_result);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $row["id"];
    if(isset($_SESSION['email'])){
    header("location:products.php");
    }
}
else{
    $error = "<span class='red'>Invalid Credentials</span>";
    header("location:login.php?m1=".$error);
}
