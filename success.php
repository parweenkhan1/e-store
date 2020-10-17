<?php
require './include/common.php';
if(!isset($_SESSION['email'])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Success</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <style>
            h2,h4{
                color: #0fad00;
            }
            footer{
                padding: 10px 0;
                background-color: #101010;
                color: #9d9d9d; 
                bottom: 0;
                width: 100%;
            }
            .row{
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <?php
        include './include/header.php';
        $user_id="";
        if(isset( $_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        }
        $query = "SELECT item_id FROM users_item WHERE user_id='$user_id'";
        $query_result = mysqli_query($con, $query) or die(mysqli_error($con));
        while($row= mysqli_fetch_array($query_result)){
            $item_id = $row['item_id'];
            $query_update = "UPDATE users_item SET status='Confirmed' WHERE item_id='$item_id'";
            $query_update_result = mysqli_query($con, $query_update) or die(mysqli_error($con));
        }
        ?>
        <div class='container'>
            <div class='row text-center'>
                <div class='col-sm-12'>
                    
                        <h2>Thanks for Ordering from LifeStyle Store!</h2>
                        <br/><br/>
                        <h4>The Order will be delivered to you shortly.</h4>
                        <hr>
                        <h5>To Continue Shopping. Click <a href='products.php' class='btn btn-success'> Here</a></h5>
                    
                </div>
            </div>
        </div>
        <?php
        include './include/footer.php';
        ?>
    </body>
</html>
        