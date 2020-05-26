<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Cardiac-Eye</title>
<link rel="icon" type="image/png" href="images/logoicon.ico" /> 

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
                        <a href="about.php" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-users"></i> About Cardiac-Eye</a>
                        
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
                            About Cardiac-Eye
                           
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="Home_index.php">Dashboard</a>
                            </li>
                            
                        </ol>
                    </div>
           
	  

	<div class = "header_stats p">
	
	<article>
    <h4>Welcome to Cardiac-Eye</h4>
                   <!-- <p> -->
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cardiac Eye is a heart disease prediction system which is developed by a group of Undergraduates from University of Westminster<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;affiliated with Informatics Institutef of Technology. <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As the name refers Cardiac-Eye is heart based data science project which focuses on predicting patients who have the ability to have a <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coronary heart disease in the future. <br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Key features,<br>
                        <ul style="list-style-type:disc;">
                            <li>Prediction for the heart disease by the use of user inputs</li>
                            <li>Stores all the entered medical reports to a database</li>
                            <li>Ability to view previous medical data</li>
                            <li>An IoT ECG device to track ECG</li>
                            <li>Real-time ECG tracker</li>
                        </ul>
                   <!-- </p> -->
                   <div >
                      <img src="images/logo.jpeg" style="float:left; width:680px;height:500px"  >
                   </div>

        

        
        </article>
				
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
