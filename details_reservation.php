<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>إبحث عن (WASALNY)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/Route Optimisation.png">
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
        <link rel="stylesheet" type="text/css" media="screen" href="css/reserv_details.css" />
       
</head>
<body>
    

        <?php
        
      
        
        $conn= mysqli_connect('127.0.0.1', 'root' , '',"wasalny" );
//        echo 'connected';
//        echo $seatt;
       $seatt = $_POST['seatt'];
      
       
        $name = $_POST['firstname'];
        $email = $_POST['email'];
       
        $address = $_POST['address'];
        $city = $_POST['city'];
       
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $cardnumber = $_POST['cardnumber'];
        $expmonth = $_POST['expmonth'];
        $expyear = $_POST['expyear'];
        $cvv = $_POST['cvv'];
        $num_seat = $_POST['numseat'];
        //INSERT
        $stmt = $conn->prepare("insert into payment(py_name,py_email,py_adress,py_city,py_state,py_zip,py_card_num,py_end_month,py_end_year,py_cvv,clicked,num_seat) values(?,?,?,?,?,?,?,?,?,?,?,?);");
        $stmt->bind_param("ssssssssssss",$name,$email,$address,$city,$state,$zip,$cardnumber,$expmonth,$expyear,$cvv,$seatt,$num_seat);
        $stmt->execute();
        //SELECT
      //  mysql_select_db("search");
    /*    $selected = array();
        $stmt = $conn->prepare("select* from payment");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row =$result->fetch_assoc()){
            $selected[]=  $row;
        }
        foreach ($selected as $data) {
            $data['clicked'];
          //  $a = array('1.10', 12.4, 1.13);
$ne = implode("", $data);
echo $ne;
        }
        */
        //print_r($selected);
         
        ?>
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
	
		
<!--src="img/wasalny.png -->
<a class="navbar-brand hvr-underline-from-center" href="#"><img class="img-fluid mx-auto d-block" src="img/wasalny.png" alt="error"></a>

</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">

    <li class=" hm"><a href="home.php" data-scroll="#myCarousel">الصفحة الرئيسية</a></li>
    <li class="bt"><a href="#about" data-scroll="#about">  معلومات عنا</a></li>
    <li class="serv"><a href="#sevices" data-scroll="#services">الخدمات</a></li>
    
    <li class="dropdown mr">
        <a href="#" class="dropdown-toggle " data-scroll="" data-toggle="dropdown" role="button" aria-haspopup="true"                aria-expanded="false">المزيد عن<span class="caret" style="color: #fff"></span></a>

        <ul class="dropdown-menu">
            <li ><a href="#sponser" data-scroll="#client">الرُعاة</a></li>
            
            <li><a href="#" data-scroll="#skills">الحلول</a></li>
            <li role="separator" class="divider" ></li>
            <li class=" pr"><a href="#" data-scroll="#price">FAQ</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" data-scroll="#">الرحلات</a></li>
            <li class="ct"><a href="#contact" data-scroll="#contact">التواصل معنا</a></li>
        </ul>
    </li>
    <li class=" tm"><a href="booking.html" data-scroll="#team">إحجز مقعدك </a></li>
    <li class="active"><a href="#" data-scroll="#history">بيانات الحجز</a></li>
    
   
    <li class="log"><a href="index.php" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> <i style="color: tomato" class="fa fa-sign-in"></i> تسجيل الخروج  </a></li>
    </ul>

</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<!-- ------------------------------------------------------------------------------  -->
<ul class="breadcrumb wow fadeInRight">
    <li><a href="home.php"></a>الصفحة الرئيسية</li>
    <li><a href="select_seat.php"> إحجز </a></li>
    <li><a href="#"> بيانات الحجز </a></li>
  
  </ul>
  <!-- ------------------end awesome team--------------------------------- -->
  <section id="reserv_dt" class="reserv_dt">
    <div class="overlay">
        <div class="container">
            <div class="reserv_items">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="gropu">
                            <label for=""> الإســم</label>
                            <input type="text"  value="<?php echo $name; ?>"  readonly>
                        </div>
                        <div class="group">
                        <label for="">الإيميل</label>
                            <input type="text"  value="<?php echo $email; ?>"  readonly> 
                        </div>
                        <div class="group">
                        <label for="">العنوان</label>
                            <input type="text"  value="<?php echo $address; ?>"  readonly> 
                        </div>
                        <div class="group">
                        <label for="">المدينة</label>
                            <input type="text"  value="<?php echo $city; ?>"  readonly> 
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <div class="group">
                            <label for=""> عدد المقاعد</label>
                            <input type="text"  value="<?php echo $num_seat; ?>"  readonly> 
                        </div>
                        <div class="group">
                            <label for="">المقاعد التي تم حجزها</label>
                            <input type="text"  value="<?php echo $seatt; ?>"  readonly> 
                        </div>
                        <!-- <div class="group">
                            <label for="">وقت الذهاب</label>
                            <input id="time1" type="text"  value="<?php echo $sql ?>"  readonly> 
                        </div> -->
                        <div class="group">
                            <label for="">التكلفة</label>
                            <input id="time2" type="text"  value="<?php echo $num_seat * 5?> جنيهات"  readonly> 
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="hint_msg" style="padding: 20px; border-top: 3px dotted #fff">
                <h6 class="text-center" style="font-family: 'Changa', sans-serif;">يرجي أخذ سكرين شوت للبيانات ك مرجع يكمن الاعتماد علية أثناء دخول الأتوبيس
            <i class="fa fa-print fa-2x" style="float: left; font-size: 19px; cursor:pointer" > طباعة </i></h6>
            </div>
        </div>
    </div>
</section>
    <!-- --------------------------start footer ---------------- -->
<footer id="footer" class="footer wow slideInUp">
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
</div>
<!-- --------------------------end footer ---------------- -->

    
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- <script src="js/jquery.nicescroll.min.js"></script> -->
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
    <script src="js/jquery-3.4.0.js"></script>
    <script src="action.js"></script>
    <script src="js/booking.js"></script>
    
    

</body>

</html>
