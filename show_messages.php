<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>إبحث عن (WASALNY)</title>

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
        <link rel="stylesheet" type="text/css" media="screen" href="css/booking.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/show_messages.css" />
       
</head>
<body>
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
            <li><a href="#" data-scroll="#history">تاريخنا</a></li>
            <li><a href="#" data-scroll="#skills">الحلول</a></li>
            <li role="separator" class="divider" ></li>
            <li><a href="#sponser" data-scroll="#client">الرُعاة</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" data-scroll="#">الرحلات</a></li>
        </ul>
    </li>
    <li class="active tm"><a href="#" data-scroll="#team">الرسائل و التعليقات </a></li>
    </ul>

</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<!-- ------------------------------------------------------------------------------  -->

<ul class="breadcrumb" >
    <li><a href="home.php" >الصفحة الرئيسية</a></li>
    <li><a href="#" style="color: #fd5f00"> الرسائل و التعليقات</a></li>
</ul>
  <!-- ------------------------------------------------------------------------------  -->
  <section id="table">
  <table class="table">
    <thead>
      <tr>
        <th class="table-primary">الإسم</th>
        <th class="table-success">الإيميل</th>
        <th class="table-danger">الهاتف</th>
        <th class="table-warning">الرسالة</th>
      </tr>

    <?php


$conn= mysqli_connect('127.0.0.1', 'root' , '' ,'wasalny');
//mysql_select_db("search");
if (!$conn){
    echo "<script> alret ('Site not Conected!!!!!!! , pleas try again')</script>";
   // echo 'not conected!!!!!!!';
}

$sql = "SELECT s_name,s_email,s_phone,s_message from website" ;
$result = $conn-> query($sql);

if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td class='table-primary'>".$row["s_name"] .
        "</td>"."<td class='table-success'>".$row["s_email"] ."</td>"."<td class='table-danger'>".$row["s_phone"] ."</td>"."<td class='table-warning'>".$row["s_message"] ."</td></tr>";

    }
    echo "</table>";
}
else{
    echo "0 result";
}
$conn-> close();
     ?>
    
    </tbody>
  </table>

  </section>

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