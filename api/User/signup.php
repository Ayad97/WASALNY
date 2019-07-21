<?php
 
// get database connection
include_once '../config/database.php';
 
// instantiate user object
include_once '../objects/user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 
// set user property values

$user->name = $_POST['name'];
$user->phone = $_POST['phone'];
$user->email = $_POST['email'];
$user->password = base64_encode($_POST['password']);
$user->login_as = $_POST['login_as'];

 
// create the user
if($user->signup()){
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Signup!",
        "id" => $user->id,
        "name" => $user->name,
		"phone" => $user->phone,
        "email" => $user->email,
		"password" => $user->password, 
		"login_as" => $user->login_as, 

		header("Location:../../index.php")
		);
	}			

else{
    $user_arr=array(
        "status" => false,
        
	);
	?>
<script>alert('يرجي إدخال بيانتا صحيحة')</script>
<?php
}

?>