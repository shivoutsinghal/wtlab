<?php

/*
Page: LANDING PAGE
Developer: Sukham
@MapleGraph Solutions Pvt Ltd
*/

?>
<?php
require_once('includes/connection.php');
require_once('includes/functions.php');

sec_session_start();


    if (login_check($mysqli) == true) {
        
        header("location:dashboard.php");
       }

       if(isset($_GET['errorLogin']) && $_GET['errorLogin'] != "")
         {
             $messageToDisplay = $mysqli->real_escape_string($_GET['errorLogin']);
             $errorToDisplay = "block";

         }  
          else
            $errorToDisplay = "none"; 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login | WhiteLeaf Trek & Tours </title>
        <!-- Mobile specific metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Force IE9 to render in normal mode -->
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="author" content="SuggeElson" />
        <meta name="description" content="AppStart admin template - new premium responsive admin template. This template is designed to help you build the site administration without losing valuable time.Template contains all the important functions which must have one backend system.Build on great twitter boostrap framework"
        />
        <meta name="keywords" content="admin, admin template, admin theme, responsive, responsive admin, responsive admin template, responsive theme, themeforest, 960 grid system, grid, grid theme, liquid, jquery, administration, administration template, administration theme, mobile, touch , responsive layout, boostrap, twitter boostrap"
        />
        <meta name="application-name" content="AppStart admin template" />
        <!-- Import google fonts - Heading first/ text second -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700' rel='stylesheet' type='text/css'>
        <!-- Css files -->
        <!-- Icons -->
        <link href="assets/css/icons.css" rel="stylesheet" />
        <!-- Bootstrap stylesheets (included template modifications) -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- jQueryUI -->
        <link href="assets/css/appstart-theme/jquery.ui.all.css" rel="stylesheet" />
        <!-- Plugins stylesheets (all plugin custom css) -->
        <link href="assets/css/plugins.css" rel="stylesheet" />
        <!-- Main stylesheets (template main css file) -->
        <link href="assets/css/main.css" rel="stylesheet" />
        <!-- Custom stylesheets ( Put your own changes here ) -->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="icon" href="assets/img/ico/favicon.ico" type="image/png">
        <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
        <meta name="msapplication-TileColor" content="#3399cc" />
    </head>
    <body class="login-page">
        <!-- Start #login -->
        <div id="login" class="animated bounceIn">
            <img id="logo" src="assets/img/white-leaf-nav.png" alt="White Leaf  Logo">
            <!-- Start .login-wrapper -->
            <div class="login-wrapper">
               
               <div class="alert alert-danger fade in" style="display:<?php echo $errorToDisplay;?>">
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="im-cancel alert-icon s18"></i>
                      <strong>Login Unsuccessful !</strong><small> <?php echo $messageToDisplay ?>. Please try again .</small>
                </div>
           
                        <div class="seperator">
                            <strong>Login</strong>
                            <hr>
                        </div>
                        <form class="form-horizontal mt0" action="login_process.php" id="login-form" role="form" method="post">
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="text" name="userId" id="userId" class="form-control left-icon"  placeholder="Your UserID ...">
                                    <i class="im-user s16 left-input-icon"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <input type="password" name="password" id="password" class="form-control left-icon" placeholder="Your password">
                                    <i class="im-lock s16 left-input-icon"></i>
                                 </div>
                            </div>
                            <div class="form-group">
                                
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4 mb25">
                                   
                                    <button class="btn btn-default pull-right" type="submit">Login</button>
                                </div>
                                <!-- col-lg-12 end here -->
                            </div>
                        </form>
                    </div>
                    
            </div>
            <!-- End #.login-wrapper -->
        </div>
        <!-- End #login -->
        <!-- Javascripts -->
        <!-- Important javascript libs(put in all pages) -->
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script>
        window.jQuery || document.write('<script src="assets/js/libs/jquery-2.1.1.min.js">\x3C/script>')
        </script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script>
        window.jQuery || document.write('<script src="assets/js/libs/jquery-ui-1.10.4.min.js">\x3C/script>')
        </script>
        <!--[if lt IE 9]>
  <script type="text/javascript" src="assets/js/libs/excanvas.min.js"></script>
  <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script type="text/javascript" src="assets/js/libs/respond.min.js"></script>
<![endif]-->
        <!-- Bootstrap plugins -->
        <script src="assets/js/bootstrap/bootstrap.js"></script>
        <!-- Form plugins -->
        <script src="assets/plugins/forms/icheck/jquery.icheck.js"></script>
        <script src="assets/plugins/forms/validation/jquery.validate.js"></script>
        <script src="assets/plugins/forms/validation/additional-methods.min.js"></script>
        <!-- Init plugins olny for this page -->
        <script src="assets/js/pages/login.js"></script>
         <script src="assets/js/pages/sha512.js"></script>
        <script type="text/javascript">
        // function formhash(form) {
            
        //     var p = document.createElement("input");
        //     var password = document.getElementById("password");
                      
        //     form.appendChild(p);
        //     p.name = "p";
        //     p.type = "hidden";
        //     p.value = hex_sha512(password.value);
        //     alert(p.value);
         
        //     // Make sure the plaintext password doesn't get sent. 
        //     password.value = "";
         
        //     // Finally submit the form. 
        //     form.submit();
          
        // }

        </script>
    </body>
</html>