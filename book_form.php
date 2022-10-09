<?php
include('dbconnection.php');
if (isset($_POST['Submit'])) {

    $bookname = $_POST['bookname'];
    $authorsname = $_POST['authorsname'];
    $issuedate = $_POST['issuedate'];
    $issuelastdate = $_POST['issuelastdate'];
     $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $roll = $_POST['roll'];
    $fathername = $_POST['fathername'];
    $course = $_POST['course'];
    $semester = $_POST['Semester'];
    $contactaddress = $_POST['contactaddress'];
    $state = $_POST['state'];
    $mobilenumber = $_POST['mobilenumber'];
    $district = $_POST['district'];
    $email = $_POST['email'];
    $citytown = $_POST['citytown'];
    $alternatenumber = $_POST['alternatenumber'];
    $zipcode = $_POST['zipcode'];
    $country = $_POST['country'];
    $place = $_POST['place'];
    
    
  
    //validation
   
    $dt= date("Y-m-d");
   $sql = "INSERT INTO book_form(Book_name, Authors_name, Issue_Date, Last_Date, First_name, Last_name, DOB, Gender, Roll_no, Fathername, Course, Semester, Address, State, Mobile_Number, District, Email, City, Alternate_Number, Zip_Code, Country, Place) VALUES ('$bookname', '$authorsname', '$issuedate', '$issuelastdate', '$firstname', '$lastname', '$dob', '$gender', '$roll', '$fathername', '$course', '$semester',  '$contactaddress', '$state', '$mobilenumber', '$district', '$email', '$citytown', '$alternatenumber', '$zipcode', '$country', '$place')";
        if(mysqli_query($conn, $sql))
        {
            echo "<script>alert('Book Issue form record inserted sucessfully..');</script>";
        }
   else{
       echo "error";
   }
        
  
    
}
?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>College Website</title>
    <link rel="icon" href="image/monogram.png">
    <link rel="stylesheet" href="style.css" type="text/css">
	 <link rel="stylesheet" href="Addmission.css" type="text/css">
   <link rel="stylesheet" href="admin.css" type="text/css">
    <link href="css/font-awesome.min.css"rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
     <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
     <link href="js/jquery.mCustomScrollbar.min.css"rel="stylesheet" type="text/css"/>
     
    
</head>
<body>
    <!--college logo and college name-->
    <div id="toplogo">
	   <div class="logo">
           <a href="student.php"><img src="image/monogram.png" alt="LOGO" height="150px"></a>
        </div>
        <div class="College_name">
            <h1>RAM LAKHAN SINGH YADAV COLLEGE</h1>
            <h2>JHARKHAND RANCHI 834001</h2>
        </div>
    </div>
    <div id="clear"></div>
    
    
	    <!--contener-->
   
   <div id="contener_staff_b">
    <div class="back_button">
         <a id="home" href="student.php">BACK</a>
     </div>
     
    <div id="clear"></div>
  <div class="container">
    <main class="rounded1">  
     <center><font size="+3">ONLINE BOOK ISSUE FORM</font></center>
      <p>Date: <?php echo date("d-m-Y"); ?></p>
      <p1>Kindly fill the following application form with valid records...</p1>
      <div class="clear"></div>
    </main>
  </div>
  
  
  <form method="post" action="" name="appform" onsubmit="return validateform()"> 
<div class="container2">
    <div class="rounded4"> 
       <div id="addform">
           
     <table width="200" height="100">
          <tr style="background-color:#FFC">
            <td height="36" colspan="4"><strong>Book details:</strong></td>
          </tr>
          <tr style="background-color:#CFF">
            <td width="27%" height="40">Book name:</td>
            <td width="24%" id="firstname"><input type="text" name="bookname"></td>
            <td height="43">Authors name:</td>
            <td><input type="text" name="authorsname"></td>
          </tr>
          <tr style="background-color:#CFF">
            <td height="43">Issue Date:</td>
            <td width="23%"><input type="date" name="issuedate" id="dob"></td>
             <td height="39">Last Date:</td>
            <td width="23%"><input type="date" name="issuelastdate" id="dob"></td>
          </tr>
         
         
        
        </table>
        
      </div>
        
       
        <div id="clear"></div>
        
<div id="addform">
           
     <table width="200" height="150">
          <tr style="background-color:#FFC">
            <td height="36" colspan="4"><strong>Student details:</strong></td>
          </tr>
          <tr style="background-color:#CFF">
            <td width="27%" height="40">First name:</td>
            <td width="24%" id="firstname"><input type="text" name="firstname" id="firstname"></td>
            <td width="26%">DOB (dd/mm/yyyy)</td>
            <td width="23%"><input type="date" name="dob" id="dob"></td>
          </tr>
          <tr style="background-color:#CFF">
            <td height="43">Last name:</td>
            <td><input type="text" name="lastname" id="lastname"></td>
             <td height="39">Father name:</td>
            <td><input type="text" name="fathername" id="father name"></td>
          </tr>
          <tr style="background-color:#CFF">
            <td height="30">Student Gender:</td>
            <td><input type="radio" name="gender" id="Male" value="Male" checked>
Male
  <input type="radio" name="gender" id="Female" value="Female">
Female </td>
            <td>Roll no.:</td>
            <td><input type="text" name="roll" id="placeofbirth"></td>
          </tr>
		   <tr style="background-color:#CFF">
            <td height="43">Course:</td>
            <td><input type="text" name="course" id="course"></td>
             <td height="39">Semester:</td>
            <td><input type="text" name="Semester" id="Semester"></td>
          </tr>
        
         
        
        </table>
        
      </div>
      
      <div id="addform">
       <table width="200" height="300" border="1">
        <tr style="background-color:#FFC">
          <td colspan="4"><strong>Contact Details:</strong></td>
        </tr>
        <tr style="background-color:#CFF">
          <td>Contact Address:</td>
          <td id="contact Address"><textarea rows="3" cols="25" name="contactaddress" id="contactaddress"></textarea></td>
          <td>State:</td>
          <td><input type="text" name="state" id="state"></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="30">Mobile Number:</td>
          <td><p id="mobile  number">
            <input type="text" name="mobilenumber" id="mobileno">
          </p></td>
          <td>District:</td>
          <td><input type="text" name="district" id="district"></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="40">Email:</td>
          <td><input name="email" type="text" id="email"></td>
          <td>City / Town / Suburb:</td>
          <td><input name="citytown" type="text" id="citytownsuburb"></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="30">Alternate Contact Number:</td>
          <td><input type="text" name="alternatenumber" id="alternatecontactnumber"></td>
           <td><p>Postal / Zip Code:</p></td>
          <td><p>
            <input type="text" name="zipcode" id="postalzipcode">
          </p></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="30"><p>Country:</p></td>
          <td><p id="email">
            <input type="text" name="country" id="country">
          </p></td>
          <td>&nbsp;</td>
           <td>&nbsp;</td>
        </tr>
      </table>
       
       
        </div>
    
  
            
         <hr style=" color:gray; width: 95.7%; margin-left: 20px;">
         <div id="addform" style="margin-top: -5px;" >
      <table width="200" border="1">
        <tr style="background-color:#FFC">
          <td colspan="2"><strong>Declaration:</strong></td>
        </tr>
        <tr style="background-color:#CFF">
          <td colspan="2">I declare that all the particulars furnished above   are true and correct. I submit that I will abide by the rules and regulations of   the College.</td>
          </tr>
        <tr style="background-color:#CFF">
          <td width="48%"><p>Place :
              
              <input type="text" name="place" id="place">
          </p></td>
          <td width="52%"></td>
          </tr>
        </table>
        </div> 
        
        <input style="margin-left:20px; padding:2px 5px; cursor: pointer; " type="submit" name="Submit" value="Submit">
      
    </div>
  </div>
   
       </form>
   
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