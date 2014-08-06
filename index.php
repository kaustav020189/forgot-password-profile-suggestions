<?php 
session_start();
$_SESSION['userlogged']=0;
?>
<!-- THIS CODE IS UNDER FULL COPYRIGHT AND UN-DISTRIBUTING LICENSE OF 
A 100 WEB SOLUTIONS (http://www.a100websolutions.in). CODE MAY BE USED OR DISTRIBUTED 
UNDER SIMILAR AND UNCHANGED LICENSE AND FULL COPYRIGHT TO A 100 WEB SOLUTIONS
AND WITHOUT ANY CHANGES IN THE CORE CODING TECHNIQUES AND CONCEPT.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Forgot password suggest profiles based on email id - Demos | A 100 Web Solutions</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <link rel="shortcut icon" href="../favicon.ico" />
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div id="fb-root"></div>

<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>
        <div id="wrapper">
            <div id="wrapper_heading2">Display profile suggestions on Forgot Password</div>
            <div id="main">
                <form action="validate.php" method="POST">
                    <p>
                        <label>Enter email id</label>
                        <input type="text" name="email"/>
                    </p>
                    <p>
                        <label>Enter password</label>
                        <input type="password" name="password"/>
                    </p>
                    <p>
                        <input type="submit" value="SUBMIT" name="submit" class="submit"/>
                    </p>
                </form>
            </div>
            <label>Enter anything other than the below details to see the working demo</label>
            <br /><br />
            <label class="note">email : kaustav.banerjee4u@gmail.com</label>
            <br />
            <label class="note">password : 1234</label>
        </div>
        <div id="share">
        <ul>
                                <li>
                                    <div class="fb-like" data-href="http://www.projects.a100websolutions.in/forgot-password-suggest-profiles-based-on-user-email-id/" data-send="false" data-layout="box_count" data-width="450" data-show-faces="false"></div>
                                </li>
                                <li>
                                    <div class="g-plus" data-action="share" data-annotation="vertical-bubble" data-height="60" data-href="http://www.projects.a100websolutions.in/forgot-password-suggest-profiles-based-on-user-email-id/"></div>
                                </li>
                                <li>
                                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.projects.a100websolutions.in/forgot-password-suggest-profiles-based-on-user-email-id/" data-count="vertical" data-via="a100websolution" data-hashtags="coding-tutorials"></a>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                                </li>				
				<li>                                  
                                    <a href="//pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.projects.a100websolutions.in%2Fforgot-password-suggest-profiles-based-on-user-email-id%2F&media=http%3A%2F%2Fwww.projects.a100websolutions.in%2Flogo.jpg&description=Next%20stop%3A%20Pinterest" data-pin-do="buttonPin" data-pin-config="above">
                                            <img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" /></a>
				</li>				
                            </ul> 
    </div>
    </body>
    <script type="text/javascript">

  (function() {

    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;

    po.src = 'https://apis.google.com/js/plusone.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);

  })();

</script>

<!-- Next line for Pinterest -->
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
</html>
