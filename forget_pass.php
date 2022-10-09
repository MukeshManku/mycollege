<?php

include('dbconnection.php');
session_start(); 

$Pass= "";
if (isset($_POST['Rpass'])) {

  $email = $_POST['email'];

 
   $sql = "SELECT * FROM stu_register WHERE email='$email'";
  	$query = mysqli_query($conn, $sql);
    $result = mysqli_num_rows($query);
   $row = mysqli_fetch_array($query);
     if($result > 0)
     {  
         $Pass = base64_decode($row['password']);
         
     }
    else
    {
       $Pass = " No Record Found !!!";
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
        <div id="forget_pass_stu">
           
                
                
                
                     <form action="" method="post">
                     <div id="btn">
                         <a href="home.php">BACK</a>
                         
                     </div>
			
               <h3>Forgot Password Form!!!</h3>  
               
           <p1 style="color:red; padding-left:18%;"><?php echo "<b>Password:</b>$Pass" ?></p1>
            
	            <div class="pass_recovery">
                <p>Email:</p>
                <input type="text" name="email" placeholder="Enter the Email">
            
                         </div>
               <div style="margin-top:10px;" class="uesr_admin_sub">
                <input type="submit" name="Rpass" value="Recovery Password">
                </div>
                
            </form>
               
               
                
                
       
            
            
        </div>
        
        
    </body>
</html>
