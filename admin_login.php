<?php
include('dbconnection.php');
session_start(); 
 
// variable declaration
$username = "";
$errors = array(); 

if (isset($_POST['Login'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];
    if (empty($username AND $password)) {
  	array_push($errors, "Username/Password is required");
  }
if (count($errors) == 0) {
  	$passwords = md5($password);
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($conn, $sql);
    $match = mysqli_num_rows($result);
    
    if($match==1)
    {
        $_SESSION['username'] = $username;
        header('location: Admin.php');
    }
    else {
  		array_push($errors, "Wrong username/password do not match...");
    }
}
}
?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>College Website</title>
     <link rel="icon" href="image/monogram.png">
    <link rel="stylesheet" href="admin.css" type="text/css">
    <link rel="stylesheet" href="student.css" type="text/css">
    
   
    </head>
    <body>
        <div id="admin_login">
           
                
                
                
                     <form action="" method="post">
			
			
               <h3>Admin Login Form!!!</h3>
               <img style="position: absolute; top:60px;" src="image/38655133-admin.png" width="150" height="150">
               
             <?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p style="color:#a94442; width:80%; text-align: justify; padding-left:100px;"><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
           
            
	            <div class="uesr_admin">
                <p>Username:</p>
                <input type="text" name="username" placeholder="Enter the Username">
                <p>Password:</p>
                <input class="uesr_pass" type="password" name="password" placeholder="Enter the Password"><br><br>
                         </div>
               <div class="uesr_admin_sub">
                <input type="submit" name="Login" value="Login">
                </div>
                
            </form>
               
               
                
                
       
            
            
        </div>
        
        
    </body>
</html>
