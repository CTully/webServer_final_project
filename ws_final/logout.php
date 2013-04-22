<?php
session_start();
session_destory();
if($_SERVER['HTTPS'] != 'on'){
     header("Location: https://localhost/login.php" );
     exit();
    
 }

?>

<html>
    <head>
        <title>
            
        </title>
         <link rel="icon" href="fav_img.ico" type="image/x-icon">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
    </head>
    <body>
        <h2>Thank you for loggin out, have a nice day.</h2>
    </body>
</html>