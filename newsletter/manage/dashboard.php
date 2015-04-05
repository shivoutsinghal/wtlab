<?php require_once 'initialise.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> WhiteLeaf Trek & Tours | Admin Dashboard </title>
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
       
        <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
        <meta name="msapplication-TileColor" content="#3399cc" />
        <link rel="icon" href="assets/img/ico/favicon.ico" type="image/png">
    </head>
    <body class="ovh">
        <div id="preloader">
             <div id="preloader-icon">
                <i class="im-spinner icon-spin"></i>
            </div>
        </div>
         <!-- Header File Include -->
        <?php require_once 'header.php'; ?>
        <!-- SideBar File Includde -->
        <?php require_once 'sidebar.php';?>
        
        
        <!-- Start #content -->
        <div id="content">
            <!-- Start .content-wrapper -->
            <div class="content-wrapper">
                <div id="page-heading" class="page-header">
                    <h2><i class="icon im-home2"></i> Dashboard</h2>
                    <!-- Start .bredcrumb -->
                    <ul id="crumb" class="breadcrumb">
                    </ul>
                    <!-- End .breadcrumb -->
                </div>
                <!-- Start .content-inner -->
                <div class="content-inner">
                    <!-- Start .row -->
                    <div class="row">
                        <div class="col-lg-8 col-md-8 sortable-layout">
                            <!-- col-lg-8 start here -->
                            <div class="panel panel-default  toggle panelMove">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Welcome ! </h4>
                                </div>
                                <div class="panel-body">
                                   
                                </div>
                               
                            </div>
                            <!-- End .panel -->
                           
                        </div>
                        <!-- col-lg-8 end here -->


                        <div class="col-lg-4 col-md-4 sortable-layout">
                            <!-- col-lg-4 start here -->
                            <div class="shortcut-buttons">
                                <!-- Start .shortcut buttons -->
                                <a href="product_add.php" class="shortcut-btn">
                                    <span class="shortcut-icon">
                                      <i class="im-sunglasses"></i>
                                     </span>
                                    <span class="shortcut-text">Add Tour</span>
                                </a>
                                <a href="menu_add.php" class="shortcut-btn">
                                    <span class="shortcut-icon">
                                      <i class="im-newspaper"></i>
                                     </span>
                                    <span class="shortcut-text">Add Newsletter</span>
                                </a>
                                
                    
                            </div>
                            <!-- End .shortcut buttons -->
                          

                      
                        </div>
                        <!-- col-lg-4 end here -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .content-inner -->
            </div>
            <!-- End .content-wrapper -->
            <div class="clearfix"></div>
        </div>
        <!-- End #content -->
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
        <!-- Core plugins ( not remove ) -->
        <script src="assets/js/libs/modernizr.custom.js"></script>
        <!-- Handle responsive view functions -->
        <script src="assets/js/jRespond.min.js"></script>
        <!-- Custom scroll for sidebars,tables and etc. -->
        <script src="assets/plugins/core/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/core/slimscroll/jquery.slimscroll.horizontal.min.js"></script>
        <!-- Highlight code blocks -->
        <script src="assets/plugins/misc/highlight/highlight.pack.js"></script>
        <!-- Handle template sounds -->
        <script src="assets/plugins/misc/ion-sound/ion.sound.js"></script>
        <!-- Proivde quick search for many widgets -->
        <script src="assets/plugins/core/quicksearch/jquery.quicksearch.js"></script>
        <!-- Prompt modal -->
        <script src="assets/plugins/ui/bootbox/bootbox.js"></script>
        <!-- Other plugins ( load only nessesary plugins for every page) -->
         
        <script src="assets/plugins/forms/icheck/jquery.icheck.js"></script>
     
        <script src="assets/js/jquery.appStart.js"></script>
        <script src="assets/js/app.js"></script>
       
</html>