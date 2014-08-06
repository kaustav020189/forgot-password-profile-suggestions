<?php
ob_start();
session_start();
$_SESSION['userlogged']=0;

include_once 'dbcon.php';
connect();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT email,password,name,imagepath from FG_USERS WHERE email='".$email."'";
    $result = mysql_query($query)
            or die(mysql_error());
    if(mysql_num_rows($result)>0){     
        // User with this email has been found. Proceed to checking password.
        $row = mysql_fetch_row($result);
        if($password === $row[1]){
            // If password is correct, proceed user to profile.
            $_SESSION['userlogged'] =1;
header("Location: dashboard.php"); /* Redirect browser */
exit();
        }
        else{
header("Location: validate.php?error=password&emailid=".$email); /* Redirect browser */
exit();
        }
    }
    else{
header("Location: validate.php?error=email"); /* Redirect browser */
exit();
    }    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Forgot password suggest profiles based on email id - validate</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <link rel="shortcut icon" href="../favicon.ico" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
<?php
if($_GET){
    $error = $_GET['error'];
    if($error == 'email'){
?>
        <div id="wrapper">
            <p>
                <label>This email is not in our records. Do you <a href="#">want to register?</a></label>
            </p>
            <p>
                <a href="index.php">Go back to home page</a>
            </p>
        </div>
<?php
    }
    elseif($error == 'password'){
        $email = $_GET['emailid'];
        
        $query = "SELECT email,password,name,imagepath from FG_USERS WHERE email='".$email."'";
        $result = mysql_query($query)
            or die(mysql_error());
        
        $row = mysql_fetch_row($result);
?>
        <div id="wrapper">
            <p>
            <label>Are you sure about the password? We think it's incorrect.</label>
            </p>
            <div id="profile">
                <div class="image left">
                    <img src="<?php echo $row[3]; ?>"/>
                </div>
                <div class="details right">
                    <span>Email :</span> <?php echo $row[0]; ?>
                    <br />
                    <br />
                    <span>Name :</span> <?php echo $row[2]; ?>
                    <br />
                    <br />
                    <a href="#">Forgot password</a>
                </div>
            </div>
            <p>
                <a href="index.php">Go back to home page</a>
            </p>
        </div>
<?php
    }
}
ob_end_flush();
?>
    </body>
</html>
