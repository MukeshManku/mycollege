<?php
include('dbconnection.php');


if (isset($_POST['Submit'])) {

    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $bloodgroup = $_POST['bloodgroup'];
    $gender = $_POST['gender'];
    $parentsinfo = $_POST['parentsinfo'];
    $placeofbirth = $_POST['placeofbirth'];
    $fathername = $_POST['fathername'];
    $fathersoccupation = $_POST['fathersoccupation'];
    $mothername = $_POST['mothername'];
    $contactaddress = $_POST['contactaddress'];
    $state = $_POST['state'];
    $mobilenumber = $_POST['mobilenumber'];
    $district = $_POST['district'];
    $email = $_POST['email'];
    $citytown = $_POST['citytown'];
    $alternatenumber = $_POST['alternatenumber'];
    $zipcode = $_POST['zipcode'];
    $country = $_POST['country'];
    $religion = $_POST['studentreligion'];
    $motherlanguage = $_POST['mothertoungue'];
    $category = $_POST['studentcategory'];
    $nationality = $_POST['nationality'];
    $sub = $_POST['sub'];
    $maxmark = $_POST['maxmark'];
    $marksobtained = $_POST['marksobtained'];
    $percent = $_POST['percent'];
    $x = $_POST['langstudiedxeng'];
    $xii = $_POST['langstudiedxiieng'];
    $vaccourse = $_POST['vaccourse'];
    $sports = $_POST['sports'];
    $nameandlocation = $_POST['nameandlocation'];
    $hostal = $_POST['accommodation'];
    $medium = $_POST['medium'];
    $place = $_POST['place'];
    
    
  
    //validation
    if(empty($course))
    {
        $msg = "Opps! Select Course detail. ";
    }
    else if(empty($semester))
    {
       $msg = "Opps! Select Semester detail. "; 
    }
    else if(empty($firstname))
    {
        $msg = "Opps! Enter Fast Name detail. ";
    }
    else if(empty($lastname))
    {
        $msg = "Opps! Enter Last Name detail. ";
    }
 
  
    else{
    $dt= date("Y-m-d");
   $sql = "INSERT INTO addmission_form( Course, Semester, First_name, Last_name, DOB, Blood_group, Gender, Parent_info, Place_of_Birth, Father_name, Father_Occupation, Mother_Name, Address, State, District, City, Zip_Code, Mobile_Number, Email, Alternate_Number, Country, Religion, Category, Language, Nationality, Subject, Maximum_Marks, Marks_obtained, Percent, X_Std, XII_Std, Vocational_course, Sports, Last_studied, Hostel, Medium, Place) VALUES ('$course', '$semester', '$firstname', '$lastname', '$dob', '$bloodgroup', '$gender', '$parentsinfo', '$placeofbirth', '$fathername', '$fathersoccupation', '$mothername', '$contactaddress', '$state', '$district', '$citytown', '$zipcode', '$mobilenumber', '$email', '$alternatenumber', '$country', '$religion', '$category', '$motherlanguage', '$nationality', '$sub', '$maxmark', '$marksobtained', '$percent', '$x', '$xii', '$vaccourse', '$sports', '$nameandlocation', '$hostal', '$medium', '$place')";
        mysqli_query($conn, $sql);
   echo "<script>alert('Application form record inserted sucessfully..');</script>";
        
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
    <!--nav or menu bar -->
   
   
    <!--contener-->
   
   <div id="contener_staff_g">
    <div class="back_button">
         <a id="home" href="student.php">BACK</a>
     </div>
     
    <div id="clear"></div>
    
  <div class="container">
    <main class="rounded1">  
     <center><font size="+3">ONLINE ADMISSION FORM</font></center>
      <p>Date: <?php echo date("d-m-Y"); ?></p>
      <p1>Kindly fill the following application form with valid records...</p1>
      <div class="clear"></div>
    </main>
  </div>
  
  
  <form method="post" action="" name="appform" onsubmit="return validateform()"> 
  
  
  
  
  
<div class="container1">
    <div class="rounded2"> 
      <p style="color:red; padding:10px 40px;"><?php if(isset($msg)){echo $msg; } ?></p>
       
         <table border="1">
  <tr style="background-color:#FFC">
    <td colspan="4"><strong>Basic details:</strong></td>
    </tr>
  
  <tr style="background-color:#CFF">
    <td height="30">Course:</td>
    <td>
    <select name="course" id="course"  style="width:100px;">
    <option value="">Select</option>
    <option>I.A</option><option>I.Sc</option><option>I.Com</option><option>B.A</option><option>B.Sc</option><option>B.Com</option><option>BCA</option></select>
    </td>
    <td>Semester</td>
    <td>
    <select name="semester" id="semester" style="width:100px;">
    <option value="">Select</option><option value='PART I'>PART I</option><option value='PART II'>PART II</option><option value='PART III'>PART III</option>    </select>
    </td>
  </tr>
      </table>
       
        <div id="clear"></div>
        
<div id="addform">
           
     <table width="200" height="226">
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
            <td>Blood group:</td>
            <td><select name="bloodgroup" id="bloodgroup">
			<option value="Select">Select</option>
              <option value="A positive">A positive</option>
              <option value="A negative">A negative</option>
              <option value="B positive">B positive</option>
              <option value="B negative">B negative</option>
              <option value="AB positive">AB positive</option>
              <option value="AB negative">AB negative</option>
              <option value="O positive">O positive</option>
              <option value="O negative">O negative</option>
            </select></td>
          </tr>
          <tr style="background-color:#CFF">
            <td height="30">Student Gender:</td>
            <td><input type="radio" name="gender" id="Male" value="Male" checked>
Male
  <input type="radio" name="gender" id="Female" value="Female">
Female </td>
            <td>Place of Birth:</td>
            <td><input type="text" name="placeofbirth" id="placeofbirth"></td>
          </tr>
          <tr style="background-color:#CFF">
            <td height="30">Parent's information:</td>
            <td><input type="radio" name="parentsinfo" id="parent" value="parent" checked>
Parent 
<input type="radio" name="parentsinfo" id="Guardian" value="Guardian">
Guardian</td>
            <td>Father's Occupation:</td>
            <td><input type="text" name="fathersoccupation" id="fatherssssoccupation"></td>
          </tr> 
          <tr style="background-color:#CFF">
            <td height="39">Father name:</td>
            <td><input type="text" name="fathername" id="father name"></td>
            <td>Mother Name:</td>
            <td><input type="text" name="mothername" id="mother name"></td>
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
          <td><input name="citytown" type="text" id="citytown"></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="30">Alternate Contact Number:</td>
          <td><input type="text" name="alternatenumber" id="alternatenumber"></td>
           <td><p>Postal / Zip Code:</p></td>
          <td><p>
            <input type="text" name="zipcode" id="zipcode">
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
    
   <div id="addform">
        <table width="200" border="1">
          <tr style="background-color:#FFC">
            <td colspan="4"><strong>Nationality  details:</strong></td>
          </tr>
          <tr style="background-color:#CFF">
            <td><p>Student Religion:</p></td>
            <td><p>
              <select name="studentreligion" id="studentreligion" style="width:100px;">
              <option value='Select'>Select</option><option value='Hindu'>Hindu</option><option value='Muslim'>Muslim</option><option value='Christian'>Christian</option><option value='Jain'>Jain</option><option value='Other'>Other</option>              </select>
            </p>
            </td>
            <td><p>Mother Language:</p></td>
            <td><p>
              <input type="text" name="mothertoungue" id="mothertoungue">
            </p></td>
          </tr>
          <tr style="background-color:#CFF">
            <td height="30">Student Category:</td>
            <td><select name="studentcategory" id="studentcategory" style="width:100px;">
            <option value='Select'>Select</option><option value='General'>General</option><option value='SC'>SC</option><option value='ST'>ST</option><option value='OBC'>OBC</option><option value='BC'>BC</option>   </select></td>
            <td>Nationality:</td>
            <td><input type="text" name="nationality" id="nationality"></td>
          </tr>
        
        </table>
        </div>
        
        <div id="addform">
     <table width="200" border="1">
       <tr style="background-color:#FFC">
          <td>Subject</td>
          <td>Maximum Marks</td>
          <td>Marks obtained</td>
          <td>Percent</td>
        </tr>
       
      
       
        <tr style="background-color:#CFF">
          <td height="40"><input type="text" name="sub"></td>
          <td><input type="text" name="maxmark"></td>
          <td><input name="marksobtained" type="text" placeholder="0"/></td>
          <td><input type="text" name="percent"></td>
        </tr>
       
      </table>

       
        </div>
        
        <div id="addform">
         <table width="95%" border="1" style="border-color:#666;border:1px;">
        <tr style="background-color:#FFC">
          <td colspan="2"><strong>Other  details:</strong></td>
        </tr>
        <tr style="background-color:#CFF">
          <td width="77%" height="50">Language Studied in X Std. other than English</td>
          <td width="23%"><input type="radio" name="langstudiedxeng" id="langstudiedxeng" value="Yes" checked>
Yes
  <input type="radio" name="langstudiedxeng" id="langstudiedxeng" value="No">
No </td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="44">Language studied in XII Std. other than English</td>
          <td><input type="radio" name="langstudiedxiieng" id="langstudiedxiieng" value="Yes" checked>
Yes
  <input type="radio" name="langstudiedxiieng" id="langstudiedxiieng" value="No">  No </td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="49">Are You a Vocational course student?</td>
          <td><input type="radio" name="vaccourse" id="vaccourse" value="Yes" checked>
Yes
  <input type="radio" name="vaccourse" id="vaccourse" value="No">
No </td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="44">Did you represent the District or State level in any sports?</td>
          <td><input type="radio" name="sports" id="sports" value="Yes" checked>
            Yes
            <input type="radio" name="sports" id="sports" value="No">
            No</td>
        </tr>
      
        <tr style="background-color:#CFF">
          <td height="30">Name and Location of School Last studied</td>
          <td><input type="nameandlocation" name="nameandlocation" id="nameandlocation"></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="34">Do you need hostel accommodation?</td>
          <td><input type="radio" name="accommodation" id="yes9" value="Yes" checked>
Yes
  <input type="radio" name="accommodation" id="no9" value="No">
No</td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="49">Medium of Instruction</td>
          <td><input type="radio" name="medium" id="yes10" value="English" checked>
            English
            <input type="radio" name="medium" id="no10" value="Hindi">
            Hindi </td>
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