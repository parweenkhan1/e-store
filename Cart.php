<?php
require'./include/common.php';
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['email'])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <style>
            footer{
                padding: 10px 0;
                background-color: #101010;
                color: #9d9d9d; 
                bottom: 0;
                width: 100%;
            }
            th,td{
                padding: 5px;
            }
            td{
                background-color: #e5e5e5;
            }
            .table-width{
                margin-top: 100px;
                min-height: 550px;
            }
            .remove_item_link{
                color: #0000ff;
            }
        </style>
    </head>
    <body>
        <?php
        include './include/header.php';
        ?>
        <div class="container table-width">
            <div class="row">
                <div class="col-xs-6">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $user_id="";
                        if(isset($_SESSION['user_id'])){
                        $user_id = $_SESSION["user_id"];
                        }
                        $sum=0;
                        $select_query = "SELECT items.id,items.price AS price,items.name AS name FROM users_item JOIN items ON users_item.item_id=items.id WHERE users_item.user_id='$user_id' and status='Added to cart'";
                        $select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
                        $select_query_row = mysqli_num_rows($select_query_result);
                        if($select_query_row>=1){
                        ?>
                        <?php
                            while ($row = mysqli_fetch_array($select_query_result)){
                                 $sum =$sum+$row['price'];
                                $id=$row['id'];
                                echo "<tr><td>"."#".$row['id']."</td><td>".$row['name']."</td><td>Rs".$row['price']."</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link btn btn-danger btn-block'>Remove</a></td></tr>";                              
                            }
                            echo "<tr><td></td><td>Total</td><td>Rs".$sum."</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                            ?>
                        </tbody>
                        <?php
                        } else{
                            echo "<center><h3>Add items to the cart first</h3></center>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php
        include './include/footer.php';
        ?>
    </body>
</html> 