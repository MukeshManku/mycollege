<?php



include('dbconnection.php');

if(isset($_POST['submit']))
{
	$sql ="INSERT INTO staff(Name, Department, Contact, Photo) VALUES ('$_POST[Name]','$_POST[Department]','$_POST[Contact]','$_POST[Photo]')";
	if(!$qsql = mysqli_query($conn,$sql))
	{
		echo mysqli_error($conn);
	}
	echo "<script>alert('New Employee record inserted Successfully !!!')</script>";
}
?>



<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>College Website</title>
    <link rel="icon" href="image/monogram.png">
    <link rel="stylesheet" href="style.css" type="text/css">
	 <link rel="stylesheet" href="record.css" type="text/css">
   <link rel="stylesheet" href="admin.css" type="text/css">
    <link href="css/font-awesome.min.css"rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
     <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
     <link href="js/jquery.mCustomScrollbar.min.css"rel="stylesheet" type="text/css"/>
     
   
        
</head>
<body>
    <!--college logo and college name-->
   <div id="record_admin">
      <a href="Admin.php"><img src="image/Admin2.png" ></a>
  </div> 
  <div style="margin-top:20px;" id="recordheding">
      <h1><a href="Admin.php">STAFFS RECORDS</a></h1>
  </div> 
    <div id="clear"></div>
   
   
    
        <!--contener-->
    <div id="cantantsubject">

      <div id="addsubject" class="two_third"> 
     
        <h2><a href="view_staff.php">View Staffs Details </a> | <a href="teacher_add.php">Add Teachers Records</a></h2>
        
        <p>&nbsp;
        <form method="post" action=""  onsubmit="return validateform()">
        <div class="subadd">
        <table width="200" border="1">
 
  <tr>
    <td height="38">Name</td>
    <td><input style="padding:3px; width:250px;" type="text"  name="Name" ></td>
  </tr>
   <tr>
    <td height="38">Department</td>
    <td><input style="padding:3px; width:250px;" type="text" name="Department" ></td>
  </tr>
  
  
  <tr>
    <td height="38">Contact</td>
    <td><input style="padding:3px; width:250px;" type="text" name="Contact" ></td>
  </tr>
  <tr>
    <td height="38">Photo</td>
    <td><input style="padding:3px; width:250px; cursor: pointer;" type="file" name="Photo" ></td>
  </tr>
   
 
  
  <tr>
    <td>&nbsp;</td>
    <td><input style="padding:3px; width:150px; cursor: pointer;" type="submit" name="submit" id="submit" value="Submit"></td>
  </tr>
</table>
</div>
</form>
    </div>
    
  </div>
   
   
  
  
  <!--footer-->
  
   <div id="buttom_footer">
      <h1>RAM LAKHAN SINGH YADAV COLLEGE, RANCHI</h1>
      <H2>RANCHI JHARKHAND, 834001</H2> 
      <div class="footer_nav">
      <ul> <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">Help</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="notices.php">Notice</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        </ul>
        </div>
        <div id="footer_devloper">
        <p>Copyright &#169; All Rights Reserved</p>
      <span>Designed & Maintained by: <i>Ranjan Kumar.</i></span>
      </div>
   </div>
    
    
   

    </body>
</html>
