<?php 
session_start();

?>



<?php

$connection = @mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("mycollege", $connection);


$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from stu_register where username='$user_check'");
$row = mysql_fetch_array($ses_sql);

    $fast_name = $row['f_name'];
    $last_name = $row['l_name'];
    $father_name = $row['father_name'];
    $gender = $row['gender'];
    $dob = $row['dob'];
    $phone = $row['phone'];   
    $email = $row['email'];
    
  

?>



<?php
include('dbconnection.php');

$sql = "SELECT count(id) AS total FROM addmission_form";
$result = mysqli_query($conn, $sql);
$value = mysqli_fetch_assoc($result);
$num_rows = $value['total'];

$sql = "SELECT count(id) AS total FROM examnation_form";
$result1 = mysqli_query($conn, $sql);
$value1 = mysqli_fetch_assoc($result1);
$num_rows1 = $value1['total'];

$sql = "SELECT count(id) AS total FROM book_form";
$result2 = mysqli_query($conn, $sql);
$value2 = mysqli_fetch_assoc($result2);
$num_rows2 = $value2['total'];



?>




<?php 
 
if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
  
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>College Website</title>
    <link rel="icon" href="image/monogram.png">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="student.css" type="text/css">
    <link href="css/font-awesome.min.css"rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
     <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
     <link href="js/jquery.mCustomScrollbar.min.css"rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
     <div id="login_sec">
      
      <ul>
       
		<li><a href="student.php" style="color: white;">Welcome</a></li>
        <li><a href="student.php" style="color: #1cef1b;"><i>|</i>Dashboard<i1>|</i1></a></li>
        <li><a href="home.php?logout='1'" style="color: red;">Logout</a></li> 
                  		  
        </ul>
   
   
           
       </div> 
     <div id="stu_img"> 
      <img src="image/student_PNG10.png" width="25%">  
     <img src="image/student.png" width="48%"> 
     <img src="image/student_PNG6.png" width="25%">   
      </div>
      
      <div id="stunav">
          
           <ul>
		  <?php  if (isset($_SESSION['username'])) : ?> 
        <li><p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></li>
        <li><a href="student.php?logout='1'" style="color: blue;">Logout</a></li> 
           <?php endif ?>     		  
        </ul>
           
           
       </div>
       
       <div id="clear"></div>
       
       <div id="stucontent">
          <div id="menu">
          <ul>
          <li>
          <div class="navst">
          
          <a href="student.php">
         <img src="image/button/nav1.png" height="60" width="300">
         <p>STUDENT DETAIL</p><img class="drec" src="image/button/derc.png" width="30" height="30">
         </a>
         </div>
         </li>
             <li>
              <div class="navst">
          <a href="Addmission_form.php">
         <img src="image/button/nav2.png" height="60" width="300">
         <p> ADMISSION FORM</p><img class="drec" src="image/button/derc.png" width="30" height="30">
         </a>
         </div>
             </li>
             <li>
              <div class="navst">
          <a href="examnation_form.php">
         <img src="image/button/nav3.png" height="60" width="300">
         <p> EXAMNATION FORM</p><img class="drec" src="image/button/derc.png" width="30" height="30">
         </a>
         </div>
              </li>
              <li>
              <div class="navst">
          <a href="book_form.php">
         <img src="image/button/nav4.png" height="60" width="300">
         <p>BOOK ISSUE FORM</p><img class="drec" src="image/button/derc.png" width="30" height="30">
         </a>
         </div>
              </li>
              <li>
              <div class="navst">
          <a href="Upload_document.php">
         <img src="image/button/nav5.png" height="60" width="300">
         <p>UPLOAD DOCUMENT</p><img class="drec" src="image/button/derc.png" width="30" height="30">
         </a>
              </div>
              </li>
              </ul> 
            
              
          </div>
          <div id="studet">
             <div id="studetailheder">
                 <h1>STUDENT</h1>
             </div>
              
              <div id="stu_detail_data">
			  <div class="stu_headerdb">
					<p><strong>Basic Details</strong></p>
				 </div>
		<div id="s_detail_cover"> 
        
		
           <div id="stu_detail_data_record"> 
			<table id="s_detaildb">
	
			<tr>
			<th>Name <span style="padding-left:100px;">:</span></th>
			<td>
               <span style="color:red; font-weight: 600;"><?php  echo  $fast_name;  ?> <?php  echo  $last_name;  ?></span>
                
        
		
             </td>
           
			</tr>
			<tr>
			<th>Father's Name <span style="padding-left:40px;">:</span></th>
			<td>
               <span style="color:red;"><?php  echo  $father_name;  ?></span>
               
			
			</td>
			</tr>
			<tr>
			<th>Gender <span style="padding-left:90px;">:</span></th>
               
                <td>
                <span style="color:red;"><?php  echo $gender;  ?></span>
                
                </td>
			</tr>
			<tr>
			<th>Date of Birth <span style="padding-left:50px;">:</span></th>
               <td>
               <span style="color:red;"><?php  echo  $dob;  ?></span>
            
            </td>
			</tr>
			<tr>
			<th>Email <span style="padding-left:100px;">:</span></th>
                <td>
                <span style="color:red;"><?php  echo  $email;  ?></span>
                
                </td>
			</tr>
			<tr>
			<th>Phone <span style="padding-left:98px;">:</span></th>
                <td>
                <span style="color:red;"><?php  echo  $phone;  ?></span>
                
                </td>
			</tr>
		
		
			</table>
                </div> 
                 </div>		
                  
              </div>
             
              <!--Addmission detail-->
               <div id="stu_detail_data">
			  <div class="stu_headerdb">
					<p><strong>Addmission Status</strong></p>
				 </div>
				 
				 <div class="stu_Addmission_db">
					<table id="stu_status">
					    <tr>
			        <th>Addmission Status :</th>
<td style="color:green;"><?php echo "<b>$num_rows</b> Student Admission! "; ?></td>
			    </tr>
				
					</table>
				 </div>
			
                  
              </div>
              
              <!--Examnation detail-->
               <div id="stu_detail_data">
			  <div class="stu_headerdb">
					<p><strong>Examnation Status</strong></p>
				 </div>
				 
				<div class="stu_Addmission_db">
					<table id="stu_status">
					    <tr>
			        <th>Examnation Status :</th>
			         <td style="color:green;"><?php echo "<b>$num_rows1</b> Student Examnation Record! "; ?></td>
			    </tr>
					</table>
				 </div>
			
                  
              </div>
              
              <!--book detail-->
               <div id="stu_detail_data">
			  <div class="stu_headerdb">
					<p><strong>Book issue Status</strong></p>
				 </div>
				 
				 <div class="stu_Addmission_db">
					<table id="stu_status">
					    <tr>
			        <th>Book issue Status :</th>
			        <td style="color:green; padding-left:22px;"><?php echo "<b>$num_rows2</b> Student Book Issue! "; ?></td>
			    </tr>
					</table>
				 </div>
			
                  
              </div>
              
              
          </div> 
           
       </div> 
       
       <div id="clear"></div>
        <!--footer-->
  <div id="footer">
    <div id="footer_size">
     <div class="footer_B">
         <h2>About Us</h2>
         <ul> <li><a href="student.php">Home</a></li>
        <li><a href="contact.php">Help</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.php">Contact Us</a></li></ul>
      </div>
      
      <div class="footer_B">
         <h2>Services</h2> 
         <ul> <li><a href="about.php">Facility</a></li>
        <li><a href="notices.php">Notice</a></li>
        <li><a href="book_details.php">Library</a></li>
        <li><a href="time.php">Routine</a></li>
        <li><a href="Addmission_form.php">Online Form</a></li></ul>
      </div>
      
      <div class="footer_B">
         <h2>Contact Us</h2>
         <div class="fsocial">
         <a href="https://www.facebook.com" title="Facebook"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
         <a href="https://www.twitter.com" title="Twitter"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
         <a href="https://www.youtube.com" title="Youtube"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
         
			 <a href="https://plus.google.com" title="Google+"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
        </div>
        <address>
        <p><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;<b>Ram Lakhan Singh Yadav College</b><br> &nbsp;&nbsp;&nbsp; Kokar, Ranchi Jharkhand, 834001</p> 
           <p> <i class="fa fa-envelope " aria-hidden="true"></i>  rlsycollegeranchi@gmail.com</p>
            <p><i class="fa fa-phone " aria-hidden="true"></i>&nbsp;&nbsp;0651-2543439</p>
            <p><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;www.rlsycollege.ac.in</p>
        </address> 
      </div> 
      </div>  
   </div>
   <div id="buttom_footer">
      <h1>RAM LAKHAN SINGH YADAV COLLEGE, RANCHI</h1>
      <H2>RANCHI JHARKHAND, 834001</H2> 
      <div class="footer_nav">
      <ul> <li><a href="index.php">Home</a></li>
        <li><a href="contact.php">Help</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="notices.php">Notice</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="our_team.php">Team</a></li>
        </ul>
        </div>
        <div id="footer_devloper">
        <p>Copyright &#169; All Rights Reserved</p>
      <span>Designed & Maintained by: <i>Ranjan Kumar.</i></span>
      </div>
   </div>
   
</body>
</html> 
   