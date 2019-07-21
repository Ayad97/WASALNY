<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';
session_start();
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);
// set ID property of user to be edited
$user->email = isset($_GET['email']) ? $_GET['email'] : die();
$user->password = base64_encode(isset($_GET['password']) ? $_GET['password'] : die());
$user->login_as = isset($_GET['login_as']) ? $_GET['login_as'] : die();
// read the details of user to be edited
$stmt = $user->login();
if($_GET['email'] == 'admin' && $_GET['password'] == 'admin' ){
    // echo 'admin';
    header("Location:../../adminpage.php");
}
elseif(($stmt->rowCount() > 0) ) {
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Login!",
        "id" => $row['id'],
        "email" => $row['email'],
        "login_as" => $row['login_as']
        
        // $_SESSION['email']=$row['email'],
	   

    );
    if($_GET['login_as'] == 'driver' ){
      header("Location:../../driver_showdata.php");  
    }
    else{
       header("Location:../../home.php"); 
    }
     
}


else{
    $user_arr=array(
        "status" => false,
        
      
    );
    
    ?>
<script>alert('يرجي التأكد من ادخال البيانات صحيحة')</script>
<?php
  //  header("Location:../../index.php");
}
// make it json format
print_r(json_encode($user_arr));
?>