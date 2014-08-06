<?php
ob_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Forgot password suggest profiles based on email id - Dashboard</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <link rel="shortcut icon" href="../favicon.ico" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
<?php 
session_start();
if($_SESSION['userlogged']==1){
?>
        <div id="wrapper">
            <div id="wrapper_heading2">Welcome, you have successfully logged in </div>
        </div>        
<?php 
}
else{
    session_destroy();
    header( "refresh:3;url=index.php" ); /* Redirect browser */
    ?>
     <div id="wrapper">
            <div class="notification2"><label>Sorry, you are not logged in </label></div>
        </div>    
<?php        
    exit();
}
ob_end_flush();
?>
</body>
</html>
