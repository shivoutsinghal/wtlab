<?php require_once 'initialise.php' ?>
<?php 
if(isset($_POST['editIdTour'],$_POST['tourName'],$_POST['description'],$_POST['startDate'],$_POST['duration'],$_POST['package']))
 {
     $TourID = $mysqli->real_escape_string($_POST['editIdTour']);
     $TourName = $mysqli->real_escape_string($_POST['tourName']);
     $Description = $mysqli->real_escape_string($_POST['description']);
     $StartDate = $mysqli->real_escape_string($_POST['startDate']);
     $Package = $mysqli->real_escape_string($_POST['package']);
     $StartDate = date("m/d/Y",strtotime($StartDate));

     $Duration = $mysqli->real_escape_string($_POST['duration']);
     $dayDuration = substr($Duration, 0 , 1 );
     $nightDuration = substr($Duration, 3 , 1 );
    

 }
else
 {
    header("location:tour_list.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Edit Tour | WhiteLeaf Trek & Tour </title>
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
    <body class="ovh">
        <div id="preloader">
            <div id="preloader-logo">
                <img src="assets/img/preloader-logo.png" alt="Logo">
            </div>
            <div id="preloader-icon">
                <i class="im-spinner icon-spin"></i>
            </div>
        </div>
        <?php require_once 'header.php' ; ?>
        <?php require_once 'sidebar.php' ; ?>

        <!-- Start #content -->
        <div id="content">
            <!-- Start .content-wrapper -->
            <div class="content-wrapper">
                <div id="page-heading" class="page-header">
                    <h2><i class="icon im-plus"></i> Edit Tour </h2>
                    <!-- Start .bredcrumb -->
                    <ul id="crumb" class="breadcrumb">
                    </ul>
                    <!-- End .breadcrumb -->
                </div>
                <!-- Start .content-inner -->
                <div class="content-inner">
                    <!-- Start .row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- col-lg-12 start here -->
                            <div class="page-header">
                                <h4>Tour Information </h4>
                            </div>
                            <form class="form-horizontal group-border stripped" role="form" id="validate" method="post" action="tour_edit_db.php">
                            	<div class="form-group">
                                      <label for="tourName" class="col-lg-2 col-md-3 control-label">Tour Name <span class="text-danger"> * </span> </label>
                                            <div class="col-lg-10 col-md-9">
                                                <input id="tourName" type="text" value="<?php echo $TourName; ?>" name="tourName" class="form-control required">
                                            </div>
                                </div>
                                <!-- End .form-group -->

                                <div class="form-group">
                                    <label class="col-lg-2 col-md-3 control-label">Duration <span class="text-danger"> * </span> </label>
                                        <div class="col-lg-10 col-md-8">
                                                <div class="col-lg-5 col-md-4">
                                                    <input class="form-control required " type="number" id="dayDuration" value="<?php echo $dayDuration;?>" min="1" step="1" name="dayDuration" >
                                                    <span class="text-danger">Days </span> 
                                                </div>
                                                <div class="col-lg-5 col-md-4">
                                                    <input class="form-control required " type="number" id="nightDuration" value="<?php echo $nightDuration ; ?>" min="1" step="1" name="nightDuration">
                                                    <span class="text-danger">Nights </span> 
                                                </div>
                                                
                                        </div>
                                </div>
                                 
                                 <!-- End .form-group -->

                                 <div class="form-group">
                                    <label for="startDate" class="col-lg-2 col-md-3 control-label">Start Date <span class="text-danger"> * </span> </label>
                                    <div class="col-lg-10 col-md-9">
                                        <input class="form-control required datepicker" type="text" value="<?php echo $StartDate;?>" id="startDate" name="startDate">
                                    </div>
                                 </div>
                                 <!-- End .form-group -->


                                 <div class="form-group">
                                      <label for="tourPackage" class="col-lg-2 col-md-3 control-label">Package <span class="text-danger"> * </span> </label>
                                            <div class="col-lg-6 col-md-6">
                                                <input id="tourPackage" type="number" min="1" step="any" value="<?php echo $Package; ?>" name="tourPackage" class="form-control required">
                                            </div>
                                </div>
                                 <!-- End .form-group -->

                                <div class="form-group">
                                	<label for="tourDescription" class="col-lg-2 col-md-3 control-label">Tour Description <span class="text-danger"> * </span> </label>
                                	 <div class= "col-lg-10 col-md-9">
                                       <textarea name="tourDescription" id="tourDescription" class="form-control required"><?php echo $Description ;?></textarea>
                                   </div>
                                </div>
                                <!-- End .form-group  -->

                                 <div class="form-group">
                                    <div class="col-xs-offset-2">
                                        <input type="hidden" name="tourID" value="<?php echo $TourID ; ?>" />
                                         <button class="btn btn-lg btn-primary mr5 mb10" type="submit" name="editTour">Save Changes</button>
                                         <a href ="tour_list.php" class="btn btn-lg btn-default mr5 mb10">Cancel</a>
                                    </div>
                                </div>
                                <!-- End .form-group -->
                            </form>
                        

                        </div>
                        <!-- col-lg-12 end here -->
                                              
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
        <script src="assets/plugins/forms/bootstrap-filestyle/bootstrap-filestyle.js"></script>
        <script src="assets/plugins/forms/password/jquery-passy.js"></script>
        <script src="assets/plugins/forms/maxlength/bootstrap-maxlength.js"></script>
        <script src="assets/plugins/forms/tags/jquery.tagsinput.min.js"></script>
        <script src="assets/plugins/forms/bootstrap-filestyle/bootstrap-filestyle.js"></script>
        <script src="assets/plugins/forms/maskedinput/jquery.maskedinput.js"></script>
        <script src="assets/plugins/forms/autosize/jquery.autosize.js"></script>
        <script src="assets/plugins/forms/select2/select2.js"></script>
        <script src="assets/plugins/forms/dual-list-box/jquery.bootstrap-duallistbox.js"></script>
        <script src="assets/plugins/forms/checkall/jquery.checkAll.js"></script>
        <script src="assets/plugins/forms/switch/jquery.onoff.min.js"></script>
        <script src="assets/plugins/forms/globalize/globalize.js"></script>
        <script src="assets/plugins/forms/timepicker/jquery-ui-sliderAccess.js"></script>
        <script src="assets/plugins/forms/timepicker/jquery-ui-timepicker-addon.js"></script>
        <script src="assets/plugins/forms/color-picker/spectrum.js"></script>
        <script src="assets/plugins/forms/validation/jquery.validate.js"></script>
        <script src="assets/plugins/forms/validation/additional-methods.min.js"></script>
        <script src="assets/js/jquery.appStart.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/pages/form-validation.js"></script>
        <script src="assets/js/pages/form-elements.js"></script>
       
    </body>
</html>