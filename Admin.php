<?php
include('dbconnection.php');
session_start(); 
if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
  
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
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>College Website</title>
     <link rel="icon" href="image/monogram.png">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="student.css" type="text/css">
    <link rel="stylesheet" href="admin.css" type="text/css">
    <link href="css/font-awesome.min.css"rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
     <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
     <link href="js/jquery.mCustomScrollbar.min.css"rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
     <div id="login_sec">
      
      <ul>
       

       <li><a href="Admin.php." style="color: white;">Welcome</a></li>
        <li><a href="Admin.php" style="color: #1cef1b;"><i>|</i>Dashboard<i1>|</i1></a></li>
        <li><a href="index.php?logout='1'" style="color: red;">Logout</a></li>   
                  		  
        </ul>
   
   
           
       </div> 
     <div id="admin_img"> 
      <img src="image/38655133-admin.png" width="25%"> 
      <h1>WELCOME TO ADMIN DASHBOARD</h1> 
    
      </div>
      
      <div id="stunav">
           <ul>
        <?php  if (isset($_SESSION['username'])) : ?> 
        <li><p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></li>
        <li><a href="Admin.php?logout='1'" style="color: blue;">Logout</a></li> 
           <?php endif ?>  
        </ul>
           
           
       </div>
       
       <div id="clear"></div>
       
       <div id="stucontent">
          <div id="menu1">
          <ul>
          <li>
          <div class="navst">
          
          <a href="Admission_record.php">
         <img src="image/button/aaf.png" height="60" width="300">
         <p>STUDENT DETAIL</p>
         </a>
         </div>
         </li>
            
             <li>
              <div class="navst">
          <a href="examnation_record.php">
        <img src="image/button/aaf.png" height="60" width="300">
         <p> EXAMNATION DETAILS </p>
         </a>
         </div>
              </li>
              <li>
              <div class="navst">
          <a href="book_record.php">
        <img src="image/button/aaf.png" height="60" width="300">
         <p>BOOK ISSUE DETAILS</p>
         </a>
         </div>
              </li>
                <li>
                 <div class="navst">
          <a href="student_add.php">
         <img src="image/button/aaf.png" height="60" width="300">
         <p> STUDENT ADD </p>
         </a>
         </div>
              </li>
              <li>
              <div class="navst">
          <a href="time_table_admin.php">
         <img src="image/button/aaf.png" height="60" width="300">
         <p>TIME TABLE</p>
         </a>
              </div>
              </li>
               <li>
              <div class="navst">
          <a href="employee_add.php">
         <img src="image/button/aaf.png" height="60" width="300">
         <p>EMPLOYEE DETAIL</p>
         </a>
              </div>
              </li>
               <li>
              <div class="navst">
          <a href="contact_detail.php">
         <img src="image/button/aaf.png" height="60" width="300">
         <p>CONTACT US DETAIL</p>
         </a>
              </div>
              </li>
              
              </ul> 
            
              
          </div>
          <div id="admin">
             <div id="adminheder">
                 <h1>ADMINISTRATOR</h1>
             </div>
              <div id="nav_img_admin">
               <div id="sec1_ajest">
                <div id="sec1">
                   <a href="Admission_record.php">STUDENT DETAILS</a> 
                    
                </div>
                  <div id="sec1">
                    <a href="examnation_record.php">EXAMNATION DETAILS</a> 
                    
                </div> 
                  <div id="sec1">
                    <a href="book_record.php">BOOK ISSUE DETAILS</a> 
                    
                </div> 
                  </div>
                  <div id="sec2_ajest">
                  <div id="sec2">
                    <a href="time_table_admin.php">TIME TABLE</a> 
                    
                </div> 
                  <div id="sec2">
                    
                    <a href="employee_add.php">EMPLOYEE DETAIL</a> 
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
			        <th>Addmission Count :</th>
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
			        <th>Examnation Count :</th>
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
			        <th>Book issue Count :</th>
                            <td style="color:green;"><?php echo "<b>$num_rows2</b> Student Book Issue! "; ?></td>
			    </tr>
					</table>
				 </div>
			
                  
              </div>
              
          </div> 
           
       </div> 
       
       <div id="clear"></div>
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
  