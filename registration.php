<?php 
include('dbconnection.php');
session_start(); 
 
 
// variable declaration
$username = "";
$fast_name = "";
$last_name =""; 
$father_name = "";
$gender =""; 
$dob = "";
$email = "";
$phone ="";
$errors = array();
$match = "";


if (isset($_POST['Submit'])) {

  $username = $_POST['username'];
  $fast_name = $_POST['f_name'];
  $last_name = $_POST['l_name'];
  $father_name = $_POST['father_name'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $pass = $_POST['password'];
  $password = $_POST['confirmation_password'];
    
       $sql = "SELECT * FROM stu_register WHERE (username='$username' or email='$email')";
  	$query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query)>0)
    {
        $row = mysqli_fetch_assoc($query);
        if ($username==$row['username'])
        {
            $match = "Username already exists";
        }
        elseif($email==$row['email'])
        {
            $match = "Email already exists";
        }
        
    }else{
     // form validation: ensure that the form is correctly filled

  if (empty($username)) { array_push($errors, "Username is required");}
  if (empty($fast_name)) { array_push($errors, "Fast name is required"); }
  if (empty($last_name)) { array_push($errors, "Last name is required"); }
  if (empty($father_name)) { array_push($errors, "Father name is required"); }
  if (empty($gender)) { array_push($errors, "Gender is required"); }
  if (empty($dob)) { array_push($errors, "Date of brith is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phone)) { array_push($errors, "Phone is required"); }
  if (empty($pass)) { array_push($errors, "Password is required"); }
  if ($pass != $password) {
	array_push($errors, "passwords do not match");
      
  }
    
   
    
 // register user if there are no errors in the form
  if (count($errors) == 0) {
  	$passwords = base64_encode($pass);//encrypt the password before saving in the database
      
    
        
   
      
  $sql = "INSERT INTO stu_register(username, f_name, l_name, father_name, gender, dob, email, phone, password) VALUES ('$username', '$fast_name', '$last_name', '$father_name', '$gender', '$dob', '$email', '$phone', '$passwords')";
    mysqli_query($conn, $sql);
                
            
                $_SESSION['login_user'] = $username;
                $_SESSION['username'] = $username;
                $_SESSION['f_name'] = $fast_name;
                $_SESSION['l_name'] = $last_name;
                $_SESSION['father_name'] = $father_name;
                $_SESSION['gender'] =  $gender;
                $_SESSION['dob'] =  $dob;
                $_SESSION['email'] = $email;
                $_SESSION['phone'] = $phone;
 
  	
      echo '<script language="javascript">alert("Registration Succesfully !!!")</script>';
      echo '<script language="javascript">window.location = "student.php"</script>';
        //header("location: student.php");
          
      
  }
        
}
}
   
?>
<!DOCTYPE html>
<html lang="en-US">
<meta charset="UTF-8">
<head>
	<title>College Website</title>
    <link rel="icon" href="image/monogram.png">
    
    <link href="form.css" type="text/css" rel="stylesheet">
    <link href="css/font-awesome.min.css"rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
     <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
     <link href="js/jquery.mCustomScrollbar.min.css"rel="stylesheet" type="text/css"/>
	
</head>
<body>
<div class="registration">
<a id="home" href="home.php">HOME</a>
<h2>STUDENT REGISTRATION FORM !!</h2>
	<h4>Create an account</h4>
	<form action="registration.php" method="POST">
	<?php include('errors.php'); ?>
	<p1 style="color:red;"><?php echo " $match " ?></p1>

	<h3>USERNAME </h3>
<input id="registration_form" type="text" placeholder="Enter Your Username" name="username" value="<?php echo $username; ?>"><br>

	<h3 id="name_rasis">FIRST NAME</h3>
	<h3 id="name_rasis">LAST NAME</h3>
	<div id="clear"></div>
<input id="registration_form1" type="text" placeholder="Enter Your First Name" name="f_name" value="<?php echo $fast_name; ?>">


<input id="registration_form2" type="text" placeholder="Enter Your Last Name" name="l_name" value="<?php echo $last_name; ?>"><br>

<div id="clear"></div>
<h3>FATHER's NAME</h3>
<input id="registration_form" type="text" placeholder="Enter Your Father's Name" name="father_name" value="<?php echo $father_name; ?>"><br>
<h3 class="name_rasis">GENDER</h3>
<h3 class="name_rasis">DATE OF BIRTH</h3>
<div id="clear"></div>
 <div class="registration_form1">
                                <label>
                                    <input type="radio" name="gender" value="Male" checked /> Male
                                </label>
                           
                                <label>
                                    <input type="radio" name="gender" value="Female" /> Female
                                </label>
                            </div>
							
			


<input id="registration_form2" type="date" name="dob" value="<?php echo $dob; ?>"><br>
<div id="clear"></div>
	<h3>EMAIL</h3>
<input id="registration_form" type="email" placeholder="Enter Your Email" name="email" value="<?php echo $email; ?>"><br>
	<h3>PHONE</h3>
<input id="registration_form" type="text" placeholder="Enter Your Phone" name="phone" value="<?php echo $phone; ?>"><br>
	<h3>PASSWORD</h3>
<input id="registration_form" type="password" placeholder="Enter Your Password" name="password"><br>
	<h3>CONFIRMATION PASSWORD</h3>
<input id="registration_form" type="password" placeholder="Enter Your Confirmation password" name="confirmation_password"><br>

<input type="submit" id="registration_submit" value="REGISTERED" name="Submit"> 
<span class="Already_registered">Already registered? <a href="home.php">Login</a></span>

</form>
</div>
</body>
</html>