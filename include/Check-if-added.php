<?php
function check_if_added_to_cart($item_id){
    $con = mysqli_connect("localhost:3308","root","","store") or die(mysqli_error($con));
    include 'common.php';
    $user_id=$_SESSION['user_id'];
    $query = "SELECT * FROM users_item WHERE item_id='$item_id'AND  user_id='$user_id' AND status='Added to cart'";
    $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
    if(mysqli_num_rows($query_result)>=1){
        return TRUE;
    }
    else{
        return FALSE;
    }
}
?>
