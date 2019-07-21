<!DOCTYPE html>
<html lang="en" >
<head>
 
  <title>تسجيل الدخول  (WASALNY)</title>
 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/cssfile.css">
	
<style>

.load-overlay{
  background-color: #13334c;
  position: fixed;
  top:0;
  left: 0;
   width: 100%;
   height: 100%;
   z-index: 99999;
}
.load-overlay .spinner {
  margin: 100px auto;
  width: 40px;
  height: 40px;
  margin-top: 20%;
  position: relative;
}

.load-overlay .cube1,.load-overlay .cube2 {
  background-color: orangered;
 
  width: 30px;
  height: 30px;
  position: absolute;
  top: 0;
  left: 0;
  
  -webkit-animation: sk-cubemove 1.8s infinite ease-in-out;
  animation: sk-cubemove 1.8s infinite ease-in-out;
}

.load-overlay .cube2 {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}

@-webkit-keyframes sk-cubemove {
  25% { -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5) }
  50% { -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg) }
  75% { -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5) }
  100% { -webkit-transform: rotate(-360deg) }
}

@keyframes sk-cubemove {
  25% { 
    transform: translateX(42px) rotate(-90deg) scale(0.5);
    -webkit-transform: translateX(42px) rotate(-90deg) scale(0.5);
  } 50% { 
    transform: translateX(42px) translateY(42px) rotate(-179deg);
    -webkit-transform: translateX(42px) translateY(42px) rotate(-179deg);
  } 50.1% { 
    transform: translateX(42px) translateY(42px) rotate(-180deg);
    -webkit-transform: translateX(42px) translateY(42px) rotate(-180deg);
  } 75% { 
    transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
    -webkit-transform: translateX(0px) translateY(42px) rotate(-270deg) scale(0.5);
  } 100% { 
    transform: rotate(-360deg);
    -webkit-transform: rotate(-360deg);
  }
}

</style>
  
</head>
<body>
 
  <div class="load-overlay">
    <div class="spinner">
      <div class="cube1"></div>
      <div class="cube2"></div>
    </div>
</div>

<section>
<div class="container">
  <div class="row">
    <div class="col-md-6">
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">تسجيل الدخول</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">انشاء حساب</label>
    <div class="login-form">
      <form class="sign-in-htm" action="./api/user/login.php" method="GET">
        <div class="group">
          <label for="user" class="label">البريد الالكتروني</label>
          <input id="email" name="email" type="text" class="input" required>
        </div>
        <div class="group">
          <label for="pass" class="label">الرقم السري</label>
          <input id="password" name="password" type="password" class="input" data-type="password" required>
        </div>
        <div class="group">
          <select name="login_as" id="" required>
            <option value="student">طالب</option>
            <option value="driver">سائق </option>
            
        </select>
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> البقاء متصل </label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="تسجيل الدخول">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">نسيت كلمه المرور</a>
        </div>
      </form>
      <form class="sign-up-htm" action="./api/user/signup.php" method="POST">
         <div class="group">
          <label for="user" class="label">الإسم</label>
          <input id="name" name="name" type="text" class="input" required>
        </div>
        <div class="group">
          <label for="user" class="label">الهاتف</label>
          <input id="phone" name="phone" type="tel" class="input" required>
        </div>
        <div class="group">
          <label for="user" class="label">البريد الالكتروني</label>
          <input id="email" name="email" type="text" class="input" required>
        </div>
        <div class="group">
          <label for="pass" class="label">الرقم السري</label>
          <input id="password" name="password" type="password" class="input" data-type="password" required>
        </div>
       
        <div class="group">
          <select name="login_as" id="" required>
            <option value="sign">التسجيل ك</option>
            <option value="driver">سائق </option>
            <option value="student">طالب</option>
        </select>
        </div>
            


	  <div class="group">
          <input type="submit" class="button" value="انشاء حساب" style="margin-top: 20px;">
        </div>        
          <label for="tab-1" class="text-center" style="color:#fff; margin-right: 48%;; font-weight: bold;">عضو بالفعل </a>
      </form>
    </div>
  </div>
</div>
    </div>
    <div class="col-md-6">
      <div class="overlay">
        <div class="visitor">
      <h4 class="text-center" >الموقع الخاص ب وصلني </h4> <hr class="ln">
      <p class="lead text-center">يستخدم لنقل الطلاب الجامعيين من و إلي الجامعة </p>
      <button class="btn btn-primary btn_vs"><a href="visitor.php">الدخول كزائر<a></button>
      </div>
      </div>
    </div>
  </div>
</div>
</section>

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/scripte.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/wow.min.js"></script>
    
    <script>
    new WOW().init();
    $(function () {
    'use strict';  

           $(window).load(function(){
            // $('body').css("overflow","auto");

            $('.load-overlay .spinner').fadeOut(3000,
            function(){
                $(this).parent().fadeOut(1000,
                function(){
                    $('this').remove();
                })
            })
        });
      });
    </script> 
</body>
</html>
