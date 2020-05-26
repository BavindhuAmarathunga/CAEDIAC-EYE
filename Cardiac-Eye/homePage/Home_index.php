<?php include ("db.php");

$sql = "SELECT * FROM `users`";
$result = $conn->query($sql);
$users =$result->num_rows;


$sql = "SELECT * FROM `moh`";
$result = $conn->query($sql);
$moh =$result->num_rows;

$sql = "SELECT * FROM `patients`";
$result = $conn->query($sql);
$patients =$result->num_rows;

$sql = "SELECT * FROM `nonpatients`";
$result = $conn->query($sql);
$nonpatients =$result->num_rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Cardiac-Eye</title>
 <link rel="icon" type="image/png" href="images/logoicon.ico"/> 

        <!-- footter css -->
    <link rel="stylesheet" type="text/css" href="css/footer.css" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Home_index.php">Cardiac-Eye</a>
                <img id="logo_Navi" src="images/logo.png" alt="Smiley face" height="50" width="40">
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Ctrl Intelligence<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                       
                         <li>
                            <a href="../index.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="Home_index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="parameterresults.php" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-users"></i> Parameter Results</a>
                        
                    </li>
                    <li>
                        <a href="patientprofile.php" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-users"></i> Patient Profile</a>
                        
                    </li>
                    
                    <li>
                        <a href="history.php" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-users"></i> History</a>
                        
                    </li>
                    
                     <li>
                        <a href="#" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-users"></i> Real Time ECG</a>
                        
                    </li>

                    <li>
                        <a href="about.php" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-users"></i> About Cardiac Eye</a>
                        
                    </li>
                    
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        
        

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i>  <a href="Home_index.php">Dashboard</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                
                <!-- /.row -->

               <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-heart-o fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"></div>
                                <div>Heart Disease <br>Prediction</div>
                            </div>
                        </div>
                    </div>
                        <div class="panel-footer">
                            <span class="pull-left">Predict it before<br>it's too late</span>
                            <span class="pull-right"></span>
                            <div class="clearfix"></div>
                        </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                        <div class="col-xs-3">
                                <i class="fa fa-history fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"></div>
                                <div>Patient History</div>
                            </div>
                        </div>
                    </div>
                        <div class="panel-footer">
                            <span class="pull-left">Your details are <br>safe with us</span>
                            <span class="pull-right"></span>
                            <div class="clearfix"></div>
                        </div>
                </div>
            </div>
            
             <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <img src="images/heartbeat-solid.svg" style="float:left; width:70px;height:70px">
                               <!-- <i class="fas fa-heartbeatfa-5x"></i> -->
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"></div>
                                <div>Real Time ECG</div>
                            </div>

                            </div>
                    </div>
                    
                        <div class="panel-footer">
                            <span class="pull-left">Set the device<br>Get the report</span>
                            <span class="pull-right"></span>
                            <div class="clearfix"></div>
                        </div>
                    
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            
                            <div class="col-xs-3">
                                <i class="fa fa-laptop fa-2x"></i>
                                &nbsp;&nbsp;<i class="fa fa-mobile fa-2x"></i><br>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div>Multi Platformed</div>
                            </div>  
                        </div>
                    </div>
                    
                        <div class="panel-footer">
                            <span class="pull-left">We support both Android <br>and Windows</span>
                            <span class="pull-right"></span>
                            <div class="clearfix"></div>
                        </div>
                </div>
            </div>
        </div>
               
               
              <div class="slider">


            <div class="fling-minislide">
                <img src="https://thumbs.dreamstime.com/z/heart-attack-symptoms-preventions-poster-text-vector-chest-pain-swelling-unconsciousness-shortness-control-food-consumption-125687949.jpg" alt="Slide 4" />
                <img src="https://assets.bupa.co.uk/~/media/images/healthmanagement/topics/555-369/how-to-spot-heart-attack.jpg" alt="Slide 3" />

                <img src="https://i.pinimg.com/originals/a5/2b/59/a52b597d33ad94bea5391d2b78ef7e19.png" alt="Slide 2" />

                <img src="https://www.verywellhealth.com/thmb/yJswtLgVF9H8543QbtwuJC4LZD0=/900x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/overview-of-heart-disease-4160961_final-152f46073f2242999b771e409973825b.png" alt="Slide 1" />
            </div>


        </div>
                        </div>
     
                    </div>
            <!-- /.container-fluid -->

       
    <!-- jQuery -->
     <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/flot-data.js"></script>
</body>

<!-- Site footer -->
<!--     <footer class="site-footer">
      <div class="container1">
        <div class="row">
          <div class="col-">
            <h6 class="about-justify">About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">Ctrl Intelligence</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer> -->

</html>
