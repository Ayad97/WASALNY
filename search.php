<!DOCTYPE html>
<html>
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
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="css/booking.css"/>
       
</head>
    <body>
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

            $b_to =$_POST["to_"];
            $b_from =$_POST["from_"] ;
            $b_time =$_POST["datetime_1"] ;
            $b_period =$_POST["datetime_2"];
            $b_date =$_POST["date_"] ;
            // $s_simg =  "img/".basename($_FILES["simg"] ["name"]) ;

            $sql = "insert into available_buses(b_to , b_from , b_time , b_period , b_date) values ('$b_to' , '$b_from' , '$b_time', '$b_period', '$b_date' )" ;

            if (!MYsqli_query($conn,$sql)){
            echo '<script> alret ("site upload fail , pleas try again!!")</script>';   
            }
        else {
                echo '<script> alret ("site upload successfully..")</script>';
            }
                   
            }
            ?>
             <!-- ------------------------------------------start navbar--------------------- -->

<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="navbar-toggler-icon"></span>
                <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
        </button>

<a class="navbar-brand hvr-underline-from-center" href="#"><img class="img-fluid mx-auto d-block" src="img/wasalny.png" alt="error"></a>

</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">

    <li class=" hm"><a href="home.php" data-scroll="#myCarousel">الصفحة الرئيسية</a></li>
    <li class="bt"><a href="#about" data-scroll="#about"> معلومات عنا</a></li>
    <li class="serv"><a href="#sevices" data-scroll="#services">الخدمات </a></li>
    
    <li class="dropdown mr">
        <a href="#" class="dropdown-toggle " data-scroll="" data-toggle="dropdown" role="button" aria-haspopup="true"                aria-expanded="false">المزيد عن <span class="caret" style="color: #fff"></span></a>

        <ul class="dropdown-menu">
            <li class="pr"><a href="faq.html" data-scroll="#price">FAQ</a></li>
            <li><a href="histoery.html" data-scroll="#history">تاريخنا</a></li>
            <li><a href="#" data-scroll="#skills">الحلول</a></li>
            <li role="separator" class="divider" ></li>
            <li><a href="#sponser" data-scroll="#client">الرُعاة</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" data-scroll="#">الرحلات</a></li>
        </ul>
    </li>
    <li class="active tm"><a href="booking.html" data-scroll="#team">إحجز مقعدك </a></li>
    <li class="ct"><a href="#contact" data-scroll="#contact">التواصل معنا</a></li>
    <li class="log"><a href="index.php" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> <i style="color: tomato" class="fa fa-sign-in"></i> تسجيل الخروج  </a></li>
    </ul>

</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<!-- ------------------------------------------------------------------------------  -->

<ul class="breadcrumb">
    <li><a href="home.php">الصفحة الرئيسية</a></li>
    <li><a href="booking.html">إحجز مقعدك</a></li>
    <li ><a href="#" style="color: orangered"> مواعيد الأتوبيسات</a></li>
    <li ><a href="#" style="color: orangered"> الساعة <?php echo $b_time ?> </a></li>
    <li value=""><a href="#" style="color: orangered"><?php echo $b_period ?> </a></li>
</ul>
  <!-- ------------------------------------------------------------------------------  -->
 <?php 
    
    if(( ( $b_to == "محطة طنطا" ) || ( $b_to =="محطة صناديد") || ( $b_to =="محطة بابل")||( $b_to =="محطة زنارة")||
    ($b_to=="محطة بتبس")||( $b_to =="محطة ميت_موسي"))&& (($b_from == "محطة مجمع الكليـات") || ($b_from =="محطة كلية التربية"))&& ($b_time =="7")&&($b_period == "AM")) { ?>
        
        <section id="buses" class="buses">
        <div class="overlay">
            <div class="container">
                <div class="bus-items">
                    <div class="row row-eq-heigh">
                    <div class="col-xs-12 col-md-4">
                                <div class="bus-details" id="bus1">
                                        <img class="img-fluid mx-auto d-block" src="img/AS.png" alt="img-cash">
                                    <div class="bus-info">
                                        <ul>
                                            <li><b>الشركـة : </b>أتوبيسي</li>
                                            <li><b>سعر التذكرة :</b>5 جنيهات </li>
                                            <li><b>القيام :</b>7:00 صباحا</li>
                                            <li><b>الوصـول :</b>7:45 صباحا</li>
                                            <li><b>من : </b>طنطا</li>
                                            <li><b>إلـي :</b>شبين الكوم</li>
                                            
                                            <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                        </ul>
                                        <div id="more">
                                        <ul>
                                                <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة طنطا</b>--> 7:00 صباحاً</li>
                                                    <li><b>محطة بابل</b>--> 7:20 صباحاً</li>
                                                    <li><b>محطة زنارة</b>--> 7:25 صباحاً</li>
                                                    <li><b>محطة ميت موسي</b>--> 7:35 صباحاً</li>
                                                    <li><b>الوصـول</b> --> 7:45 صباحاً</li>
                                                    <li><b></b></li>
                                                    <li><b></b></li>
                                                </ul></li>
                                                <hr style="background: #fd5f00;margin-left: 5%; ">
                                        </ul>
                                    </div>
                                    <!-- <span id="dots">...</span> -->
                                    <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                    </div>
                                </div>
                            </div>
                        <!-- ----------------------------------------------------------------------------------- -->
                        <div class="col-xs-12 col-md-4">
                                <div class="bus-details" id="bus2">
                                        <img class="img-fluid mx-auto d-block" src="img/GB.png" alt="img-cash">
                                    <div class="bus-info">
                                        <ul>
                                            <li><b>الشركـة : </b>جو باص</li>
                                            <li><b>سعر التذكرة :</b>4 جنيهات </li>
                                            <li><b>القيام :</b>7:30 صباحا</li>
                                            <li><b>الوصـول :</b>8:20 صباحا</li>
                                            <li><b>من : </b>طنطا</li>
                                            <li><b>إلـي :</b>شبين الكوم</li>
                                            
                                            <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                        </ul>
                                        <div id="more">
                                        <ul>
                                                <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة طنطا</b>--> 7:30 صباحاً</li>
                                                    <li><b>محطة صناديد</b>--> 7:40 صباحاً</li>
                                                    <li><b>محطة بابل</b>--> 7:50 صباحاً</li>
                                                    <li><b>محطة زنارة</b>--> 7:55 صباحاً</li>
                                                    <li><b>محطة بتبس</b>--> 8:00 صباحاً</li>
                                                    <li><b>محطة ميت موسي</b>--> 8:10 صباحاً</li>
                                                    <li><b>الوصـول</b> --> 8:20 صباحاً</li>
                                                </ul></li>
                                                <hr style="background: #fd5f00;margin-left: 5%; ">
                                        </ul>
                                    </div>
                                    <!-- <span id="dots">...</span> -->
                                        <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                    </div>
                                </div>
                            </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                        <div class="col-xs-12 col-md-4">
                                <div class="bus-details" id="bus3">
                                        <img class="img-fluid mx-auto d-block" src="img/AS.png" alt="img-cash">
                                    <div class="bus-info">
                                        <ul>
                                            <li><b>الشركـة : </b>أتوبيسي</li>
                                            <li><b>سعر التذكرة :</b>7 جنيهات </li>
                                            <li><b>القيام :</b>7:30 صباحا</li>
                                            <li><b>الوصـول :</b>8:00 صباحا</li>
                                            <li><b>من : </b>طنطا</li>
                                            <li><b>إلـي :</b>شبين الكوم</li>
                                            <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                        </ul>
                                        <div id="more">
                                        <ul>
                                                <li class="text-center"><b style="color: #fd5f00">المحطات</b><ul>
                                                    <li><b>محطة طنطا</b>--> 7:30 صباحاً</li>
                                                    <li><b>محطة زنارة</b>--> 7:45 صباحاً</li>
                                                    <li><b>الوصـول</b> --> 8:00 صباحاً</li>
                                                    <li><b></b></li>
                                                    <li><b></b></li>
                                                    <li><b></b></li>
                                                    <li><b></b></li>
                                                </ul></li>
                                                <hr style="background: #fd5f00;margin-left: 5%; ">
                                        </ul>
                                    </div>
                                    <!-- <span id="dots">...</span> -->
                                    <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                    </div>
                                </div>
                            </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                    </div>
                </div>
        </div>
    </section>
    <?php } 
    else if((  ( $b_to == "محطة طنطا" ) || ( $b_to =="محطة صناديد") || ( $b_to =="محطة بابل")||( $b_to =="محطة زنارة")|| 
    ($b_to =="محطة بتبس")||( $b_to =="محطة ميت_موسي"))&& (($b_from =="محطة مجمع الكليـات") || ($b_from =="محطة كلية التربية"))&&($b_time =="8")&&($b_period == "AM"))
    { ?>
    <section id="buses" class="buses">
        <div class="overlay">
            <div class="container">
                <div class="bus-items">
                    <div class="row row-eq-heigh">
                          <!-- ----------------------------------------------------------------------------------- -->
                          <div class="col-xs-12 col-md-4">
                                <div class="bus-details" id="bus4">
                                        <img class="img-fluid mx-auto d-block" src="img/GB.png" alt="img-cash">
                                    <div class="bus-info">
                                        <ul>
                                            <li><b>الشركـة : </b>جو باص</li>
                                            <li><b>سعر التذكرة :</b>5 جنيهات </li>
                                            <li><b>القيام :</b>8:00 صباحا</li>
                                            <li><b>الوصـول :</b>8:50 صباحا</li>
                                            <li><b>من : </b>طنطا</li>
                                            <li><b>إلـي :</b>شبين الكوم</li>
                                            
                                            <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                        </ul>
                                        <div id="more">
                                        <ul>
                                                <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة طنطا</b>--> 8:00 صباحاً</li>
                                                    <li><b>محطة بابل</b>--> 8:20 صباحاً</li>
                                                    <li><b>محطة زنارة</b>--> 8:30 صباحاً</li>
                                                    <li><b>محطة ميت موسي</b>--> 8:40 صباحاً</li>
                                                    <li><b>الوصـول</b> --> 8:50 صباحاً</li>
                                                    <li><b></b></li>
                                                    <li><b></b></li>
                                                </ul></li>
                                                <hr style="background: #fd5f00;margin-left: 5%; ">
                                        </ul>
                                    </div>
                                    <!-- <span id="dots">...</span> -->
                                        <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                    </div>
                                </div>
                            </div>
                        <!-- ----------------------------------------------------------------------------------- -->
                        <div class="col-xs-12 col-md-4">
                                <div class="bus-details" id="bus5">
                                        <img class="img-fluid mx-auto d-block" src="img/GB.png" alt="img-cash">
                                    <div class="bus-info">
                                        <ul>
                                            <li><b>الشركـة : </b>جو باص</li>
                                            <li><b>سعر التذكرة :</b>7 جنيهات </li>
                                            <li><b>القيام :</b>8:30 صباحا</li>
                                            <li><b>الوصـول :</b>9:00 صباحا</li>
                                            <li><b>من : </b>طنطا</li>
                                            <li><b>إلـي :</b>شبين الكوم</li>
                                            
                                            <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                        </ul>
                                        <div id="more">
                                        <ul>
                                                <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة طنطا</b>--> 8:30 صباحاً</li>
                                                    <li><b>محطة بابل</b>--> 8:45 صباحاً</li>
                                                    <li><b>محطة بتبس</b>--> 8:50 صباحاً</li>
                                                    <li><b>الوصـول</b> --> 9:00 صباحاً</li>
                                                    <li><b></b></li>
                                                    <li><b></b></li>
                                                    <li><b></b></li>
                                                    
                                                </ul></li>
                                                <hr style="background: #fd5f00;margin-left: 5%; ">
                                        </ul>
                                    </div>
                                    <!-- <span id="dots">...</span> -->
                                        <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                    </div>
                                </div>
                            </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php } 
     else if((  ( $b_to == "محطة طنطا" ) || ( $b_to =="محطة صناديد") || ( $b_to =="محطة بابل")||( $b_to =="محطة زنارة")|| 
     ($b_to =="محطة بتبس")||( $b_to =="محطة ميت_موسي"))&& (($b_from =="محطة مجمع الكليـات") || ($b_from =="محطة كلية التربية"))&&($b_time =="9")&&($b_period == "AM"))
     {
    ?>
    <section id="buses" class="buses">
        <div class="overlay">
            <div class="container">
                <div class="bus-items">
                    <div class="row row-eq-heigh">
                         <!-- ----------------------------------------------------------------------------------- -->
                         <div class="col-xs-12 col-md-4">
                                <div class="bus-details" id="bus6">
                                        <img class="img-fluid mx-auto d-block" src="img/AS.png" alt="img-cash">
                                    <div class="bus-info">
                                        <ul>
                                            <li><b>الشركـة : </b>أتوبيسي</li>
                                            <li><b>سعر التذكرة :</b>4 جنيهات </li>
                                            <li><b>القيام :</b>9:00 صباحا</li>
                                            <li><b>الوصـول :</b>10:00 صباحا</li>
                                            <li><b>من : </b>طنطا</li>
                                            <li><b>إلـي :</b>شبين الكوم</li>
                                            <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                        </ul>
                                        <div id="more">
                                        <ul>
                                                <li class="text-center"><b>المحطات</b><ul>
                                                        <li><b>محطة طنطا</b>--> 9:00 صباحاً</li>
                                                        <li><b>محطة صناديد</b>--> 9:10 صباحاً</li>
                                                        <li><b>محطة بابل</b>--> 9:20 صباحاً</li>
                                                        <li><b>محطة زنارة</b>--> 9:30 صباحاً</li>
                                                        <li><b>محطة بتبس</b>--> 9:40 صباحاً</li>
                                                        <li><b>محطة ميت موسي</b>--> 9:50 صباحاً</li>
                                                        <li><b>الوصـول</b> --> 10:00 صباحاً</li>
                                                    </ul></li>
                                                <hr style="background: #fd5f00;margin-left: 5%; ">
                                        </ul>
                                    </div>
                                    <!-- <span id="dots">...</span> -->
                                        <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                    </div>
                                </div>
                            </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                        <div class="col-xs-12 col-md-4">
                                <div class="bus-details" id="bus7">
                                        <img class="img-fluid mx-auto d-block" src="img/GB.png" alt="img-cash">
                                    <div class="bus-info">
                                        <ul>
                                            <li><b>الشركـة : </b>جو باص</li>
                                            <li><b>سعر التذكرة :</b>5 جنيهات </li>
                                            <li><b>القيام :</b>9:20 صباحا</li>
                                            <li><b>الوصـول :</b>10:15 صباحا</li>
                                            <li><b>من : </b>طنطا</li>
                                            <li><b>إلـي :</b>شبين الكوم</li>
                                            
                                            <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                        </ul>
                                        <div id="more">
                                        <ul>
                                                <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة طنطا</b>--> 9:20 صباحاً</li>
                                                    <li><b>محطة صناديد</b>--> 9:30 صباحاً</li>
                                                    <li><b>محطة بابل</b>--> 9:40 صباحاً</li>
                                                    <li><b>محطة زنارة</b>--> 9:50 صباحاً</li>
                                                    <li><b>محطة ميت موسي</b>--> 10:00 صباحاً</li>
                                                    <li><b>الوصـول</b> --> 10:15 صباحاً</li>
                                                    <li><b></b></li>
                                                    
                                                </ul></li>
                                                <hr style="background: #fd5f00;margin-left: 5%; ">
                                        </ul>
                                    </div>
                                    <!-- <span id="dots">...</span> -->
                                        <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                    </div>
                                </div>
                            </div>
                        <!-- ----------------------------------------------------------------------------------- -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } 
    else if((  ( $b_to == "محطة طنطا" ) || ( $b_to =="محطة صناديد") || ( $b_to =="محطة بابل")||( $b_to =="محطة زنارة")|| 
    ($b_to =="محطة بتبس")||( $b_to =="محطة ميت_موسي"))&& (($b_from =="محطة مجمع الكليـات") || ($b_from =="محطة كلية التربية"))&&($b_time =="10")&&($b_period == "AM"))
    {
    ?>
    <section id="buses" class="buses">
        <div class="overlay">
            <div class="container">
                <div class="bus-items">
                    <div class="row row-eq-heigh">
                        <!-- ----------------------------------------------------------------------------------- -->
                        <div class="col-xs-12 col-md-4">
                                <div class="bus-details" id="bus7">
                                        <img class="img-fluid mx-auto d-block" src="img/GB.png" alt="img-cash">
                                    <div class="bus-info">
                                        <ul>
                                            <li><b>الشركـة : </b>جو باص</li>
                                            <li><b>سعر التذكرة :</b>5 جنيهات </li>
                                            <li><b>القيام :</b>9:20 صباحا</li>
                                            <li><b>الوصـول :</b>10:15 صباحا</li>
                                            <li><b>من : </b>طنطا</li>
                                            <li><b>إلـي :</b>شبين الكوم</li>
                                            
                                            <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                        </ul>
                                        <div id="more">
                                        <ul>
                                                <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة طنطا</b>--> 9:20 صباحاً</li>
                                                    <li><b>محطة صناديد</b>--> 9:30 صباحاً</li>
                                                    <li><b>محطة بابل</b>--> 9:40 صباحاً</li>
                                                    <li><b>محطة زنارة</b>--> 9:50 صباحاً</li>
                                                    <li><b>محطة ميت موسي</b>--> 10:00 صباحاً</li>
                                                    <li><b>الوصـول</b> --> 10:15 صباحاً</li>
                                                    <li><b></b></li>
                                                    
                                                </ul></li>
                                                <hr style="background: #fd5f00;margin-left: 5%; ">
                                        </ul>
                                    </div>
                                    <!-- <span id="dots">...</span> -->
                                        <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                    </div>
                                </div>
                            </div>
                        <!-- ----------------------------------------------------------------------------------- -->
                        <div class="col-xs-12 col-md-4">
                                <div class="bus-details" id="bus8">
                                        <img class="img-fluid mx-auto d-block" src="img/AS.png" alt="img-cash">
                                    <div class="bus-info">
                                        <ul>
                                            <li><b>الشركـة : </b>أتوبيسي</li>
                                            <li><b>سعر التذكرة :</b>5 جنيهات </li>
                                            <li><b>القيام :</b>10:00 صباحا</li>
                                            <li><b>الوصـول :</b>10:45 صباحا</li>
                                            <li><b>من : </b>طنطا</li>
                                            <li><b>إلـي :</b>شبين الكوم</li>
                                            
                                            <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                        </ul>
                                        <div id="more">
                                        <ul>
                                                <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة طنطا</b>--> 10:00 صباحاً</li>
                                                    <li><b>محطة صناديد</b>--> 10:10 صباحاً</li>
                                                    <li><b>محطة بابل</b>--> 10:20 صباحاً</li>
                                                    <li><b>محطة زنارة</b>--> 10:25 صباحاً</li>
                                                    <li><b>محطة ميت موسي</b>--> 10:40 صباحاً</li>
                                                    <li><b>الوصـول</b> --> 10:45 صباحاً</li>
                                                    <li><b></b></li>
                                                    
                                                    
                                                </ul></li>
                                                <hr style="background: #fd5f00;margin-left: 5%; ">
                                        </ul>
                                    </div>
                                    <!-- <span id="dots">...</span> -->
                                        <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                    </div>
                                </div>
                            </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                        <div class="col-xs-12 col-md-4">
                                <div class="bus-details" id="bus9">
                                        <img class="img-fluid mx-auto d-block" src="img/AS.png" alt="img-cash">
                                    <div class="bus-info">
                                        <ul>
                                            <li><b>الشركـة : </b>أتوبيسي</li>
                                            <li><b>سعر التذكرة :</b>4 جنيهات </li>
                                            <li><b>القيام :</b>10:45 صباحا</li>
                                            <li><b>الوصـول :</b>11:30 صباحا</li>
                                            <li><b>من : </b>طنطا</li>
                                            <li><b>إلـي :</b>شبين الكوم</li>
                                            <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                        </ul>
                                        <div id="more">
                                        <ul>
                                                <li class="text-center"><b>المحطات</b><ul>
                                                        <li><b>محطة طنطا</b>--> 10:45 صباحاً</li>
                                                        <li><b>محطة صناديد</b>--> 10:50 صباحاً</li>
                                                        <li><b>محطة بابل</b>--> 11:00 صباحاً</li>
                                                        <li><b>محطة زنارة</b>--> 11:05 صباحاً</li>
                                                        <li><b>محطة بتبس</b>--> 11:15 صباحاً</li>
                                                        <li><b>محطة ميت موسي</b>--> 11:25 صباحاً</li>
                                                        <li><b>الوصـول</b> --> 11:30 صباحاً</li>
                                                    </ul></li>
                                                <hr style="background: #fd5f00;margin-left: 5%; ">
                                        </ul>
                                    </div>
                                    <!-- <span id="dots">...</span> -->
                                        <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                    </div>
                                </div>
                            </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }
    else if((  ( $b_to == "محطة طنطا" ) || ( $b_to =="محطة صناديد") || ( $b_to =="محطة بابل")||( $b_to =="محطة زنارة")|| 
    ($b_to =="محطة بتبس")||( $b_to =="محطة ميت_موسي"))&& (($b_from =="محطة مجمع الكليـات") || ($b_from =="محطة كلية التربية"))&&($b_time =="11")&&($b_period == "AM"))
    {
    ?>
    <section id="buses" class="buses">
        <div class="overlay">
            <div class="container">
                <div class="bus-items">
                    <div class="row row-eq-heigh">
                         <!-- ----------------------------------------------------------------------------------- -->
                         <div class="col-xs-12 col-md-4">
                                <div class="bus-details" id="bus9">
                                        <img class="img-fluid mx-auto d-block" src="img/AS.png" alt="img-cash">
                                    <div class="bus-info">
                                        <ul>
                                            <li><b>الشركـة : </b>أتوبيسي</li>
                                            <li><b>سعر التذكرة :</b>4 جنيهات </li>
                                            <li><b>القيام :</b>10:45 صباحا</li>
                                            <li><b>الوصـول :</b>11:30 صباحا</li>
                                            <li><b>من : </b>طنطا</li>
                                            <li><b>إلـي :</b>شبين الكوم</li>
                                            <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                        </ul>
                                        <div id="more">
                                        <ul>
                                                <li class="text-center"><b>المحطات</b><ul>
                                                        <li><b>محطة طنطا</b>--> 10:45 صباحاً</li>
                                                        <li><b>محطة صناديد</b>--> 10:50 صباحاً</li>
                                                        <li><b>محطة بابل</b>--> 11:00 صباحاً</li>
                                                        <li><b>محطة زنارة</b>--> 11:05 صباحاً</li>
                                                        <li><b>محطة بتبس</b>--> 11:15 صباحاً</li>
                                                        <li><b>محطة ميت موسي</b>--> 11:25 صباحاً</li>
                                                        <li><b>الوصـول</b> --> 11:30 صباحاً</li>
                                                    </ul></li>
                                                <hr style="background: #fd5f00;margin-left: 5%; ">
                                        </ul>
                                    </div>
                                    <!-- <span id="dots">...</span> -->
                                        <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                    </div>
                                </div>
                            </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                        <div class="col-xs-12 col-md-4">
                                <div class="bus-details" id="bus10" >
                                        <img class="img-fluid mx-auto d-block" src="img/AS.png" alt="img-cash">
                                    <div class="bus-info">
                                        <ul>
                                            <li><b>الشركـة : </b> أتوبيسي</li>
                                            <li><b>سعر التذكرة :</b>5 جنيهات </li>
                                            <li><b>القيام :</b>11:45 صباحا</li>
                                            <li><b>الوصـول :</b>12:30 صباحا</li>
                                            <li><b>من : </b>طنطا</li>
                                            <li><b>إلـي :</b>شبين الكوم</li>
                                            
                                            <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                        </ul>
                                        <div id="more">
                                        <ul>
                                                <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة طنطا</b>--> 11:45 صباحاً</li>
                                                    <li><b>محطة بابل</b>--> 12:05 مساءُ</li>
                                                    <li><b>محطة زنارة</b>--> 12:10 مساءُ</li>
                                                    <li><b>محطة ميت موسي</b>--> 12:20 مساءُ</li>
                                                    <li><b>الوصـول</b> --> 12:30 مساءُ</li>
                                                    <li><b></b></li>
                                                    <li><b></b></li>
                                                </ul></li>
                                                <hr style="background: #fd5f00;margin-left: 5%; ">
                                        </ul>
                                    </div>
                                    <!-- <span id="dots">...</span> -->
                                        <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                    </div>
                                </div>
                            </div>
                        <!-- ----------------------------------------------------------------------------------- -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }
    else if((  ( $b_to == "محطة طنطا" ) || ( $b_to =="محطة صناديد") || ( $b_to =="محطة بابل")||( $b_to =="محطة زنارة")|| 
    ($b_to =="محطة بتبس")||( $b_to =="محطة ميت_موسي"))&& (($b_from =="محطة مجمع الكليـات") || ($b_from =="محطة كلية التربية"))&&($b_time =="12")&&($b_period == "PM"))
    {
    ?>
    <section id="buses" class="buses">
        <div class="overlay">
            <div class="container">
                <div class="bus-items">
                    <div class="row row-eq-heigh">
                         <!-- ----------------------------------------------------------------------------------- -->
                         <div class="col-xs-12 col-md-4">
                                <div class="bus-details" id="bus10" >
                                        <img class="img-fluid mx-auto d-block" src="img/AS.png" alt="img-cash">
                                    <div class="bus-info">
                                        <ul>
                                            <li><b>الشركـة : </b> أتوبيسي</li>
                                            <li><b>سعر التذكرة :</b>5 جنيهات </li>
                                            <li><b>القيام :</b>11:45 صباحا</li>
                                            <li><b>الوصـول :</b>12:30 صباحا</li>
                                            <li><b>من : </b>طنطا</li>
                                            <li><b>إلـي :</b>شبين الكوم</li>
                                            
                                            <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                        </ul>
                                        <div id="more">
                                        <ul>
                                                <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة طنطا</b>--> 11:45 صباحاً</li>
                                                    <li><b>محطة بابل</b>--> 12:05 مساءُ</li>
                                                    <li><b>محطة زنارة</b>--> 12:10 مساءُ</li>
                                                    <li><b>محطة ميت موسي</b>--> 12:20 مساءُ</li>
                                                    <li><b>الوصـول</b> --> 12:30 مساءُ</li>
                                                    <li><b></b></li>
                                                    <li><b></b></li>
                                                </ul></li>
                                                <hr style="background: #fd5f00;margin-left: 5%; ">
                                        </ul>
                                    </div>
                                    <!-- <span id="dots">...</span> -->
                                        <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                    </div>
                                </div>
                            </div>
                        <!-- ----------------------------------------------------------------------------------- -->
                        <div class="col-xs-12 col-md-4">
                                <div class="bus-details" id="bus11">
                                        <img class="img-fluid mx-auto d-block" src="img/GB.png" alt="img-cash">
                                    <div class="bus-info">
                                        <ul>
                                            <li><b>الشركـة : </b>جو باص</li>
                                            <li><b>سعر التذكرة :</b>7 جنيهات </li>
                                            <li><b>القيام :</b>12:15 مساءُ</li>
                                            <li><b>الوصـول :</b>1:00 مساءُ</li>
                                            <li><b>من : </b>طنطا</li>
                                            <li><b>إلـي :</b>شبين الكوم</li>
                                            
                                            <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                        </ul>
                                        <div id="more">
                                        <ul>
                                                <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة طنطا</b>-->12:15 مساءُ</li>
                                                        <li><b>محطة صناديد</b>--> 12:25 مساءُ</li>
                                                        <li><b>محطة بابل</b>--> 12:35 مساءُ</li>
                                                        <li><b>محطة زنارة</b>--> 12:40 مساءُ</li>
                                                        <li><b>محطة بتبس</b>--> 12:45 مساءُ</li>
                                                        <li><b>محطة ميت موسي</b>--> 12:50 مساءُ</li>
                                                        <li><b>الوصـول</b> --> 1:00 مساءُ</li>
                                                    
                                                </ul></li>
                                                <hr style="background: #fd5f00;margin-left: 5%; ">
                                        </ul>
                                    </div>
                                    <!-- <span id="dots">...</span> -->
                                        <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                    </div>
                                </div>
                            </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } 
    else if((  ( $b_to == "محطة طنطا" ) || ( $b_to =="محطة صناديد") || ( $b_to =="محطة بابل")||( $b_to =="محطة زنارة")|| 
    ($b_to =="محطة بتبس")||( $b_to =="محطة ميت_موسي"))&& (($b_from =="محطة مجمع الكليـات") || ($b_from =="محطة كلية التربية"))&&($b_time =="1")&&($b_period == "PM"))
    {
    ?>
    <section id="buses" class="buses">
        <div class="overlay">
            <div class="container">
                <div class="bus-items">
                    <div class="row row-eq-heigh">
                         <!-- ----------------------------------------------------------------------------------- -->
    <div class="col-xs-12 col-md-4">
                                <div class="bus-details" id="bus11">
                                        <img class="img-fluid mx-auto d-block" src="img/GB.png" alt="img-cash">
                                    <div class="bus-info">
                                        <ul>
                                            <li><b>الشركـة : </b>جو باص</li>
                                            <li><b>سعر التذكرة :</b>7 جنيهات </li>
                                            <li><b>القيام :</b>12:15 مساءُ</li>
                                            <li><b>الوصـول :</b>1:00 مساءُ</li>
                                            <li><b>من : </b>طنطا</li>
                                            <li><b>إلـي :</b>شبين الكوم</li>
                                            
                                            <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                        </ul>
                                        <div id="more">
                                        <ul>
                                                <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة طنطا</b>-->12:15 مساءُ</li>
                                                        <li><b>محطة صناديد</b>--> 12:25 مساءُ</li>
                                                        <li><b>محطة بابل</b>--> 12:35 مساءُ</li>
                                                        <li><b>محطة زنارة</b>--> 12:40 مساءُ</li>
                                                        <li><b>محطة بتبس</b>--> 12:45 مساءُ</li>
                                                        <li><b>محطة ميت موسي</b>--> 12:50 مساءُ</li>
                                                        <li><b>الوصـول</b> --> 1:00 مساءُ</li>
                                                    
                                                </ul></li>
                                                <hr style="background: #fd5f00;margin-left: 5%; ">
                                        </ul>
                                    </div>
                                    <!-- <span id="dots">...</span> -->
                                        <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                    </div>
                                </div>
                            </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                        <div class="col-xs-12 col-md-4">
                                <div class="bus-details" id="bus12">
                                        <img class="img-fluid mx-auto d-block" src="img/GB.png" alt="img-cash">
                                    <div class="bus-info">
                                        <ul>
                                            <li><b>الشركـة : </b>جو باص</li>
                                            <li><b>سعر التذكرة :</b>6 جنيهات </li>
                                            <li><b>القيام :</b>1:00 مساءُ</li>
                                            <li><b>الوصـول :</b>1:30 صباحا</li>
                                            <li><b>من : </b>طنطا</li>
                                            <li><b>إلـي :</b>شبين الكوم</li>
                                            <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                        </ul>
                                        <div id="more">
                                        <ul>
                                                <li class="text-center"><b>المحطات</b><ul>
                                                        <li><b>محطة طنطا</b>--> 1:00 مساءُ</li>
                                                        <li><b>محطة زنارة</b>--> 1:15 مساءُ</li>
                                                        <li><b>الوصـول</b> --> 1:30 صباحاً</li>
                                                        <li><b></b></li>
                                                        <li><b></b></li>
                                                        <li><b></b></li>
                                                        <li><b></b></li>
                                                    </ul></li>
                                                <hr style="background: #fd5f00;margin-left: 5%; ">
                                        </ul>
                                    </div>
                                    <!-- <span id="dots">...</span> -->
                                        <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php }  
    else if((  ( $b_to == "محطة طنطا" ) || ( $b_to =="محطة صناديد") || ( $b_to =="محطة بابل")||( $b_to =="محطة زنارة")|| 
    ($b_to =="محطة بتبس")||( $b_to =="محطة ميت_موسي"))&& (($b_from =="محطة مجمع الكليـات") || ($b_from =="محطة كلية التربية"))&&(($b_time =="12")||($b_time =="1")||($b_time =="2")||($b_time =="3")||($b_time =="4")||($b_time =="5")||($b_time =="6"))&&($b_period == "AM"))
    {
    ?>
    <script>alert("هذة الخدمة غير متاحة في هذة الأوقات  ");</script>
    <h4 class="text-center" style="font-family: 'Reem Kufi', sans-serif; color: darkslategray; min-height: 170px; padding: 170px; background-color: #eee;margin-top: 50px;">هذة الخدمة غير متاحة في هذة الأوقات :(</h4> <hr class="ln">
    <?php } 
    else if((($b_to =="محطة مجمع الكليـات") || ($b_to =="محطة كلية التربية"))&&(  ( $b_from == "محطة طنطا" ) || ( $b_from =="محطة صناديد") || ( b_from =="محطة بابل")||( b_from =="محطة زنارة")|| 
    ($b_from =="محطة بتبس")||( $b_from =="محطة ميت_موسي"))&&($b_time =="12")&&($b_period == "PM"))
    {
    ?>
    <section id="buses" class="buses">
        <div class="overlay">
            <div class="container">
                <div class="bus-items">
                    <div class="row row-eq-heigh">
                    <div class="col-xs-12 col-md-4">
                            <div class="bus-details" id="bus13">
                                    <img class="img-fluid mx-auto d-block" src="img/AS.png" alt="img-cash">
                                <div class="bus-info">
                                    <ul>
                                        <li><b>الشركـة : </b>أتوبيسي</li>
                                        <li><b>سعر التذكرة :</b>4 جنيهات </li>
                                        <li><b>القيام :</b>12:00 مساءُ</li>
                                        <li><b>الوصـول :</b>01:00 مساءُ</li>
                                        <li><b>من : </b>شبين الكوم</li>
                                        <li><b>إلـي :</b>طنطا</li>
                                        <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                    </ul>
                                    <div id="more">
                                    <ul>
                                            <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة شبين الكوم 1</b>--> 12:00 مساءُ</li>
                                                    <li><b>محطة شبين الكوم 2</b>--> 12:05 مساءُ</li>
                                                    <li><b>محطة ميت موسي</b>--> 12:15 مساءُ</li>
                                                    <li><b>محطة بتبس</b>--> 12:25 مساءُ</li>
                                                    <li><b>محطة زنارة</b>--> 12:35 مساءُ</li>
                                                    <li><b>محطة بابل</b>--> 12:40 مساءُ</li>
                                                    <li><b>محطة صناديد</b>--> 12:50 مساءُ</li>
                                                    <li><b>الوصـول</b> --> 01:00 مساءُ</li>
                                                </ul></li>
                                            <hr style="background: #fd5f00;margin-left: 5%; ">
                                    </ul>
                                </div>
                                <!-- <span id="dots">...</span> -->
                                    <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                </div>
                            </div>
                        </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                    <div class="col-xs-12 col-md-4">
                            <div class="bus-details" id="bus14">
                                    <img class="img-fluid mx-auto d-block" src="img/GB.png" alt="img-cash">
                                <div class="bus-info">
                                    <ul>
                                        <li><b>الشركـة : </b>جو باص</li>
                                        <li><b>سعر التذكرة :</b>4 جنيهات </li>
                                        <li><b>القيام :</b>12:30 مساءُ</li>
                                        <li><b>الوصـول :</b>01:30 مساءُ</li>
                                        <li><b>من : </b>شبين الكوم</li>
                                        <li><b>إلـي :</b>طنطا</li>
                                        <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                    </ul>
                                    <div id="more">
                                    <ul>
                                            <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة شبين الكوم 1</b>--> 12:30 مساءُ</li>
                                                    <li><b>محطة شبين الكوم 2</b>--> 12:35 مساءُ</li>
                                                    <li><b>محطة ميت موسي</b>--> 12:45 مساءُ</li>
                                                    <li><b>محطة بتبس</b>--> 12:55 مساءُ</li>
                                                    <li><b>محطة زنارة</b>--> 01:05 مساءُ</li>
                                                    <li><b>محطة بابل</b>--> 01:10 مساءُ</li>
                                                    <li><b>محطة صناديد</b>--> 01:20 مساءُ</li>
                                                    <li><b>الوصـول</b> --> 01:30 مساءُ</li>
                                                </ul></li>
                                            <hr style="background: #fd5f00;margin-left: 5%; ">
                                    </ul>
                                </div>
                                <!-- <span id="dots">...</span> -->
                                    <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                </div>
                            </div>
                        </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } 
    else if((($b_to =="محطة مجمع الكليـات") || ($b_to =="محطة كلية التربية"))&&(  ( $b_from == "محطة طنطا" ) || ( $b_from =="محطة صناديد") || ( b_from =="محطة بابل")||( b_from =="محطة زنارة")|| 
    ($b_from =="محطة بتبس")||( $b_from =="محطة ميت_موسي"))&&($b_time =="1")&&($b_period == "PM"))
    {
    ?>
    <section id="buses" class="buses">
        <div class="overlay">
            <div class="container">
                <div class="bus-items">
                    <div class="row row-eq-heigh">
                         <!-- ----------------------------------------------------------------------------------- -->
                    <div class="col-xs-12 col-md-4">
                            <div class="bus-details" id="bus15">
                                    <img class="img-fluid mx-auto d-block" src="img/AS.png" alt="img-cash">
                                <div class="bus-info">
                                    <ul>
                                        <li><b>الشركـة : </b>أتوبيسي</li>
                                        <li><b>سعر التذكرة :</b>4 جنيهات </li>
                                        <li><b>القيام :</b>01:00 مساءُ</li>
                                        <li><b>الوصـول :</b>02:00 مساءُ</li>
                                        <li><b>من : </b>شبين الكوم</li>
                                        <li><b>إلـي :</b>طنطا</li>
                                        <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                    </ul>
                                    <div id="more">
                                    <ul>
                                            <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة شبين الكوم 1</b>--> 01:00 مساءُ</li>
                                                    <li><b>محطة شبين الكوم 2</b>--> 01:05 مساءُ</li>
                                                    <li><b>محطة ميت موسي</b>--> 01:15 مساءُ</li>
                                                    <li><b>محطة بتبس</b>--> 01:25 مساءُ</li>
                                                    <li><b>محطة زنارة</b>--> 01:35 مساءُ</li>
                                                    <li><b>محطة بابل</b>--> 01:40 مساءُ</li>
                                                    <li><b>محطة صناديد</b>--> 01:50 مساءُ</li>
                                                    <li><b>الوصـول</b> --> 02:00 مساءُ</li>
                                                </ul></li>
                                            <hr style="background: #fd5f00;margin-left: 5%; ">
                                    </ul>
                                </div>
                                <!-- <span id="dots">...</span> -->
                                    <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                </div>
                            </div>
                        </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                    <div class="col-xs-12 col-md-4">
                            <div class="bus-details" id="bus16">
                                    <img class="img-fluid mx-auto d-block" src="img/AS.png" alt="img-cash">
                                <div class="bus-info">
                                    <ul>
                                        <li><b>الشركـة : </b>أتوبيسي</li>
                                        <li><b>سعر التذكرة :</b>4 جنيهات </li>
                                        <li><b>القيام :</b>01:30 مساءُ</li>
                                        <li><b>الوصـول :</b>02:30 مساءُ</li>
                                        <li><b>من : </b>شبين الكوم</li>
                                        <li><b>إلـي :</b>طنطا</li>
                                        <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                    </ul>
                                    <div id="more">
                                    <ul>
                                            <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة شبين الكوم 1</b>--> 01:30 مساءُ</li>
                                                    <li><b>محطة شبين الكوم 2</b>--> 01:35 مساءُ</li>
                                                    <li><b>محطة ميت موسي</b>--> 01:45 مساءُ</li>
                                                    <li><b>محطة بتبس</b>--> 01:55 مساءُ</li>
                                                    <li><b>محطة زنارة</b>--> 01:05 مساءُ</li>
                                                    <li><b>محطة بابل</b>--> 02:10 مساءُ</li>
                                                    <li><b>محطة صناديد</b>--> 02:20 مساءُ</li>
                                                    <li><b>الوصـول</b> --> 02:30 مساءُ</li>
                                                </ul></li>
                                            <hr style="background: #fd5f00;margin-left: 5%; ">
                                    </ul>
                                </div>
                                <!-- <span id="dots">...</span> -->
                                    <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                </div>
                            </div>
                        </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } 
    else if((($b_to =="محطة مجمع الكليـات") || ($b_to =="محطة كلية التربية"))&&(  $b_from == ("محطة طنطا" ) || ( $b_from =="محطة صناديد") || ( $b_from =="محطة بابل")||( $b_from =="محطة زنارة")|| 
    ($b_from =="محطة بتبس")||( $b_from =="محطة ميت_موسي"))&&($b_time =="2")&&($b_period == "PM"))
    {
    ?>
    <section id="buses" class="buses">
        <div class="overlay">
            <div class="container">
                <div class="bus-items">
                    <div class="row row-eq-heigh">
                        <!-- ----------------------------------------------------------------------------------- -->
                    <div class="col-xs-12 col-md-4">
                            <div class="bus-details" id="bus17">
                                    <img class="img-fluid mx-auto d-block" src="img/GB.png" alt="img-cash">
                                <div class="bus-info">
                                    <ul>
                                        <li><b>الشركـة : </b>جو باص</li>
                                        <li><b>سعر التذكرة :</b>4 جنيهات </li>
                                        <li><b>القيام :</b>02:00 مساءُ</li>
                                        <li><b>الوصـول :</b>03:00 مساءُ</li>
                                        <li><b>من : </b>شبين الكوم</li>
                                        <li><b>إلـي :</b>طنطا</li>
                                        <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                    </ul>
                                    <div id="more">
                                    <ul>
                                            <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة شبين الكوم 1</b>--> 02:00 مساءُ</li>
                                                    <li><b>محطة شبين الكوم 2</b>--> 02:05 مساءُ</li>
                                                    <li><b>محطة ميت موسي</b>--> 02:15 مساءُ</li>
                                                    <li><b>محطة بتبس</b>--> 02:25 مساءُ</li>
                                                    <li><b>محطة زنارة</b>--> 02:35 مساءُ</li>
                                                    <li><b>محطة بابل</b>--> 02:40 مساءُ</li>
                                                    <li><b>محطة صناديد</b>--> 02:50 مساءُ</li>
                                                    <li><b>الوصـول</b> --> 03:00 مساءُ</li>
                                                </ul></li>
                                            <hr style="background: #fd5f00;margin-left: 5%; ">
                                    </ul>
                                </div>
                                <!-- <span id="dots">...</span> -->
                                    <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                </div>
                            </div>
                        </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                    <div class="col-xs-12 col-md-4">
                            <div class="bus-details" id="bus18">
                                    <img class="img-fluid mx-auto d-block" src="img/GB.png" alt="img-cash">
                                <div class="bus-info">
                                    <ul>
                                        <li><b>الشركـة : </b>جو باص</li>
                                        <li><b>سعر التذكرة :</b>4 جنيهات </li>
                                        <li><b>القيام :</b>02:30 مساءُ</li>
                                        <li><b>الوصـول :</b>03:30 مساءُ</li>
                                        <li><b>من : </b>شبين الكوم</li>
                                        <li><b>إلـي :</b>طنطا</li>
                                        <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                    </ul>
                                    <div id="more">
                                    <ul>
                                            <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة شبين الكوم 1</b>--> 02:30 مساءُ</li>
                                                    <li><b>محطة شبين الكوم 2</b>--> 02:35 مساءُ</li>
                                                    <li><b>محطة ميت موسي</b>--> 02:45 مساءُ</li>
                                                    <li><b>محطة بتبس</b>--> 02:55 مساءُ</li>
                                                    <li><b>محطة زنارة</b>--> 03:05 مساءُ</li>
                                                    <li><b>محطة بابل</b>--> 03:10 مساءُ</li>
                                                    <li><b>محطة صناديد</b>--> 03:20 مساءُ</li>
                                                    <li><b>الوصـول</b> --> 03:30 مساءُ</li>
                                                </ul></li>
                                            <hr style="background: #fd5f00;margin-left: 5%; ">
                                    </ul>
                                </div>
                                <!-- <span id="dots">...</span> -->
                                    <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                </div>
                            </div>
                        </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } 
     else if((($b_to =="محطة مجمع الكليـات") || ($b_to =="محطة كلية التربية"))&&(  $b_from == ("محطة طنطا" ) || ( $b_from =="محطة صناديد") || ( $b_from =="محطة بابل")||( $b_from =="محطة زنارة")|| 
     ($b_from =="محطة بتبس")||( $b_from =="محطة ميت_موسي"))&&($b_time =="3")&&($b_period == "PM"))
     {
    ?>
    <section id="buses" class="buses">
        <div class="overlay">
            <div class="container">
                <div class="bus-items">
                    <div class="row row-eq-heigh">
                         <!-- ----------------------------------------------------------------------------------- -->
                    <div class="col-xs-12 col-md-4">
                            <div class="bus-details" id="bus19">
                                    <img class="img-fluid mx-auto d-block" src="img/AS.png" alt="img-cash">
                                <div class="bus-info">
                                    <ul>
                                        <li><b>الشركـة : </b>أتوبيسي</li>
                                        <li><b>سعر التذكرة :</b>4 جنيهات </li>
                                        <li><b>القيام :</b>03:00 مساءُ</li>
                                        <li><b>الوصـول :</b>04:00 مساءُ</li>
                                        <li><b>من : </b>شبين الكوم</li>
                                        <li><b>إلـي :</b>طنطا</li>
                                        <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                    </ul>
                                    <div id="more">
                                    <ul>
                                            <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة شبين الكوم 1</b>--> 03:00 مساءُ</li>
                                                    <li><b>محطة شبين الكوم 2</b>--> 03:05 مساءُ</li>
                                                    <li><b>محطة ميت موسي</b>--> 03:15 مساءُ</li>
                                                    <li><b>محطة بتبس</b>--> 03:25 مساءُ</li>
                                                    <li><b>محطة زنارة</b>--> 03:35 مساءُ</li>
                                                    <li><b>محطة بابل</b>--> 03:40 مساءُ</li>
                                                    <li><b>محطة صناديد</b>--> 03:50 مساءُ</li>
                                                    <li><b>الوصـول</b> --> 04:00 مساءُ</li>
                                                </ul></li>
                                            <hr style="background: #fd5f00;margin-left: 5%; ">
                                    </ul>
                                </div>
                                <!-- <span id="dots">...</span> -->
                                    <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                </div>
                            </div>
                        </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                    <div class="col-xs-12 col-md-4">
                            <div class="bus-details" id="bus20">
                                    <img class="img-fluid mx-auto d-block" src="img/GB.png" alt="img-cash">
                                <div class="bus-info">
                                    <ul>
                                        <li><b>الشركـة : </b>جو باص</li>
                                        <li><b>سعر التذكرة :</b>4 جنيهات </li>
                                        <li><b>القيام :</b>03:30 مساءُ</li>
                                        <li><b>الوصـول :</b>04:30 مساءُ</li>
                                        <li><b>من : </b>شبين الكوم</li>
                                        <li><b>إلـي :</b>طنطا</li>
                                        <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                    </ul>
                                    <div id="more">
                                    <ul>
                                            <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة شبين الكوم 1</b>--> 03:30 مساءُ</li>
                                                    <li><b>محطة شبين الكوم 2</b>--> 03:35 مساءُ</li>
                                                    <li><b>محطة ميت موسي</b>--> 03:45 مساءُ</li>
                                                    <li><b>محطة بتبس</b>--> 03:55 مساءُ</li>
                                                    <li><b>محطة زنارة</b>--> 04:05 مساءُ</li>
                                                    <li><b>محطة بابل</b>--> 04:10 مساءُ</li>
                                                    <li><b>محطة صناديد</b>--> 04:20 مساءُ</li>
                                                    <li><b>الوصـول</b> --> 04:30 مساءُ</li>
                                                </ul></li>
                                            <hr style="background: #fd5f00;margin-left: 5%; ">
                                    </ul>
                                </div>
                                <!-- <span id="dots">...</span> -->
                                    <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                </div>
                            </div>
                        </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } 
    else if((($b_to =="محطة مجمع الكليـات") || ($b_to =="محطة كلية التربية"))&&(  $b_from == ("محطة طنطا" ) || ( $b_from =="محطة صناديد") || ( $b_from =="محطة بابل")||( $b_from =="محطة زنارة")|| 
    ($b_from =="محطة بتبس")||( $b_from =="محطة ميت_موسي"))&&($b_time =="4")&&($b_period == "PM"))
    {
   ?>
   <section id="buses" class="buses">
       <div class="overlay">
           <div class="container">
               <div class="bus-items">
                   <div class="row row-eq-heigh">
                        <!-- ----------------------------------------------------------------------------------- -->
                    <div class="col-xs-12 col-md-4">
                            <div class="bus-details" id="bus21">
                                    <img class="img-fluid mx-auto d-block" src="img/AS.png" alt="img-cash">
                                <div class="bus-info">
                                    <ul>
                                        <li><b>الشركـة : </b>أتوبيسي</li>
                                        <li><b>سعر التذكرة :</b>4 جنيهات </li>
                                        <li><b>القيام :</b>04:00 مساءُ</li>
                                        <li><b>الوصـول :</b>05:00 مساءُ</li>
                                        <li><b>من : </b>شبين الكوم</li>
                                        <li><b>إلـي :</b>طنطا</li>
                                        <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                    </ul>
                                    <div id="more">
                                    <ul>
                                            <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة شبين الكوم 1</b>--> 04:00 مساءُ</li>
                                                    <li><b>محطة شبين الكوم 2</b>--> 04:05 مساءُ</li>
                                                    <li><b>محطة ميت موسي</b>--> 04:15 مساءُ</li>
                                                    <li><b>محطة بتبس</b>--> 04:25 مساءُ</li>
                                                    <li><b>محطة زنارة</b>--> 04:35 مساءُ</li>
                                                    <li><b>محطة بابل</b>--> 04:40 مساءُ</li>
                                                    <li><b>محطة صناديد</b>--> 04:50 مساءُ</li>
                                                    <li><b>الوصـول</b> --> 05:00 مساءُ</li>
                                                </ul></li>
                                            <hr style="background: #fd5f00;margin-left: 5%; ">
                                    </ul>
                                </div>
                                <!-- <span id="dots">...</span> -->
                                    <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                </div>
                            </div>
                        </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                    <div class="col-xs-12 col-md-4">
                            <div class="bus-details" id="bus22">
                                    <img class="img-fluid mx-auto d-block" src="img/GB.png" alt="img-cash">
                                <div class="bus-info">
                                    <ul>
                                        <li><b>الشركـة : </b>جو باص</li>
                                        <li><b>سعر التذكرة :</b>4 جنيهات </li>
                                        <li><b>القيام :</b>04:30 مساءُ</li>
                                        <li><b>الوصـول :</b>05:30 مساءُ</li>
                                        <li><b>من : </b>شبين الكوم</li>
                                        <li><b>إلـي :</b>طنطا</li>
                                        <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                    </ul>
                                    <div id="more">
                                    <ul>
                                            <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة شبين الكوم 1</b>--> 04:30 مساءُ</li>
                                                    <li><b>محطة شبين الكوم 2</b>--> 04:35 مساءُ</li>
                                                    <li><b>محطة ميت موسي</b>--> 04:45 مساءُ</li>
                                                    <li><b>محطة بتبس</b>--> 04:55 مساءُ</li>
                                                    <li><b>محطة زنارة</b>--> 05:05 مساءُ</li>
                                                    <li><b>محطة بابل</b>--> 05:10 مساءُ</li>
                                                    <li><b>محطة صناديد</b>--> 05:20 مساءُ</li>
                                                    <li><b>الوصـول</b> --> 05:30 مساءُ</li>
                                                </ul></li>
                                            <hr style="background: #fd5f00;margin-left: 5%; ">
                                    </ul>
                                </div>
                                <!-- <span id="dots">...</span> -->
                                    <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                </div>
                            </div>
                        </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                   </div>
               </div>
           </div>
       </div>
   </section>
    <?php } 
    else if((($b_to =="محطة مجمع الكليـات") || ($b_to =="محطة كلية التربية"))&&(  $b_from == ("محطة طنطا" ) || ( $b_from =="محطة صناديد") || ( $b_from =="محطة بابل")||( $b_from =="محطة زنارة")|| 
    ($b_from =="محطة بتبس")||( $b_from =="محطة ميت_موسي"))&&($b_time =="5")&&($b_period == "PM"))
    {
   ?>
   <section id="buses" class="buses">
       <div class="overlay">
           <div class="container">
               <div class="bus-items">
                   <div class="row row-eq-heigh">
                         <!-- ----------------------------------------------------------------------------------- -->
                    <div class="col-xs-12 col-md-4">
                            <div class="bus-details" id="bus23">
                                    <img class="img-fluid mx-auto d-block" src="img/AS.png" alt="img-cash">
                                <div class="bus-info">
                                    <ul>
                                        <li><b>الشركـة : </b>أتوبيسي</li>
                                        <li><b>سعر التذكرة :</b>4 جنيهات </li>
                                        <li><b>القيام :</b>05:00 مساءُ</li>
                                        <li><b>الوصـول :</b>06:00 مساءُ</li>
                                        <li><b>من : </b>شبين الكوم</li>
                                        <li><b>إلـي :</b>طنطا</li>
                                        <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                    </ul>
                                    <div id="more">
                                    <ul>
                                            <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة شبين الكوم 1</b>--> 05:00 مساءُ</li>
                                                    <li><b>محطة شبين الكوم 2</b>--> 05:05 مساءُ</li>
                                                    <li><b>محطة ميت موسي</b>--> 05:15 مساءُ</li>
                                                    <li><b>محطة بتبس</b>--> 05:25 مساءُ</li>
                                                    <li><b>محطة زنارة</b>--> 05:35 مساءُ</li>
                                                    <li><b>محطة بابل</b>--> 05:40 مساءُ</li>
                                                    <li><b>محطة صناديد</b>--> 05:50 مساءُ</li>
                                                    <li><b>الوصـول</b> --> 06:00 مساءُ</li>
                                                </ul></li>
                                            <hr style="background: #fd5f00;margin-left: 5%; ">
                                    </ul>
                                </div>
                                <!-- <span id="dots">...</span> -->
                                    <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                </div>
                            </div>
                        </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                    <div class="col-xs-12 col-md-4">
                            <div class="bus-details" id="bus24">
                                    <img class="img-fluid mx-auto d-block" src="img/GB.png" alt="img-cash">
                                <div class="bus-info">
                                    <ul>
                                        <li><b>الشركـة : </b>جو باص</li>
                                        <li><b>سعر التذكرة :</b>4 جنيهات </li>
                                        <li><b>القيام :</b>05:30 مساءُ</li>
                                        <li><b>الوصـول :</b>06:30 مساءُ</li>
                                        <li><b>من : </b>شبين الكوم</li>
                                        <li><b>إلـي :</b>طنطا</li>
                                        <!-- <li class="sh_more"> <a href="javascript:myFunction()" class="sh_more" id="myBtn">تفاصيل أكثر  <i class="fa fa-angle-double-down"></i></a></li> -->
                                    </ul>
                                    <div id="more">
                                    <ul>
                                            <li class="text-center"><b>المحطات</b><ul>
                                                    <li><b>محطة شبين الكوم 1</b>--> 05:30 مساءُ</li>
                                                    <li><b>محطة شبين الكوم 2</b>--> 05:35 مساءُ</li>
                                                    <li><b>محطة ميت موسي</b>--> 05:45 مساءُ</li>
                                                    <li><b>محطة بتبس</b>--> 05:55 مساءُ</li>
                                                    <li><b>محطة زنارة</b>--> 06:05 مساءُ</li>
                                                    <li><b>محطة بابل</b>--> 06:10 مساءُ</li>
                                                    <li><b>محطة صناديد</b>--> 06:20 مساءُ</li>
                                                    <li><b>الوصـول</b> --> 06:30 مساءُ</li>
                                                </ul></li>
                                            <hr style="background: #fd5f00;margin-left: 5%; ">
                                    </ul>
                                </div>
                                <!-- <span id="dots">...</span> -->
                                    <button class="btn btn-success btn_res"> <a href="select_seat.php" class="st_rs">إحجز الأن </a> </button>
                                </div>
                            </div>
                        </div>
                    <!-- ----------------------------------------------------------------------------------- -->
                   </div>
               </div>
           </div>
       </div>
   </section>
    <?php }
    else if((($b_to =="محطة مجمع الكليـات") || ($b_to =="محطة كلية التربية")||(  $b_to == ("محطة طنطا" ) || ( $b_to =="محطة صناديد") || ( $b_to =="محطة بابل")||( $b_to =="محطة زنارة")|| 
    ($b_to =="محطة بتبس")||( $b_to =="محطة ميت_موسي")))
    &&(  $b_from == ("محطة طنطا" ) || ( $b_from =="محطة صناديد") || ( $b_from =="محطة بابل")||( $b_from =="محطة زنارة")|| 
    ($b_from =="محطة بتبس")||( $b_from =="محطة ميت_موسي")||($b_from =="محطة مجمع الكليـات") || ($b_from =="محطة كلية التربية"))&&(($b_time =="6") || ($b_time =="7")|| ($b_time =="8")|| ($b_time =="9")|| ($b_time =="10") || ($b_time =="11") )&&($b_period == "PM"))
    {
    ?>
     <script>alert("هذة الخدمة غير متاحة في هذة الأوقات  ");</script>
    <h4 class="text-center" style="font-family: 'Reem Kufi', sans-serif; color: darkslategray; min-height: 170px; padding: 170px; background-color: #eee;margin-top: 50px;">هذة الخدمة غير متاحة في هذة الأوقات :(</h4> <hr class="ln">
    <?php } 
    else {
    ?>
        <script>alert("يجب عليك تحديد المكان و الوقت ");</script>
    <h4 class="text-center" style="font-family: 'Reem Kufi', sans-serif; color: darkslategray; min-height: 170px; padding: 170px; background-color: #eee;margin-top: 50px;">يجب عليك تحديد المكان و الوقت :(</h4> <hr class="ln">
    <?php } ?>
         
    <!-- --------------------------start footer ---------------- -->
<footer id="footer" class="footer">
    <div class="container">
        <div class="foot-item">
            <div class="row">
                <div class="col-md-4">
                        <h5 class="text-center">تواصـل معنـا  <li class="fa fa-angle-double-down" style="color:#fd5f00 "></li></h5>
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
                            <i class="fa fa-map-marker"> المنوفية / مصر </i>
                      </div>
                        <i class="fa fa-phone fa-2x  wow fadeInLeft"></i>

                        <div class="addr-info">
                                <i class="fa fa-phone"> +20: 5061019 </i>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-default book"><a href="#">إحجز مقعد الأن </a></button>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyrigh text-center wow slideInUp">
      حقوق النشر &copy; 2019 <span>لفريق وصلني </span>
</div>
<!-- --------------------------end footer ---------------- -->
        
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/booking.js"></script>
    
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
   
    </body>
    
				
</html>