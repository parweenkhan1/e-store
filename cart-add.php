<?php
require('./include/common.php');
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $insert_item = "INSERT INTO users_item(user_id,item_id,status) VALUES ('$user_id','$item_id','Added to cart')";
    
    $result = mysqli_query($con, $insert_item) or die(mysqli_error($con));
    header("location:products.php");
}
?>


