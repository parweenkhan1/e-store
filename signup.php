<?php
require './include/common.php';
if(isset($_SESSION['email'])){
    header("location:products.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <style>
            .content{
                min-height: 550px;
            }
            form{
                margin-top: 100px;
            }
            #banner_image{
                padding-top: 75px;
                padding-bottom: 50px;
                text-align: left;
                color: #f8f8f8;
                background: url('intro-bg_1.jpg')no-repeat center center;
                background-size: cover;
            }
            .panel-body{
                background-color: rgba(255,255,255,0.7);
            }
             footer{
                padding: 10px 0;
                background-color: #101010;
                color: #9d9d9d; 
                bottom: 0;
                width: 100%;
            }
            h6{
                font-size: 20px;
            }
            .red{
                color: red;
            }
        </style>
    </head>
    <body>
        <?php
        include './include/header.php';
        ?>
        <div id="banner_image">
            <form method="POST" action="signup_script.php">
                <div class="content">
                    <div class='container'>
                        <div class='col-xs-6 col-xs-offset-3'>
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h6>Sign Up</h6>
                                </div>
                            </div>
                            <div class="panel panel-body">
                                <div class='form-group'>
                                    <input type='text' name='name' class='form-control input-lg' placeholder="Name" pattren="[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                                </div>
                                <div class='form-group'>
                                    <input type='email' name='email' class='form-control input-lg' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$' placeholder="Email"  required>
                                    <?php
                                    if(isset($_GET['m1'])){
                                    echo $_GET['m1'];
                                    }
                                    ?>
                                </div>
                                <div class='form-group'>
                                    <input type='password' name='password' class='form-control input-lg' pattern='.{6,}'  placeholder="Password"  required>
                                </div>
                                <div class='form-group'>
                                    <input  type='number' name='contact' class='form-control input-lg' placeholder='Contact'  required>
                                    <?php
                                    if(isset($_GET['m2'])){
                                    echo $_GET['m2'];
                                    }
                                    ?>
                                </div>
                                <div class='form-group'>
                                    <input type='text' name='city' class='form-control input-lg' placeholder="City"  required>
                                </div>
                                <div class='form-group'>
                                    <input type='text' name='address' class='form-control input-lg' placeholder="Address"  required>
                                </div>
                                <div class="btn-signup">    
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php
    include './include/footer.php';
    ?>
    </body>
</html>
     