
<?php include ("db.php");
$pid=$_SESSION["UserId"];
$sql = "SELECT * FROM `individualprofiledetails`";
$result = $conn->query($sql);
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
    <link rel="stylesheet" type="text/css" href="css/footer.css"/>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    

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
                            Patient Profile
                            
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="Home_index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> <a href="viewindividualprofile.php"> Add Patient Profile </a>
                            </li>
                            <li><p>                 </p></li>
                             <li>          <form action="#.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form></li>
                        </ol>
     
                    </div>
                </div>
                <!-- /.row -->
				
				<table class="table">
						  <thead>
							<tr>
								<th>ID</th>
							  <th>Patient Name</th>
							  <th>NIC Number</th>
							  <th>Date Of Birth</th>
							  <th>Telephone Number</th>
							  <th>Gender</th>
							  <th>Address</th>
			

							</tr>
						  </thead>






						  <tbody>
                          <?php if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) { ?>
                          <tr>
							  <th scope="row"><?php echo $row['pid']; ?></th>
							  <td><?php echo $row['pname']; ?> </td>
							  <td><?php echo $row['pnic']; ?></td>
							  <td><?php echo $row['pdob']; ?></td>
							  <td><?php echo $row['ptp']; ?></td>
							  <td><?php echo $row['gender']; ?></td>
							  <td><?php echo $row['address']; ?></td>
						

							  <td> <button type="button" class="btn btn-sm btn-success" onClick = "window.location.href='viewindividualprofile.php' ">Edit Info </button> </td>
							</tr>
                              <?php

                          }
                          } else {
                              //echo "0 results";
                          } ?>
						  </tbody>
						</table>
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
<style type="text/css">
.topnav .search-container button:hover {
  background: #ccc;
   position: absolute;
    right: 10px;
}
</style>
</body>


<!-- Site footer -->
    <!-- <footer class="site-footer">
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
</footer>
 -->
</html>
