<?php
require './include/common.php';
if(!isset($_SESSION['email'])){
    header("location:index.php");
}
$oldPassword = md5($_POST['oldpassword']);

$newPassword = md5($_POST['newpassword']);

$newPasswordRe = md5($_POST['newpasswordRe']);

$email = $_SESSION['email'];
$select_query = "SELECT * FROM users WHERE email='$email' AND password='$oldPassword'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$row = mysqli_fetch_row($select_query_result);
if($row>0  && $newPassword===$newPasswordRe){
    $success = "<span class='green'>Password Successfully Changed</span>";
    $update_query = "UPDATE users SET password='$newPassword' WHERE users.email='$email'";
    $update_query_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
    header("location:setting.php?m1=".$success);
}
elseif($newPassword===$newPasswordRe){
    $error = "<span class='red'>Please enter the correct password</span>";
    header("location:settig.php?m1=".$error);
}
else{
    $error = "<span class='red'>Invalid Credentials</span>";
    header("location:settig.php?m1=".$error);
}
?>