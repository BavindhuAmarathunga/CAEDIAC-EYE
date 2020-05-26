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

   <div id="wrapper">
    <!-- Navigation -->
    <app-nav-bar></app-nav-bar>
    <div id="page-wrapper">
       <div class="container-fluid">
          <!-- Page Heading -->
          <div class="row">
             <div class="col-lg-12">
                <h1 class="page-header">
                   Parameter Results
                </h1>
                <ol class="breadcrumb">
                   <li>
                      <i class="fa fa-dashboard"></i>  <a href="Home_index.php">Dashboard</a>
                   </li>
                </ol>
             </div>
          </div>
          <!-- /.row -->
          <div>
             <form class="form-horizontal" role="form">
                <div class="form-group">
                   <div class="col-md-12">
                      <label for="pname" class="col-md-3" style="padding-left:12%;padding-top:15px;">
                      Patient - Name:
                      </label>
                      <div class="col-md-7">
                         <input type="text" id="pname" class="form-control"  placeholder="Enter patient name" style="border-radius:7px" required="">
                      </div>
                      <div class="col-md-2">
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-md-12">
                      <label for="age" class="col-md-3" style="padding-left:12%;padding-top:15px;">
                      Age:
                      </label>
                      <div class="col-md-7">
                         <input type="number" id="age" class="form-control"  placeholder="Enter age" style="border-radius:7px" required="">
                      </div>
                      <div class="col-md-2">
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-md-12">
                      <label for="Gender" class="col-md-3" style="padding-left:12%;padding-top:15px;">
                      Gender:
                      </label>
                      <div class="col-md-7">
                         <input type="radio" name="gender" id="male" value="male" checked=""> Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                         <input type="radio" name="gender" id="female" value="female"> Female<br>
                      </div>
                      <div class="col-md-2">
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-md-12">
                      <label for="Chelestrol" class="col-md-3" style="padding-left:12%;padding-top:15px;">
                      Chelestrol - Total:
                      </label>
                      <div class="col-md-7">
                         <input type="text" id="chelestrolTot" class="form-control"  placeholder="Enter Chelestrol Total" style="border-radius:7px" required="">
                      </div>
                      <div class="col-md-2">
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-md-12">
                      <label for="Triglycerides" class="col-md-3" style="padding-left:12%;padding-top:15px;">
                      Triglycerides:
                      </label>
                      <div class="col-md-7">
                         <input type="text" id="triglycerides" class="form-control"  placeholder="Enter triglycerides" style="border-radius:7px" required="">
                      </div>
                      <div class="col-md-2">
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-md-12">
                      <label for="holestrol - H.D.L" class="col-md-3" style="padding-left:12%;padding-top:15px;">
                      Cholestrol - H.D.L:
                      </label>
                      <div class="col-md-7">
                         <input type="text" id="chelestrolHDL" class="form-control"  placeholder="Enter Cholestrol - H.D.L" style="border-radius:7px" required="">
                      </div>
                      <div class="col-md-2">
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-md-12">
                      <label for="Cholestrol - L.D.L" class="col-md-3" style="padding-left:12%;padding-top:15px;">
                      Cholestrol - L.D.L:
                      </label>
                      <div class="col-md-7">
                         <input type="text" id="chelestrolLDL" class="form-control"  placeholder="Enter Cholestrol - L.D.L" style="border-radius:7px" required="">
                      </div>
                      <div class="col-md-2">
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-md-12">
                      <label for="Cholestrol - V.L.D.L" class="col-md-3" style="padding-left:12%;padding-top:15px;">
                      Cholestrol - V.L.D.L:
                      </label>
                      <div class="col-md-7">
                         <input type="text" id="chelestrolVLDL" class="form-control"  placeholder="Enter Cholestrol - V.L.D.L" style="border-radius:7px" required="">
                      </div>
                      <div class="col-md-2">
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-md-12">
                      <label for="CHOL / HDL" class="col-md-3" style="padding-left:12%;padding-top:15px;">
                      CHOL / HDL:
                      </label>
                      <div class="col-md-7">
                         <input type="text" id="cholHdl" class="form-control"  placeholder="Enter CHOL / HDL" style="border-radius:7px" required="">
                      </div>
                      <div class="col-md-2">
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-md-12">
                      <label for="LDL / HDL" class="col-md-3" style="padding-left:12%;padding-top:15px;">
                      LDL / HDL:
                      </label>
                      <div class="col-md-7">
                         <input type="text" id="ldlHdl" class="form-control"  placeholder="Enter LDL / HDL" style="border-radius:7px" required="">
                      </div>
                      <div class="col-md-2">
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-md-12">
                      <label for="BloodPressure" class="col-md-3" style="padding-left:12%;padding-top:15px;">
                      Blood Pressure:
                      </label>
                      <div class="col-md-7">
                         <input type="text" id="bloodPressure" class="form-control"  placeholder="Enter Blood Pressure" style="border-radius:7px" required="">
                      </div>
                      <div class="col-md-2">
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-md-12">
                      <label for="BMI" class="col-md-3" style="padding-left:12%;padding-top:15px;">
                      BMI:
                      </label>
                      <div class="col-md-7">
                         <input type="text" id="bmi" class="form-control"  placeholder="Enter BMI" style="border-radius:7px" required="">
                      </div>
                      <div class="col-md-2">
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-md-12">
                      <label for="Concentration" class="col-md-3" style="padding-left:12%;padding-top:15px;">
                      Continine Concentration:
                      </label>
                      <div class="col-md-7">
                         <input type="text" id="concentration" class="form-control"  placeholder="Enter Continine Concentration" style="border-radius:7px" required="">
                      </div>
                      <div class="col-md-2">
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-md-12">
                      <label for="Insuline" class="col-md-3" style="padding-left:12%;padding-top:15px;">
                      Insuline Resistance:
                      </label>
                      <div class="col-md-7">
                         <input type="text" id="insuline" class="form-control"  placeholder="Enter Insuline Resistance" style="border-radius:7px" required="">
                      </div>
                      <div class="col-md-2">
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-md-12">
                      <label for="HeartRate" class="col-md-3" style="padding-left:12%;padding-top:15px;">
                      Heart Rate:
                      </label>
                      <div class="col-md-7">
                         <input type="text" id="heartRate" class="form-control"  placeholder="Enter Heart Rate" style="border-radius:7px" required="">
                      </div>
                      <div class="col-md-2">
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <div class="col-md-12">
                      <div class="row text-center" style="padding-top: 2%">
                         <button id="submit" type="submit"class="btn btn-lg btn-success">Calculate Results</button>
                      </div>
                   </div>
                </div>
             </form>
          </div>
       </div>
       <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
 </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

<!-- Site footer --><!-- 
    <footer class="site-footer">
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


<script type="text/javascript">


    $( "form" ).on( "submit", function( event ) {

        event.preventDefault();

      
        var age = document.getElementById("age").value;
        var gender = "";

        if (document.getElementById('male').checked) {
            gender = "1";
        }
        else if (document.getElementById('female').checked){
            gender = "0";
        }

        var chelestrolTot = document.getElementById("chelestrolTot").value;
        var triglycerides = document.getElementById("triglycerides").value;
        var chelestrolHDL = document.getElementById("chelestrolHDL").value;
        var chelestrolLDL = document.getElementById("chelestrolLDL").value;
        var chelestrolVLDL = document.getElementById("chelestrolVLDL").value;
        var cholHdl = document.getElementById("cholHdl").value;
        var ldlHdl = document.getElementById("ldlHdl").value;
        var bloodPressure = document.getElementById("bloodPressure").value;
        var BMI = document.getElementById("bmi").value;
        var concentration = document.getElementById("concentration").value;
        var insuline = document.getElementById("insuline").value;
        var heartRate = document.getElementById("heartRate").value;
        var pname = document.getElementById("pname").value;
        window.location.href = "AlgoPart/receive.php?c1=" + age + "&c2=" + gender+ "&c3=" + chelestrolTot+ "&c4=" + triglycerides+ "&c5=" + chelestrolHDL+ "&c6=" + chelestrolLDL+ "&c7=" + chelestrolVLDL+ "&c8=" + cholHdl+ "&c9=" + ldlHdl+ "&c10=" + bloodPressure+ "&c11=" + concentration+ "&c12=" + insuline+ "&c13=" + heartRate + "&c14=" + BMI+ "&c15=" + pname;

        var data = {
                    "age":age,
                    "gender":gender,
                    "chelestrolTot":chelestrolTot,
                    "triglycerides":triglycerides,
                    "chelestrolHDL":chelestrolHDL,
                    "chelestrolLDL":chelestrolLDL,
                    "chelestrolVLDL":chelestrolVLDL,
                    "cholHdl":cholHdl,
                    "ldlHdl":ldlHdl,
                    "bloodPressure":bloodPressure,
                    "concentration":concentration,
                    "insuline":insuline,
                    "heartRate":heartRate,
                  }
        data=JSON.stringify(data);          
        console.log(data);          
        $.ajax({
            type: "POST",
            url: './receive.php',
            data: {data:data},
            success: function(data)
            {
               console.log("success");
            }
        });
    });


</script>
</html>
