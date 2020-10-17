<?php
require'./include/common.php';
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
            footer{
                padding: 10px 0;
                background-color: #101010;
                color: #9d9d9d; 
                bottom: 0;
                width: 100%;
            }
            .red{
                color: red;
            }
            .green{
                color: green;
            }
        </style>
    </head>
    <body>
        <?php
        include './include/header.php';
        ?>
       <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="text-center">Change Password</h3>
                        </div>
                    <div class="panel-body">
                        <form method="post" action="settings_script.php">
                            <div class="form-group">
                                <label for="oldpassword">Old Password</label>
                                <input type="password" name="oldpassword" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="newpassword">New Password</label>
                                <input type="password" class="form-control" name="newpassword" required>
                            </div>
                            <div class="form-group">
                                <label for="newpasswordRe">Re-entry New Password</label>
                                <input type="password" class="form-control" name="newpasswordRe" required>
                            </div>
                            <?php
                            if(isset($_GET['m1'])){
                                echo $_GET['m1'];
                            }
                            ?>
                            <input type="submit" class="btn btn-primary btn-block" value="Confirm"/>
                        </form>
                    </div>
                </div>
                </div>
            </div>   
        </div>
        <?php
        include './include/footer.php';
        ?>
    </body>
</html>