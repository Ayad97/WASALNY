<!DOCTYPE html>
<html>
<head>
    

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>حجز المقعد (WASALNY)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <link rel="stylesheet" type="text/css" media="screen" href="css/seat_reserved.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <?php
    $conn= mysqli_connect('127.0.0.1', 'root' , '',"wasalny" );
     $selected = array();
    $stmt = $conn->prepare("select* from payment");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row =$result->fetch_assoc()){
             $selected[]=  $row;
            
        }
    $str = '';
     foreach ($selected as $data) {
        // echo  $data['clicked'];
         $a= $data['clicked'];
         

for( $i = 1; $i <= 1; $i++ ) {
    $str .= $a . ' ';    
}
 
        }
    // echo $str;

    
?>
<script>
    
    var javaScriptVar = "<?php echo $str; ?>";
   // alert(javaScriptVar);
 $(document).ready(function(){
    if(javaScriptVar.includes('01A')){
            $('#01A').css("background-color","#050");
            $('#01A').css("color","#fff");
     };
    if(javaScriptVar.includes('02A')){     
            $('#02A').css("background-color","#050");
            $('#02A').css("color","#fff");
           // $("#02A").css("pointer-events", "none");
             };
    if(javaScriptVar.includes('05A')){
            $('#05A').css("background-color","#050");
            $('#05A').css("color","#fff");
     };
    if(javaScriptVar.includes('06A')){
            $('#06A').css("background-color","#050");
            $('#06A').css("color","#fff");
     };
    if(javaScriptVar.includes('09A')){
            $('#09A').css("background-color","#050");
            $('#09A').css("color","#fff");
     };
    if(javaScriptVar.includes('10A')){
            $('#10A').css("background-color","#050");
            $('#10A').css("color","#fff");
     };
    if(javaScriptVar.includes('13A')){
            $('#13A').css("background-color","#050");
            $('#13A').css("color","#fff");
     };
    if(javaScriptVar.includes('14A')){
            $('#14A').css("background-color","#050");
            $('#14A').css("color","#fff");
     };
    if(javaScriptVar.includes('17A')){
            $('#17A').css("background-color","#050");
            $('#17A').css("color","#fff");
     };
    if(javaScriptVar.includes('18A')){
            $('#18A').css("background-color","#050");
            $('#18A').css("color","#fff");
     };
    if(javaScriptVar.includes('21A')){
            $('#21A').css("background-color","#050");
            $('#21A').css("color","#fff");
     };
    if(javaScriptVar.includes('22A')){
            $('#22A').css("background-color","#050");
            $('#22A').css("color","#fff");
     };
    if(javaScriptVar.includes('25A')){
            $('#25A').css("background-color","#050");
            $('#25A').css("color","#fff");
     };
    if(javaScriptVar.includes('26A')){
            $('#26A').css("background-color","#050");
            $('#26A').css("color","#fff");
     };
    if(javaScriptVar.includes('29A')){
            $('#29A').css("background-color","#050");
            $('#29A').css("color","#fff");
     };
        
   if(javaScriptVar.includes('30A')){     
            $('#30A').css("background-color","#050"); 
            $('#30A').css("color","#fff");           
     };
    
    
    
    
    if(javaScriptVar.includes('03B')){     
            $('#03B').css("background-color","#050"); 
            $('#03B').css("color","#fff");
            
     };
    if(javaScriptVar.includes('04B')){     
            $('#04B').css("background-color","#050"); 
            $('#04B').css("color","#fff");
            
     };
    if(javaScriptVar.includes('07B')){     
            $('#07B').css("background-color","#050"); 
            $('#07B').css("color","#fff");
            
     };
    if(javaScriptVar.includes('08B')){     
            $('#08B').css("background-color","#050"); 
            $('#08B').css("color","#fff");
            
     };
    if(javaScriptVar.includes('11B')){     
            $('#11B').css("background-color","#050"); 
            $('#11B').css("color","#fff");
            
     };
    if(javaScriptVar.includes('12B')){     
            $('#12B').css("background-color","#050"); 
            $('#12B').css("color","#fff");
            
     };
    if(javaScriptVar.includes('15B')){     
            $('#15B').css("background-color","#050"); 
            $('#15B').css("color","#fff");
            
     };
    if(javaScriptVar.includes('16B')){     
            $('#16B').css("background-color","#050"); 
            $('#16B').css("color","#fff");
            
     };
    if(javaScriptVar.includes('19B')){     
            $('#19B').css("background-color","#050"); 
            $('#19B').css("color","#fff");
            
     };
    if(javaScriptVar.includes('20B')){     
            $('#20B').css("background-color","#050"); 
            $('#20B').css("color","#fff");
            
     };
    if(javaScriptVar.includes('23B')){     
            $('#23B').css("background-color","#050"); 
            $('#23B').css("color","#fff");
            
     };
    if(javaScriptVar.includes('24B')){     
            $('#24B').css("background-color","#050"); 
            $('#24B').css("color","#fff");
            
     };
    if(javaScriptVar.includes('27B')){     
            $('#27B').css("background-color","#050"); 
            $('#27B').css("color","#fff");
            
     };
    if(javaScriptVar.includes('28B')){     
            $('#28B').css("background-color","#050"); 
            $('#28B').css("color","#fff");
            
     };
    if(javaScriptVar.includes('31B')){     
            $('#31B').css("background-color","#050"); 
            $('#31B').css("color","#fff");
            
     };
    if(javaScriptVar.includes('32B')){     
            $('#04B').css("background-color","#050"); 
            $('#04B').css("color","#fff");
            
     };
    
    
 
  $("span").dblclick(function(){
      textt=$(this).text();
      
    //  var n = javaScriptVar.includes(textt);
      if (javaScriptVar.includes(textt)) {
          alert('هذا الكرسي غير متاح :( ')
    $(this).css("background-color","#050");
      }
      else{
          
      
      $(this).css("background-color","#F00");
        $(this).css("color","#fff");
      
      //=$(this).text();
      
      //alert("dd");
      textareaa =$("#seatt").val();
      temp = textareaa +" "+ textt;
      $("#seatt").val(temp);
      }
             
  });
    $('span').click(function(){
       $(this).css("background-color","#13334c");
        $(this).css("color","#fff")  ;
        textt=$(this).text();
         textareaa =$("#seatt").val();
        newvalue =textareaa.replace(textt,"")
        $("#seatt").val(newvalue);
        
     });
   
 });
     
 </script>
		
</head>
<body class="overlay">
 
    <form action="details_reservation.php" method="post">
    <section id="reserved" class="reserved">
        <div class="overlay">
            <div class="container">
            <div class="reserved_item">
                <h4 class="text-center"> إحجـز مقعدك الأن</h4>
                <hr class="ln">
            </div>
            <div class="reserved_data">
                <div class="row">
                    <div class="col-md-6">
                        
                       
                        <div class="form-group">
                                <label for="exampleInputUsername" class="wow flipInX">عدد المقاعد </label>
                            <div class="input-group input-group-md wow slideInDown">
                            
                                <select  id="numseat" name="numseat">
                                        <option>اختر عدد المقاعد</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                </select>
                            </div>
                                <input type="text" id="seatt" name="seatt" placeholder="اختر المقاعد" value=" ">
                        </div>
                </div>  
                 <div class="col-md-6">
                     <div class="select_st">
                        <h4 class="text-center"> المقاعد المتاحة داخل الأتوبيس </h4>
                        <p class="text-center">اختر عدد الكراسي و الاماكن التي تريدها </p>
                        <hr class="ln">
                    </div>
                    <div class="choose_st">
                    <div class="rt_seat">
                        <div style="margin-bottom: 15px;">
                            <span class="rt" id="01A" onclick="add()">01A</span>
                            <span class="rt" id="02A" onclick="add">02A</span>
                        </div>
                        
                      <input type="hidden" name="01A" value="01A" >

    
                        <br>
                        <div style="margin-bottom: 15px;">
                            <span  class="rt" id="05A" onclick="add" >05A</span>
                            <span class="rt" id="06A" onclick="add">06A</span>
                        </div>
                        <br>
                        <div style="margin-bottom: 15px;">
                            <span class="rt" id="09A" onclick="add">09A</span>
                            <span class="rt" id="10A" onclick="add">10A</span>
                        </div>
                        
                        <br>
                        <div style="margin-bottom: 15px;">
                            <span class="rt" id="13A" onclick="add">13A</span>
                            <span class="rt" id="14A" onclick="add">14A</span>
                        </div>
                        <br>
                        <div style="margin-bottom: 15px;">
                            <span class="rt" id="17A" onclick="add">17A</span>
                            <span class="rt" id="18A" onclick="add">18A</span>
                        </div>
                        <br>
                        <div style="margin-bottom: 15px;">
                            <span class="rt" id="21A" onclick="add">21A</span>
                            <span class="rt" id="22A" onclick="add">22A</span>
                        </div>
                        <br>
                        <div style="margin-bottom: 15px;">
                            <span class="rt" id="25A" onclick="add">25A</span>
                            <span class="rt" id="26A" onclick="add">26A</span>
                        </div>
                        <br>
                        <div style="margin-bottom: 15px;">
                            <span class="rt" id="29A " onclick="add">29A</span>
                            <span class="rt" id="30A " onclick="add">30A</span>
                        </div>
                    </div>


                    <div class="lf_seat">
                        <div style="margin-bottom: 15px;">
                            <span class="lf" id="03B" onclick="add">03B</span>
                            <span class="lf" id="04B" onclick="add">04B</span>
                        </div>
                        <br>
                        <div style="margin-bottom: 15px;">
                            <span class="lf" id="07B" onclick="add">07B</span>
                            <span class="lf" id="08B" onclick="add">08B</span>
                        </div>
                        <br>
                        <div style="margin-bottom: 15px;">
                            <span class="lf" id="11B" onclick="add">11B</span>
                            <span class="lf" id="12B" onclick="add">12B</span>
                        </div>
                        <br>
                        <div style="margin-bottom: 15px;">
                            <span class="lf" id="15B" onclick="add">15B</span>
                            <span class="lf" id="16B" onclick="add">16B</span>
                        </div>
                        <br>
                        <div style="margin-bottom: 15px;">
                            <span class="lf" id="19B" onclick="add">19B</span>
                            <span class="lf" id="20B" onclick="add">20B</span>
                        </div>
                        <br>
                        <div style="margin-bottom: 15px;">
                            <span class="lf" id="23B" onclick="add">23B</span>
                            <span class="lf" id="24B" onclick="add">24B</span>
                        </div>
                        <br>
                        <div style="margin-bottom: 15px;">
                            <span class="lf" id="27B" onclick="add">27B</span>
                            <span class="lf" id="28B" onclick="add">28B</span>
                        </div>
                        <br>
                        <div style="margin-bottom: 15px;">
                            <span class="lf" id="31B" onclick="add">31B</span>
                            <span class="lf" id="32B" onclick="add">32B</span>
                        </div>
                        <br>
                    <div>

                    </div>
                        
                    </div>
                 </div>   
                </div>
            </div>
            </div>
        </div>
        <!--  -->
        <div class="row" id="pay">
                <div class="col-75">
                  <div class="container">
                    
                  
                      <div class="row">
                        <div class="col-50">
                          <h3>Billing Address</h3>
                          <label for="fname"><i class="fa fa-user"></i> الأسم بالكامل</label>
                          <input type="text" id="fname" name="firstname" placeholder="" required>
                          <label for="email"><i class="fa fa-envelope"></i> البريد الالكتروني</label>
                          <input type="text" id="email" name="email" required placeholder="fer@example.zsc">
                          <label for="adr"><i class="fa fa-address-card-o"></i> العنوان</label>
                          <input type="text" id="adr" name="address" placeholder="العنوان بالكامل" required>
                          <label for="city"><i class="fa fa-institution"></i> البلد</label>
                          <input type="text" id="city" name="city" placeholder="" required>
              
                          <div class="row">
                            <div class="col-50">
                              <label for="state">الحالة</label>
                              <input type="text" id="state" name="state" placeholder="NY" required>
                            </div>
                            <div class="col-50">
                              <label for="zip">Zip</label>
                              <input type="text" id="zip" name="zip" placeholder="10001" required>
                            </div>
                          </div>
                        </div>
              
                        <div class="col-50">
                          <h3>وسيلة الدفع</h3>
                          <label for="fname"> الكروت المدعومة </label>
                          <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                          </div>
                          
                          <label for="ccnum">رقم الكارت</label>
                          <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
                          <label for="expmonth">شهر الانتهاء</label>
                          <input type="text" id="expmonth" name="expmonth" placeholder="9" required>
              
                          <div class="row">
                            <div class="col-50">
                              <label for="expyear">سنة الانتهاء</label>
                              <input type="text" id="expyear" name="expyear" placeholder="2020" required>
                            </div>
                            <div class="col-50">
                              <label for="cvv">CVV</label>
                              <input type="text" id="cvv" name="cvv" placeholder="352"  required>
                            </div>
                          </div>
                        </div>
              
                      </div>
                    
                      <input onclick="fun()" type="submit" id="btn" value="تأكيد" class="btn">
                    </form>
                  </div>
                </div>
              
            
                  </div>
                </div>
              </div>
    </div>
        
    
</body>
</html>