<!DOCTYPE html>
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
<body  onload="document.getElementById('defaultOpen').click();">
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
    <li class="active"><a href="#" data-scroll="#history">أدمن الموقع</a></li>
    
   
    <li class="log"><a href="index.php" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> <i style="color: tomato" class="fa fa-sign-in"></i> تسجيل الخروج  </a></li>
    </ul>

</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<!-- ------------------------------------------------------------------------------  -->
<section id="admin_control" class="admin_control">
    <div class="container">
        <div class="control_item">
            <div class="row">
                <div class="col-md-12">
                    <button class="tablink" onclick="openPage('Home', this, '#000')"id="defaultOpen">إضافة سائق</button>
                    <button class="tablink" onclick="openPage('News', this, '#000')" >بيانات السائقين</button>
                    <button class="tablink" onclick="openPage('About', this, '#000')">الحجوزات</button>
                    <button class="tablink" onclick="openPage('Contact', this, '#000')"> الرسائل و التعليقات </button>
                   

                    <div id="Home" class="tabcontent add_driver">
                        <form action="add_driver.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                                <label for="exampleInputUsername" class="wow flipInX">الإســم</label>
                                            <div class="input-group input-group-lg wow slideInDown">
                                               
                                                <input type="text" name="d_name" class="form-control" id="" placeholder="أدخــل الإســم" aria-describedby="basic-addon1" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                <label for="exampleInputUsername" class="wow flipInX">العُمر</label>
                                            <div class="input-group input-group-lg wow slideInDown">
                                               
                                                <input type="number" name="d_age" class="form-control" id="" placeholder="أدخــل العُمر" aria-describedby="basic-addon1" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                <label for="exampleInputUsername" class="wow flipInX">رقـم الهـاتـف</label>
                                            <div class="input-group input-group-lg wow slideInDown">
                                                
                                                <input type="tel" name="d_phone" class="form-control" id="" placeholder="أدخــل رقـم الهاتـف" aria-describedby="basic-addon1" maxlength="11" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                                <label for="exampleInputUsername" class="wow flipInX">الإيميــل</label>
                                            <div class="input-group input-group-lg wow slideInDown">
                                                
                                                <input type="email" name="d_email" class="form-control" id="" placeholder="أدخــل الإيميـل الخـاص بـك" aria-describedby="basic-addon1" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="" class="wow flipInX">كلمة السر</label>
                                            <div class="input-group input-group-lg wow slideInDown">
                                                
                                                <input type="password" name="d_password" class="form-control" id="" placeholder="أدخــل كلمة السر الخـاصة بـك" aria-describedby="" required>
                                            </div>
                                        </div>
                                        
                                        
                                </div> 
                                <div class="col-md-6">
                                        <div class="form-group">
                                                <label for="exampleInputUsername" class="wow flipInX">الرقم القومي </label>
                                            <div class="input-group input-group-lg wow slideInDown">
                                                
                                                <input type="number" name="d_nid" class="form-control" id="" placeholder="أدخــل الرقم القومي " aria-describedby="basic-addon1" maxlength="14" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="exampleInputUsername" class="wow flipInX"> رخصة القيادة </label>
                                            <div class="input-group input-group-lg wow slideInDown">
                                                <input type="number"  class="form-control"  name="d_license" placeholder="رقم الرخصة" maxlength="14" >
                                            </div>
                                        </div>
                                        <div class="group form-group">
                                    <select name="login_as" id="" required>
                                        <option value="sign">التسجيل ك</option>
                                        <option value="driver">سائق </option>
                                        <option value="student">طالب</option>
                                    </select>
                                    </div>
                                        </div>
       
                                   
                                </div>
                                <input type="submit" name="submit" value="إضافة" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
    <!-- ------------------------------------------------------------------------ -->

<div id="News" class="tabcontent driver_data">
  
  <table class="table">
    <thead>
      <tr>
        <th class="table-primary">الإسم</th>
        <th class="table-success">العُمر</th>
        <th class="table-danger">الهاتف</th>
        <th class="table-success">الإيميــل</th>
        <th class="table-warning">رقم الرخصة</th>
        <th class="table-primary">الرقم القومي</th>
        <th class="table-success"> تحديث البيانات</th>
        <th class="table-primary">إزالة البيانات </th>
        
      </tr>

    <?php


$conn= mysqli_connect('127.0.0.1', 'root' , '' ,'wasalny');
//mysql_select_db("search");
if (!$conn){
    echo "<script> alret ('Site not Conected!!!!!!! , pleas try again')</script>";
   // echo 'not conected!!!!!!!';
}

$sql = "SELECT d_name , d_age , d_phone , d_email , d_license , d_nid from drive_data" ;
$result = $conn-> query($sql);

if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){?>
    <form action="adminpage.php" method="post">
    <tr>
        <td class='table-primary'><?php echo $row["d_name"]?></td>
        <td class='table-success'><?php echo $row["d_age"]?></td>
        <td class='table-danger'><?php echo $row["d_phone"] ?></td>
        <td class='table-success'><?php echo $row["d_email"] ?></td>
        <td class='table-warning'><?php echo $row["d_license"] ?></td>
        <td class='table-primary'><?php echo $row["d_nid"] ?></td>
       
        <td class='table-success'> <input type="submit" name="update" value="Update" class="btn btn-primary"> </td>
        <td class='table-primary'> <input type="submit" name="delete" value="Delete" class="btn btn-danger"> </td>
        <!-- <td><input type="hidden" name="hidden" value="<?php echo $row['d_name']?>"/> </td> -->
     
    </tr>
    </form>
    <?php }?>
    </thead>

    <!-- <form action="adminpage.php" method="post">
    <tr>
        <td><input type=text class="form-control" name=u_name></td>
        <td><input type=text class="form-control" name=u_age></td>
        <td><input type=text class="form-control" name=u_phone></td>
        <td><input type=text class="form-control" name=u_email></td>
        <td><input type=text class="form-control" name=u_license></td>
        <td><input type=text class="form-control" name=u_nid></td>
        <td>
            <input type="submit" name="add" value="add"/>
        </td>
    </tr>
    </form> -->
   
</table>
<?php }
    else{
        echo "0 result";
    }
$conn-> close();
?>
    </tbody>
  </table>
  
</div>
<!-- ---------------------------------------------------------------------- -->
<div id="About" class="tabcontent">
<table class="table">
    <thead>
      <tr>
        <th class="table-primary">الإسم</th>
        <th class="table-success">الإيميل</th>
        <th class="table-primary">رقم الكرسي</th>
        <th class="table-danger">من</th>
        <th class="table-warning">إلي</th>
        <th class="table-danger">الوقت</th>
        <th class="table-success">الفترة</th>
        <th class="table-primary">التاريخ</th>
        <th class="table-success"> تحديث البيانات</th>
        <th class="table-primary">إزالة البيانات </th>
      </tr>

    <?php


$conn1= mysqli_connect('127.0.0.1', 'root' , '' ,'wasalny');
$conn2= mysqli_connect('127.0.0.1', 'root' , '' ,'wasalny');
//mysql1_select_db("search");
if (!$conn1){
    echo "<script> alret ('Site not Conected!!!!!!! , pleas try again')</script>";
   // echo 'not conected!!!!!!!';
}
if (!$conn2){
    echo "<script> alret ('Site not Conected!!!!!!! , pleas try again')</script>";
   // echo 'not conected!!!!!!!';
}

$sql1 = "SELECT py_name,py_email,clicked from payment" ;
$sql2 = "SELECT b_to,b_from,b_time,b_period,b_date from available_buses" ;
$result = $conn1-> query($sql1);
$result2 = $conn2-> query($sql2);


if( ($result-> num_rows > 0) && ($result2-> num_rows > 0) )
{
    while( ($row = $result-> fetch_assoc()) && ($row2 = $result2-> fetch_assoc())){
        ?>
        <tr>
            <td class='table-primary'><?php echo $row["py_name"]?> </td>
            <td class='table-success'> <?php echo $row["py_email"]?> </td>
            <td class='table-primary'> <?php echo $row["clicked"]?> </td>
            <td class='table-danger'> <?php echo $row2["b_to"]?> </td>
            <td class='table-warning'> <?php echo $row2["b_from"]?> </td>
            <td class='table-danger'> <?php echo $row2["b_time"]?> </td>
            <td class='table-success'> <?php echo $row2["b_period"]?> </td>
            <td class='table-primary'> <?php echo $row2["b_date"]?> </td>
            <td class='table-success'> <input type="submit" name="update" value="Update" class="btn btn-primary"> </td>
            <td class='table-primary'> <input type="submit" name="delete" value="Delete" class="btn btn-danger"> </td>
        </tr>
    <?php } ?>
    </thead>
   
</table>
    <?php 
    }
else{
    echo "0 result";
}
$conn1-> close();
$conn2-> close();
     ?>
       
    </tbody>
  </table>
</div>

                </div>
            </div>
        </div>
    </div>
<!-- -------------------------------------------------------------------------- -->

<div id="Contact" class="tabcontent">
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
    while($row = $result-> fetch_assoc()){?>
        <tr>
            <td class='table-primary'><?php echo $row["s_name"] ?> </td>
            <td class='table-success'><?php echo $row["s_email"] ?></td>
            <td class='table-danger'><?php echo $row["s_phone"] ?></td>
            <td class='table-warning'><?php echo $row["s_message"] ?></td>
        </tr>

        
    <?php }?>
    </table>
    <?php
}
else{
    echo "0 result";
}
$conn-> close();
     ?>
    
    </tbody>
  </table>
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
    <script src="js/scripte.js"></script>
    <script src="js/adminpage.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
</body>
</html>
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
if(isset($_POST['update'])){
    $UpdateQuery = "UPDATE drive_data SET d_name='$_POST[d_name]', d_age='$_POST[d_age]', d_phone='$_POST[d_phone]' , d_email='$_POST[d_email]', d_license='$_POST[d_license]', d_nid='$_POST[d_nid]'  
     WHERE d_name='$_POST[hidden]'";               
    mysql_query($UpdateQuery, $conn);
    };
    
    // if(isset($_POST['delete'])){
    // $DeleteQuery = "DELETE FROM drive_data WHERE d_name='$_POST[hidden]'";          
    // // mysql_query($DeleteQuery, $conn);
    // };
    if(isset($_POST['add'])){
        $AddQuery = "insert into drive_data(d_name, d_age , d_phone , d_email , d_password, d_nid , d_license) values('$_POST[u_name]','$_POST[u_age]','$_POST[u_phone]','$_POST[u_email]','$_POST[u_license]','$_POST[u_nid]')";         
        mysql_query($AddQuery, $conn);
        };
        
?>