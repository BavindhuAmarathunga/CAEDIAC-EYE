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
                           Add Patient Profile
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="Home_index.php">Dashboard</a>
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				
				
				<br> 
				
				<div>
				<img src="images/Profile.jpg" alt="Insert Your Photo here" width="200" height="200">
				<br>

                 <input type="file">
            </div> <br>
			
			<div class="row">
                    <div class="col-lg-6">

                        <form action="individualprofile.php" method="post">
							
                            <div class="form-group">
                                <label> <h4>Your Name </h4></label>
                                <input class="form-control" input type="text" name = "pname" required = "required" placeholder="James Kamal">  
                             </div>
							
							 <div class="form-group">
                                <label> <h4>NIC Number </h4></label>
                                <input class="form-control" input type="text" name = "nic" required = "required" placeholder = "954344454v" >
                            </div>
                              
							 <div class="form-group">
                                <label> <h4>Date of Birth </h4></label>
                                <input class="form-control" input type="date" name = "dob" required = "required" placeholder = "">
                            </div>
							
							<div class="form-group">
                                <label> <h4>Telephone Number </h4></label>
                                <input class="form-control" input type="number" name = "tp" required = "required" placeholder = "0776545654">
                            </div>
                            
							<div class="form-group">
                                <label> <h4>Gender </h4></label>
								<input class="form-control" input type="text" name = "gender" required = "required" placeholder = "Male">
                                
                            </div>
							
							<div class="form-group">
                                <label> <h4>Address </h4></label>
								<input class="form-control" input type="textarea" name = "address" required = "required" placeholder = "Colombo Sri Lanka">
                                
                            </div>
							
														<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Progress Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
				
					<button type="submit" id="submit" class="btn btn-default">Save Profile</button>
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="reset" class="btn btn-default">Delete Profile</button>
            <!-- /.container-fluid -->
</form>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</html>
