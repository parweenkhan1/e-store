<?php
require '.\include\common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Products page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <style>
             .jumbotron{
                margin-top: 100px;
            }
            .content{
                min-height: 550px;
            }
            .styling{
               margin-bottom: 38px;
            }
        </style>
    </head>
    <body>
        <?php
        include './include/header.php';
        include './include/Check-if-added.php';
        if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
        $user_id = $_SESSION['user_id'];
        }
        ?>
        <div class="content">
            <div class="container-fluid">
                <div class="jumbotron">
                    <?php
                    echo"<h1 class='text-center'>Welcome to our Lifestyle Store!</h1>"
                     ."<p class='text-center'>We have the best cameras,watches and shirts for you.No need to huntaround, we have all in one place. </p>";
                    ?>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="Bootstrap_Assignment/5.jpg" alt="">
                            <div class="caption">
                                <h3>CANNON EOS</h3>
                                <p>Price Rs:30,000</p>
                            </div>
                            <?php
                                if(check_if_added_to_cart(1)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{
                            ?>
                            <a href="cart-add.php?id=1" name="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="Bootstrap_Assignment/2.jpg" alt="">
                            <div class="caption">
                                <h3>SONY DSLR</h3>
                                <p>Price Rs:40,000</p>
                            </div>
                            <?php
                                if(check_if_added_to_cart(2)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{
                            ?>
                            <a href="cart-add.php?id=2" name="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="Bootstrap_Assignment/3.jpg" alt="">
                            <div class="caption">
                               <h3>Sony DSLR</h3>
                                <p>Price Rs:50,000</p>
                            </div>
                            <?php
                                if(check_if_added_to_cart(3)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{
                            ?>
                            <a href="cart-add.php?id=3" name="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="Bootstrap_Assignment/4.jpg" alt="">
                            <div class="caption">
                                <h3>Olympus DSLR</h3>
                                <p>Price Rs:80,000</p>
                            </div>
                            <?php
                                if(check_if_added_to_cart(4)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{
                            ?>
                            <a href="cart-add.php?id=4" name="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="Bootstrap_Assignment/9.jpg" alt="">
                            <div class="caption">
                                <h3>TITAN Model #301</h3>
                                <p>Price Rs:13,000.00</p>
                            </div>
                            <?php
                                if(check_if_added_to_cart(5)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{
                            ?>
                            <a href="cart-add.php?id=5" name="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="Bootstrap_Assignment/10.jpg" alt="">
                            <div class="caption">
                                <h3>TITAN Model #201</h3>
                                <p>Price Rs:3,000.00</p>
                            </div>
                            <?php
                                if(check_if_added_to_cart(6)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{
                            ?>
                            <a href="cart-add.php?id=6" name="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                             <img src="Bootstrap_Assignment/11.jpg" alt="">
                            <div class="caption">
                                <h3>HMT Milan</h3>
                                <p>Price Rs:8,000.00</p>
                            </div>
                            <?php
                                if(check_if_added_to_cart(7)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{
                            ?>
                            <a href="cart-add.php?id=7" name="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="Bootstrap_Assignment/12.jpg" alt="">
                            <div class="caption">
                                <h3>Faber Luba #111</h3>
                                <p>Price Rs:18,000.00</p>
                            </div>
                            <?php
                                if(check_if_added_to_cart(8)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{
                            ?>
                            <a href="cart-add.php?id=8" name="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="Bootstrap_Assignment/8.jpg" alt="">
                            <div class="caption styling">
                                <h3>H&W</h3>
                                <p>Price Rs:800.00</p>
                            </div>
                            <?php
                                if(check_if_added_to_cart(9)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{
                            ?>
                            <a href="cart-add.php?id=9" name="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="Bootstrap_Assignment/6.jpg" alt="">
                            <div class="caption">
                                <h3>Luis Phil</h3>
                                <p>Price Rs:1,000.00</p>
                            </div>
                            <?php
                                if(check_if_added_to_cart(10)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{
                            ?>
                            <a href="cart-add.php?id=10" name="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="Bootstrap_Assignment/13.jpg" alt="">
                            <div class="caption">
                                <h3>Jhon Zok</h3>
                                <p>Price Rs:1,500.00</p>
                            </div>
                            <?php
                                if(check_if_added_to_cart(11)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{
                            ?>
                            <a href="cart-add.php?id=11" name="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail text-center">
                            <img src="Bootstrap_Assignment/14.jpg" alt="">
                            <div class="caption">
                                <h3>Jhalsani</h3>
                                <p>Price Rs:1,300.00</p>
                            </div>
                            <?php
                                if(check_if_added_to_cart(12)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else{
                            ?>
                            <a href="cart-add.php?id=12" name="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> 

