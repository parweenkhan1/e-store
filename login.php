<?php
require'./include/common.php';
if(isset($_SESSION['email'])){
    header("location:products.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <style>
            .content{
                min-height: 550px;
            }
            .form{
                margin-top: 100px;
            }
            footer{
                padding: 10px 0;
                background-color: #101010;
                color: #9d9d9d; 
                bottom: 0;
                width: 100%;
            }
            #banner_image{
                padding-top: 75px;
                padding-bottom: 50px;
                text-align: center;
                color: #f8f8f8;
                background: url('intro-bg_1.jpg')no-repeat center center;
                background-size: cover;
            }
            .panel-body{
                background-color: rgba(255,255,255,0.7);
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
        <div id='banner_image'>
        <form role="form" action="login_script.php" method="POST">
            <div class="content">
                <div class='container'>
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class='form-group'>
                            <p>Don't have an Account?<a href='signup.php'>Register</a></p>
                        </div>
                        <div class='panel panel-primary'>
                            <div class='panel-heading'>Login</div>
                        </div>
                        <div class='panel panel-body'>
                            <div class='form-group'>
                                <input type='email' class='form-control' name='email' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$' placeholder="Enter email" required/>
                            </div>
                            <div class='form-group'>
                                <input type='password' class='form-control' pattern='.{6,}' placeholder="Enter password" name='password' required>
                            </div>
                            <div class='form-group'>
                                <?php
                                if (isset($_GET['m1'])) {
                                    echo $_GET['m1'];
                                }
                                ?>
                            </div>
                            <div class='form-group'>
                                <button type='submit' class='btn btn-primary' name="btn-submit">Login</button>
                            </div>
                        </div>
                        <p><a href='setting.php'>Forgot password?</a></p>
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
