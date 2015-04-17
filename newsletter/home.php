<?php
	require_once('includes/connection.php');
?>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <title>WhiteLeaf Trek & Tours | Home </title>
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
		<script>
			function validateDetails(){

				var a=document.form2.elements.email.value;
				var b=document.form2.elements.name.value;
				var c=a.length;
				
				var at=0;
				var dot=0;
				var p1=0;
				var p2=0;
				var d1=0;
				var d2=0;
				var er=0;
				var i ;

				var re = new RegExp(/^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/);
  				if(re.test(a)){
  						return true;			
  				}else{
  					alert("Invalid email ID");
  					return false;
  				}      
			}
		</script>
    </head>
	<body class="ovh">
		<div id="preloader">
            <div id="preloader-logo">
                <img src="assets/img/white-leaf-nav.png" alt="Logo">
            </div>
            <div id="preloader-icon">
                <i class="im-spinner icon-spin"></i>
            </div>
        </div>
        <!-- Start #header -->
        <div id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <div class="navbar-header">
                        <!-- Show navigation toggle on phones -->
                        <button id="showNav" class="navbar-toggle" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Show logo for large screens and laptops -->
                        <a class="navbar-brand visible-lg visible-md" href="home.php">
                            <img src="assets/img/white-leaf-nav.png" alt="Jump start">
                        </a>
                        <!-- Show logo for small screens -->
                        <a class="navbar-brand hidden-lg hidden-md hidden-xs" href="home.php">
                            <img src="assets/img/logo-sm.png" alt="Jump start">
                        </a>
                    </div>
					<nav id="top-nav" class="navbar-no-collapse" role="navigation">
                        <!-- Navbar nav -->
                        <ul class="nav navbar-nav pull-right">
							<li class="dropdown">
                                <a href="#" data-toggle="dropdown">
                                    Contact Us
                                </a>
                                <ul class="dropdown-menu right dropdown-notification" role="menu">
                                    Sector-17<br>
									Rohini<br>
									New Delhi
                                </ul>
                            </li>
                        </ul>
                    </nav>
				</div>
			</div>
		</div>
		<div class="panel panel-default plain toggle panelMove panelClose panelRefresh">
			<!-- Start .panel -->
			<div class="panel-body">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators dotstyle center">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"><a href="#">slide1</a>
						</li>
						<li data-target="#carousel-example-generic" data-slide-to="1"><a href="#">slide2</a>
						</li>
						<li data-target="#carousel-example-generic" data-slide-to="2"><a href="#">slide3</a>
						</li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="assets/img/carousel/4.jpg" alt="Image1" style="height:auto,width:100%">
							<div class="carousel-caption">
								<h4>River Crossing</h4>
								<p>Crossing a river by a rope.</p>
							</div>
						</div>
						<div class="item">
							<img src="assets/img/carousel/5.jpg" alt="Image2" style="height:auto,width:100%">
							<div class="carousel-caption">
								<h4>Scenic Beauty</h4>
								<p>Beautiful view and grasses all around.</p>
							</div>
						</div>
						<div class="item">
							<img src="assets/img/carousel/6.jpg" alt="Image3" style="height:auto,width:100%">
							<div class="carousel-caption">
								<h4>Cliff Diving</h4>
								<p>Diving in the river from a cliff.</p>
							</div>
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
		<div class="panel-body">
			<table class="table">
				<tbody>
					<tr>
						<td width="70%">
							<table class="table table-striped">
								<tbody>
									<?php
										$sql1=$mysqli->query("select * from toursinfo where status = '1' LIMIT 2");
										$res=$sql1->num_rows;
										while($row1=$sql1->fetch_array()){
											$tourName=$row1['TourName'];
											$description=$row1['Description'];
											echo "<tr>";
												echo "<td>";
													echo "<h4>".$tourName."</h4><br><p>".$description."</p>";
												echo "</td>";
											echo "</tr>";
										}
									?>
									<tr>
										<td>
											<button type="button" class="btn btn-teal mr5 mb10" data-toggle="modal" data-target="#tripModal">View All Trips</button>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
						<td>
							<center>
								<button type="button" class="btn btn-teal mr5 mb10" data-toggle="modal" data-target="#registerModal">Subscribe to Newsletter</button>
							</center>
							<?php
								$a=$_GET[x];
								if($a==1){
									echo "Thank You. You will now receive our Newsletters.";
								}
								else if($a==2){
									echo "User already exists. Please use a different Email ID.";
								}
								else if($a==3){
									echo "Thank You for subscribing back.";
								}
							?>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="row" style="background:#444">
				<div class="col-xs-offset-1 col-xs-10">
					<center><h4><font color="white">Newsletter Archive</font></h4></center>
					<br>
					<table class="table">
						<?php
							$sql3 = $mysqli->query("SELECT `Subject`,`DateTime` FROM `newsletter`");
							$subjects = array();
							while($row3=$sql3->fetch_array()){
								$month = date(F, strtotime($row3['DateTime']));
								$subject = $row3['Subject'];
								if($subjects[$month]){
									array_push($subjects[$month], $subject);
								}
								else{
									$subjects[$month] = array();
									array_push($subjects[$month], $subject);
								}
							}
							foreach($subjects as $x => $value){
								echo "<tr>";
									echo "<td>";
									echo "<h4><font color='white'>".$x."</font></h4>";
									echo "<ul>";
									foreach($value as $y){
										echo "<li><a href='#newsletterModal' data-id='$y' data-toggle='modal'><font color='white'>".$y."</font></a></li>";
									}
									echo "</ul>";
									echo "</td>";
								echo "</tr>";
							}
						?>
					</table>
				</div>
			</div>
		</div>
		<div class="modal fade" id="newsletterModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title" id="myModalLabel2">Newsletter Content</h4>
					</div>
					<div class="modal-body">
						<div class="col-xs-offset-1 col-xs-10" id="newsletterContent">
						</div>
						<div class="col-sm-offset-10 col-sm-2">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="tripModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title" id="myModalLabel2">All Trips</h4>
					</div>
					<div class="modal-body">
						<table class="table table-striped" border=1>
							<tbody>
								<tr>
									<th>Tour Name</th>
									<th>Tour Description</th>
									<th>Duration</th>
									<th>Package</th>
									<th width="13%">Start Date</th>
								</tr>
								<?php
									$sql2=$mysqli->query("select * from toursinfo where status = '1'");
									$res=$sql2->num_rows;
									while($cnt=$sql2->fetch_array()){
										$tourName=$cnt['TourName'];
										$description=$cnt['Description'];
										$duration=$cnt['Duration'];
										$package=$cnt['Package'];
										$startDate=$cnt['StartDate'];
										echo "<tr>";
											echo "<td>".$tourName."</td>";
											echo "<td>".$description."</td>";
											echo "<td>".$duration."</td>";
											echo "<td>".$package."</td>";
											echo "<td>".$startDate."</td>";
										echo "</tr>";
									}
								?>
							</tbody>
						</table>
						<div class="col-sm-offset-10 col-sm-2">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title" id="myModalLabel2">Subscription Form</h4>
					</div>
					<div class="modal-body">
						<form name="form2" class="form-horizontal" role="form" action="subscribe.php" method="post" onsubmit="return validateDetails()">
							<div class="form-group">
								<label for="name" class="col-sm-2 control-label">Name</label>
								<div class="col-sm-10">
									<input id="name" name="name" type="text" class="form-control required" placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input id="email" name="email" type="email" class="form-control required" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
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
		<script>
			$('#newsletterModal').on('show.bs.modal', function(e) {
				var newsletterId = $(e.relatedTarget).data('id');
				$.ajax({
					type:"POST",
					url:"get_newsletter.php",
					data:{subject:newsletterId},
					success:function(data){
						$("#newsletterContent").html(data);
					}
				});
			});
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
		<script src="assets/plugins/forms/icheck/jquery.icheck.js"></script>
		<script src="assets/plugins/forms/bootstrap-filestyle/bootstrap-filestyle.js"></script>
        <script src="assets/plugins/forms/select2/select2.js"></script>
        <script src="assets/plugins/forms/validation/jquery.validate.js"></script>
        <script src="assets/plugins/forms/validation/additional-methods.min.js"></script>
		<script src="assets/js/jquery.appStart.js"></script>
		<script src="assets/js/app.js"></script>
        <script src="assets/js/pages/blank.js"></script>
		<script src="assets/js/pages/form-validation.js"></script>
	</body>
</html>