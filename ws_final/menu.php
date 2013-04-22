<?php
session_start();
if($_SERVER['HTTPS'] != 'on'){
     header("Location: https://localhost/menu.php" );
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
        <h1> it worked</h1>
        <?php print($_SESSION['userid']);?>
        <?php print_r($_SESSION['SERVER_ADDR']);?>
        <a href="logout.php">Logout</a>
        
    </body>
    
</html>