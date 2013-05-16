<?php 
    session_start();
    if(isset($_SESSION['logged_in'])) 
    {
    header('location:rainforest.php');
    exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' />
        <meta name='viewport' content='initial-scale=1.0, user-scalable=no' />
        <meta name='apple-mobile-web-app-capable' content='yes' />
        <meta name='apple-mobile-web-app-status-bar-style' content='black' />
        <title>
        </title>
        <link rel='stylesheet' href='https://s3.amazonaws.com/codiqa-cdn/mobile/1.2.0/jquery.mobile-1.2.0.min.css' />
        <link rel='stylesheet' href='my.css' />
        <script src='https://s3.amazonaws.com/codiqa-cdn/jquery-1.7.2.min.js'>
        </script>
        <script src='https://s3.amazonaws.com/codiqa-cdn/mobile/1.2.0/jquery.mobile-1.2.0.min.js'>
        </script>
        <script src='my.js'>
        </script>
        <!-- User-generated css -->
        <style>
        </style>
        <!-- User-generated js -->



        <script>
            // $("#user_login").validate({
            //     submitHandler: function(form) {
            //         console.log("Call Login Action");
            //     }
            // });
            try {
                $(function() {

                });

            } catch (error) {
                console.error('Your javascript has an error: ' + error);
            }
        </script>
    </head>
    <body>

        <!-- login_register -->
        <div data-role="page" id="login_register">
            <div data-theme='b' data-role='header'>
                <h3>
                    Rainforest Gifting
                </h3>
                <div style='width: 300px; height: 140px; position: relative; background-color: #fbfbfb; border: 1px solid #b8b8b8;text-align:center; margin:auto; margin-bottom:24px;'>
                    <img src='gifting_img.png' alt='gifting image'> 
                </div>
            </div>    
            <div data-role='content' data-theme='e'>    
                <div data-role="fieldcontain">
<?php 
    if(isset($_SESSION['no_match']))
    {
        echo "<p class='errors'>The e-mail and/or password that you entered do not match our records.  Please re-enter your information.</p>";
    }
?>
                    <h4 style='text-align:center;'>
                        Please Log In
                    </h4>
                    <form id='login' action="process.php" method="post">
                        <input type="hidden" name="login" value="1" />
                        <!-- <label for="email"><em>* </em>E-mail</label> -->
                        <input name="email" id="email" placeholder="E-mail" value="" data-mini="true" type="text">
                        <!-- <label for="password"><em>* </em>Password</label> -->
                        <input name="password" id="password" placeholder="Password" value="" data-mini="true" type="password">
                        <button class="btnLogin" type="submit" data-mini='true' data-theme="b">Log in</button>
                    </form>
                </div>
                <div data-role="fieldcontain">
<?php 
    if(isset($_SESSION['errors']))
    {
        foreach ($_SESSION['errors'] as $value)
        {
            echo $value . "<br />";
        }
    } 
?>
                    <h4 style='text-align:center;'>
                        or Register
                    </h4>
                    <form id='register' action="process.php" method="post">
                        <input type="hidden" name="register" value="1" />
<!--                         <label for="first_name">First Name</label> -->
                        <input name="first_name" id="first_name" placeholder="First Name" value="" data-mini="true"
                        type="text">
<!--                         <label for="last_name">Last Name</label> -->
                        <input name="last_name" id="last_name" placeholder="Last Name" value="" data-mini="true" type="text">
<!--                         <label for="email">E-mail</label> -->
                        <input name="email" id="email" placeholder="E-mail" value="" data-mini="true"
                        type="email">
<!--                         <label for="password">Password</label> -->
                        <input name="password" id="password" placeholder="Password" value="" data-mini="true" type="password">
<!--                         <label for="confirm">Confirm Password</label> -->
                        <input name="confirm" id="confirm" placeholder="Confirm Password" value="" data-mini="true" type="password">
                        <button class="btnRegister" type="submit" data-mini='true' data-theme="b">Register</button>
                    </form>
                </div>
            </div>
            <div data-theme="b" data-role="footer" data-position="fixed">
                <h3>
                </h3>
            </div> 
        </div><!--end of div login_register-->
    </body>
</html>
