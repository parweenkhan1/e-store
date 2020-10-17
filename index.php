<?php
require"./include/common.php";
if(isset($_SESSION["email"])){
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
             #banner_image{
                padding-top: 75px;
                padding-bottom: 50px;
                text-align: center;
                color: #f8f8f8;
                background: url('intro-bg_1.jpg')no-repeat center center;
                background-size: cover;
            }
            #banner_content{
                position: relative;
                padding-top: 6%;
                padding-bottom: 6%;
                margin-top: 12%;
                margin-bottom: 12%;
                margin-left: 20%;
                background-color: rgba(0,0,0,0.7);
                max-width: 600px;
            }
            footer{
            padding: 10px 0;
            background-color: #101010;
            color: #9d9d9d; 
            bottom: 0;
            width: 100%;
              }   
        </style>
    </head>
    <body>
        <?php
        include './include/header.php';
        ?>
        <div id='banner_image'>
            <div class='container'>
                <div id='banner_content'>
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands.</p>
                    <a href='signup.php ' class='btn btn-danger btn-lg active'>Shop now</a>
                </div>
            </div>          
        </div>
        <?php
        include './include/footer.php';
        ?>
    </body>
</html>