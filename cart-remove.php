<?php
require './include/common.php';
if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "DELET FROM users_item WHERE item_id='$item_id' AND user_id='$user_id'";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
    header("location:Cart.php"); 
}
?> 