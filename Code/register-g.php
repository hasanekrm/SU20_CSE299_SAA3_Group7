<?php
$Send='Create your Free Account Here.';
$error='';
$user_id='';
if(isset($_POST['Submit'])){
  $g_user_id=uniqid();
      include('Config.php');
      $name =  $_POST['name'];
      $email =  $_POST['email'];
      $phone =  $_POST['phone'];
      $pass =  $_POST['password'];
      $conpass =  $_POST['con-password'];
      
      if ($pass == $conpass) {
          $sql = "INSERT INTO `g_user`(`g_user_id`,`name`, `email`, `password`, `phone`) VALUES ('$g_user_id','".mysqli_real_escape_string($db,$name)."','$email','".mysqli_real_escape_string($db,$pass)."','$phone')";
          if ($db->query($sql) == TRUE) {
          
            $Send="SignUp Successful! <br> Now Login to get special services. ";
            } 
        else {
                $Send="SignUp Unsuccessful! <br> Something wrong with your input. ";
            }
            
      }
      else{
        $Send="Check your Password Again.";
      }

      
  $db->close();
      
    

    }

?> 
<!DOCTYPE html>
<html class="load-full-screen" lang="en">
    

<head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#f9676b">
        <!-- Favicon -->
        <link type="image/x-icon" rel="shortcut icon" href="assets/images/vb_icon.png" />
        <!-- Meta Title -->
        <title>XXXXXXX-SignUp</title>
        <!-- Meta Description  -->
        <meta name="description" content="Vromon Bilash - Best site for travelers and travel agency in Bangladesh. Here travelers can find their perfect tour plan, best travel agency and best deal. And travel agency can also run their service very easily and happily. So what are you waitting for, Let's descover the beauty of Bangladesh.">
       

        <!-- Google Font -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
        <!-- Font Awesome -->
        <link href="assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <!-- Animate css -->
        <link href="assets/libs/animate/animate.min.css" rel="stylesheet">
        <!-- Crousel css -->
        <link href="assets/libs/owl.carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/libs/owl.carousel/owl-carousel-theme.min.css" rel="stylesheet">
        <!-- Bootstrap css -->
        <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme css --> 
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>

        <!-- Switch Style css -->
        <link href="assets/switch-style/switch-style.css" rel="stylesheet" type="text/css"/>
        <!-- Switch Color Style css -->
        <link href="#" data-style="styles" rel="stylesheet">
    </head>
    <body class="load-full-screen">

        <div class="section-loader">
            <div class="loader">
                <div></div>
                <div></div> 
            </div>
        </div>

        <div class="site-wrapper">
            <!-- Start Navbar Section -->
            <section>
                <div class="transparent-menu">
                    <div class="container nav-container">
                        <!-- Start Header -->
                        <div class="navbar-wrapper">
                            <div class="navbar navbar-default navbar-expand-lg navbar-light" role="navigation">
                                <a class="navbar-brand logo" href="index.php"> XXXXXXX</a>
                                <!-- Start Responsive Menu Button -->
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                                    <i class="fa fa-navicon"></i>
                                </button>
                                <!-- End Responsive Menu Button -->
                                <!-- Start Menu -->  
                                <div class="navbar-collapse collapse">
                                    <ul class="navbar-nav navbar-right ml-auto">
                                        <li class="dropdown nav-item">
                                            <a class="toggle nav-link" href="#" data-toggle="dropdown">HOME </a>
                                            
                                        </li>
                                        <li class="dropdown mega nav-item">
                                            <a class="toggle nav-link" href="#" data-toggle="dropdown">RESORTS</a>
                                        </li>
                                        <li class="dropdown mega nav-item">
                                            <a class="toggle nav-link" href="#" data-toggle="dropdown">PACKAGES</a>
                                            
                                        </li>
                                        
                                        <li class="dropdown mega nav-item">
                                            <a class="toggle nav-link" href="#" data-toggle="dropdown">CAR</a>
                                            
                                        </li>
                                        <li class="dropdown nav-item">
                                            <a class="toggle nav-link" href="#" data-toggle="dropdown">BLOG </a>
                                            
                                        </li>
                                        
                                        <li class="nav-item"><a class="nav-link" href="contact-us.html">CONTACT US</a></li>
                                    </ul>
                                </div>
                                <!-- End Menu -->  
                            </div>
                        </div>
                        <!-- End Header -->
                    </div>
                </div>
                <!-- End Menu container -->
            </section>
            <!-- End Navbar Section -->



                <br>
                        <div class="col-sm-12 text-center">
                            <h3>Are You Love to Travel?</h3>
                            <center><p> <font color="black" ><span class="Send"><?php echo $Send;   ?></span></font> </p></center>  
                            <center><h6> <font color="black" ><span class="Send"><?php echo $error;   ?></span></font> </h6></center>
                        </div>
                   
            
            <!-- End Page Title Section -->


            <!-- Start Login Section  -->
            <section class="section-wrapper booking-detail">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-6">
                            <div class="login-box">
                                <h4>Sign up</h4>
                                <div class="booking-form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Start Form for Login  -->
                                            <form method="POST">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input class="form-control" type="text" name="name" required autocomplete="off" placeholder="Enter Your Full Name">
                                                </div>
                                                 <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="email" name="email"
                                                        placeholder="Enter Valid gmail/yahoo address"
                                                        pattern=".+@gmail.com||.+@yahoo.com" size="30" required /><span class="validity"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                        <input class="form-control" type="phone" name="phone"
                                                        placeholder="Ex: 01X12345678"
                                                        pattern="[0]+[1]+[7/8/9/6/5/3]+[0-9]{8}" required /><span class="validity"></span>
                                                    
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input class="form-control" type="password" name="password"  pattern=".{8,}" required autocomplete="off" placeholder="Enter Password [Eight or more characters]"><span class="validity"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input class="form-control" type="password" name="con-password" required autocomplete="off" placeholder="Confirm Password">
                                                </div>
                                                <div class="form-group">
                                                    <label><input type="checkbox" required autocomplete="off" name="remember"> I agree to Terms & Conditions </label>
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-theme btn-block md-btn text-uppercase" name="Submit" type="submit">Register</button>
                                                </div>

                                            </form>
                                            <!-- End Form for Login  -->
                                            <div class="form-group">
                                                <label class="form-text text-muted">Already have an account?</label>
                                                <a class="btn btn-theme md-btn btn-block text-uppercase" href="glogin.php">Login</a>
                                            </div>
                                            
                                        </div>
                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Login Section  -->







            <!-- Start Footer Section -->
            <section class="section-wrapper pb-0">
                <footer class="main-footer">
                   

                    <div class="main-footer-nav">
                        <div class="container">
                            <a href="about_us.php"><center><h5>About Us</h5></center></a>
                                    
                                    <center><p>Copyright &copy; XXXXXXX.com . All Rights Reserved.</p></center>
                             
                        </div>
                    </div>
                    
                </footer>
            </section>

        </div>
        <!-- End Site Wrapper -->


 
        <!-- Switch Style End -->

        <!-- Load Scripts -->
        <!-- jquery --> 
        <script src="assets/libs/jquery/jquery-2.2.4.min.js"></script>
        <!-- jquery UI --> 
        <script src="assets/libs/jquery-ui/jquery-ui.min.js"></script>
        <!-- Respond --> 
        <script src="assets/libs/respond/respond.min.js"></script>
        <!-- Bootstrap js -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap Timepicker js -->
        <script src="assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <!-- owlcarousel js -->
        <script src="assets/libs/owl.carousel/owl.carousel.min.js"></script>
        <!-- wow js -->
        <script src="assets/libs/wow/wow.min.js"></script>
        <!--internal js--> 
        <script src="assets/js/internal.js"></script>

        <!-- Switch Style js -->
        <script src="assets/switch-style/switch-style.js"></script>

    </body>
</html>