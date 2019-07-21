<!DOCTYPE html>
<html>
	<head>
		<title> </title>
		<meta charset= "utf-8">
		<meta name= "Description" content= "html5 for beginners">
		<link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

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
    

    $s_name =filter_input(INPUT_POST,  's_name') ;
    $s_email =filter_input(INPUT_POST,  's_email') ;
    $s_phone =filter_input(INPUT_POST,  's_phone') ;
    $s_msg =filter_input(INPUT_POST,  's_msg') ;
    // $s_simg =  "img/".basename($_FILES["simg"] ["name"]) ;
 
  
  
 
  
  
  
  
     $sql = "insert into website(s_name , s_email , s_phone , s_message) values ('$s_name' , '$s_email' , '$s_phone', '$s_msg' )" ;

 
     
     
     
          
    if (!MYsqli_query($conn,$sql)){
        
       echo '<script> alret ("site upload fail , pleas try again!!")</script>';
        
        
    }
   
 else {
        echo '<script> alret ("site upload successfully..")</script>';
    }
  

            header("Location: home.php");
        
    }


        ?>
        
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    </body>
				
</html>
  