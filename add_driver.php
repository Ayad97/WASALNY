<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>إبحث عن (WASALNY)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather|PT+Sans|PT+Serif|Sawarabi+Mincho|Source+Sans+Pro" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Changa|Harmattan|Lalezar|Mada|Reem+Kufi" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/adminpage.css" />
    
</head>
<body>
    <!-- ------------------------------------------start navbar--------------------- -->

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top wow fadeInDown">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="navbar-toggler-icon"></span>
                <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
        </button>
    <!--++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <?php


   $conn= mysqli_connect('127.0.0.1', 'root' , '' );
   //mysql_select_db("search");

   if (!$conn){
       echo "<script> alret ('Site not Conected!!!!!!! , pleas try again')</script>";
      // echo 'not conected!!!!!!!';
       
   }
 else {
     echo "<script> alret ('Site Conected..')</script>";
     //echo 'conected!!!!!!!';

   }
   if (!mysqli_select_db($conn, 'wasalny')){
       echo "<scrip> alret ('Site not Selected!!!!!!! , pleas try again')</script>";
      // echo 'not selected!!!!!!!';
   }
 else {
     echo "<script> alret ('Site Selected..')</script>";
     //echo 'selected!!!!!!!';

   }
if(isset($_POST['submit'])) {
    
    $d_name =filter_input(INPUT_POST,  'd_name') ;
    $d_age =filter_input(INPUT_POST,  'd_age') ;
    $d_phone =filter_input(INPUT_POST,  'd_phone') ;
    $d_email =filter_input(INPUT_POST,  'd_email') ;
    $d_password =filter_input(INPUT_POST,  'd_password') ;
    $d_nid =filter_input(INPUT_POST,  'd_nid') ;
    $d_license =  filter_input(INPUT_POST,  'd_license') ;
    $login_as=$_POST['login_as'];
 
  
  
   

     $sql = "insert into users(d_name, d_age , phone , email , password, d_nid , d_license , login_as) values ('$d_name' , '$d_age' , '$d_phone', '$d_email' ,'$d_password', '$d_nid' , '$d_license','$login_as')" ;
 
    if (!MYsqli_query($conn,$sql)){
       echo '<script> alret ("site upload fail , pleas try again!!")</script>';

    }   
 else {
        echo '<script> alret ("site upload successfully..")</script>';
        header("Location:adminpage.php");
    }   
    
    }

    ?>
<!-- --------------------------start footer ---------------- -->
<!-- <footer id="footer" class="footer wow slideInUp">
    <div class="container">
        <div class="foot-item">
            <div class="row">
                <div class="col-md-4">
                        <h5 class="text-center">تواصـل معنـا   <li class="fa fa-angle-double-down" style="color:#fd5f00 "></li></h5>
                        <hr class="ln">
                        <div class="social">
                        <ul class="social-hv">
                          <i class="fa fa-facebook social-act fac-hv" aria-hidden="true"></i>
                          <i class="fa fa-linkedin social-act linked-hv" aria-hidden="true"></i>
                          <i class="fa fa-twitter social-act twt-hv" aria-hidden="true"></i>
                          <i class="fa fa-instagram social-act insta-hv" aria-hidden="true"></i>
                          <i class="fa fa-youtube social-act yt-hv" aria-hidden="true"></i>
                      </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="addr">
                        <i class="fa fa-map-marker fa-2x  wow fadeInLeft"></i>

                        <div class="addr-info">
                            <i class="fa fa-map-marker"> المنوفية / مصر  </i>
                      </div>
                        <i class="fa fa-phone fa-2x  wow fadeInLeft"></i>

                        <div class="addr-info">
                                <i class="fa fa-phone"> +20: 5061019 </i>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-default book"><a href="#"> إحجز مقعد الأن</a></button>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyrigh text-center wow fadeInRight">
      حقوق النشر &copy; 2019 <span>لفريق وصلني</span>
</div> -->
<!-- --------------------------end footer ---------------- -->

    
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/scripte.js"></script>
    <script src="js/adminpage.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
</body>
</html>