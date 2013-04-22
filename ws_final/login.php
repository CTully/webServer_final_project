<?php
if(isset($_SERVER['HTTP_USER_AGENT'])){
    $agent = $_SERVER['HTTP_USER_AGENT'];
    
 }
 if(!strl($agent,"Firefox") > 0 ){
    
    $browser ='firefox';
    
    
 }
 
 else{
    
    header('Location: http://localhost/error_browser.php');
    
 }

 if($_SERVER['HTTPS'] != 'on'){
     header("Location: https://localhost/login.php" );
     exit();
    
 }
 
 
 
 if(isset($_POST['userid']))
 {
   
   $mysqli = new mysqli("localhost", "root","password","ws_server");
        if($mysqli->connect_errno){
            print "failed to connect to the database" . $mysqli->connect_errno;
            
        }
        
        $userid = mysql_real_escape_string($_POST['userid']);
        $password=mysql_real_escape_string($_POST['password']);
        
        $result = $mysqli->query("select * from ws_users where user_name='"
                                 . $userid . "' and password=password('".$password."')");
    
   
    
    if( !empty($result))
    {
        echo'inside second if test';
        $_SESSION['userid'] = $_POST['userid'];
        header('Location:menu.php');
       
        die();
        
    }
    
 } 
?>

<html>
    <head><title>Web Servers Final-Project</title>
        <link rel="icon" href="fav_img.ico" type="image/x-icon">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
    </head>
    <body>
        <h1>Login Page</h1>
        <form method='post'>
            <label for="userid">     
            </label>
            <input type='text' name='userid' placeholder='username' />
            <br />
            <label for='password'></label>
            <input type='text' name='password' placeholder='password' />
            <br />
            <input type='submit' value='login' name='login' />
        </form>
            
        
        
    </body>
</html>