<?php
include('dbconnection.php');




        $id = $_GET['edit'];
		$res= mysqli_query($conn, "SELECT * FROM addmission_form WHERE id='$id'");
	   while($row= mysqli_fetch_array($res))
    {
            $edit = $row['id'];  
            $course = $row['Course'];
            $semester = $row['Semester'];
            $firstname = $row['First_name'];
            $lastname = $row['Last_name'];
            $dob = $row['DOB'];
            $bloodgroup = $row['Blood_group'];
            $gender = $row['Gender'];
            $parentsinfo = $row['Parent_info'];
            $placeofbirth = $row['Place_of_Birth'];
            $fathername = $row['Father_name'];
            $fathersoccupation = $row['Father_Occupation'];
            $mothername = $row['Mother_Name'];
            $address = $row['Address'];
           $state = $row['State'];
            $mobilenumber = $row['Mobile_Number'];
            $district = $row['District'];
            $email = $row['Email'];
            $citytown = $row['City'];
        $alternatenumber = $row['Alternate_Number'];
        $zipcode = $row['Zip_Code'];
        $country = $row['Country'];
        $religion = $row['Religion'];
        $motherlanguage = $row['Language'];
        $category = $row['Category'];
        $nationality = $row['Nationality'];
        $sub = $row['Subject'];
        $maxmark = $row['Maximum_Marks'];
        $marksobtained = $row['Marks_obtained'];
        $percent = $row['Percent'];
        $x = $row['X_Std'];
        $xii = $row['XII_Std'];
        $vaccourse = $row['Vocational_course'];
        $sports = $row['Sports'];
        $nameandlocation = $row['Last_studied'];
        $hostal = $row['Hostel'];
        $medium = $row['Medium'];
        $place = $row['Place'];
           
        
           
    }

if (isset($_POST['update'])) {
   $id = $_GET['edit'];
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
   

    $sql = "UPDATE addmission_form SET Course='$course', Semester='$semester', First_name='$firstname', Last_name='$lastname', DOB='$dob', Blood_group='$bloodgroup', Gender= '$gender',  Parent_info= '$parentsinfo', Place_of_Birth= '$placeofbirth', Father_name= '$fathername', Father_Occupation= '$fathersoccupation', Mother_Name= '$mothername', Address= '$contactaddress', State= '$state',  District = '$district ',  City= '$citytown',  Zip_Code='$zipcode', Mobile_Number='$mobilenumber', Email='$email', Alternate_Number='$alternatenumber', Country='$country', Religion='$religion', Category='$category', Language='$motherlanguage', Nationality='$nationality', Subject=' $sub', Maximum_Marks='$maxmark', Marks_obtained='$marksobtained', Percent='$percent', X_Std='$x', XII_Std='$xii', Vocational_course='$vaccourse', Sports='$sports', Last_studied='$nameandlocation', Hostel='$hostal', Medium='$medium', Place='$place' WHERE id='$id'";
     if(mysqli_query($conn, $sql))
    {
         //header('location: Admission_record.php');
          echo '<script language="javascript">alert("Addmission record update Succesfully !!!")</script>';
            echo '<script language="javascript">window.location = "Admission_record.php"</script>';
   
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
           <a href="Admin.php"><img src="image/monogram.png" alt="LOGO" height="150px"></a>
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
         <a id="home" href="Admin.php">BACK</a>
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
  
  
  <form method="post" action="addmission_record_show.php?edit=<?php echo $edit; ?>" name="appform" onsubmit="return validateform()"> 
  
 
  
<div class="container1">
    <div class="rounded2"> 
     
       
         <table border="1">
  <tr style="background-color:#FFC">
    <td colspan="4"><strong>Basic details:</strong></td>
    </tr>
  
  <tr style="background-color:#CFF">
    <td height="30">Course:</td>
    <td>
    <select name="course" id="course"  style="width:100px;">
    <option><?php echo $course;  ?></option>
    <option>I.A</option><option>I.Sc</option><option>I.Com</option>
    <option>B.A</option><option>B.Sc</option><option>B.Com</option><option>BCA</option>
    </select>
    </td>
    <td>Semester</td>
    <td>
    <select name="semester" id="semester">
    <option><?php echo $semester; ?></option><option value='PART I'>PART I</option><option value='PART II'>PART II</option><option value='PART III'>PART III</option>    </select>
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
            <td width="24%" id="firstname"><input type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>"></td>
            <td width="26%">DOB (dd/mm/yyyy)</td>
            <td width="23%"><input type="date" name="dob" id="dob" value="<?php echo $dob ;  ?>"></td>
          </tr>
          <tr style="background-color:#CFF">
            <td height="43">Last name:</td>
            <td><input type="text" name="lastname" id="lastname" value="<?php echo $lastname;  ?>"></td>
            <td>Blood group:</td>
            <td><select name="bloodgroup" id="bloodgroup" value="">
			<option value="Select"><?php echo $bloodgroup;  ?></option>
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
            <td><input type="text" name="placeofbirth" id="placeofbirth" value="<?php echo $placeofbirth;  ?>"></td>
          </tr>
          <tr style="background-color:#CFF">
            <td height="30">Parent's information:</td>
            <td><input type="radio" name="parentsinfo" id="parent" value="parent" checked value="<?php echo $parentsinfo;  ?>">
Parent 
<input type="radio" name="parentsinfo" id="Guardian" value="Guardian" value="<?php echo $parentsinfo;  ?>">
Guardian</td>
            <td>Father's Occupation:</td>
            <td><input type="text" name="fathersoccupation" id="fatherssssoccupation" value="<?php echo $fathersoccupation;  ?>"></td>
          </tr> 
          <tr style="background-color:#CFF">
            <td height="39">Father name:</td>
            <td><input type="text" name="fathername" id="father name" value="<?php echo $fathername;  ?>" ></td>
            <td>Mother Name:</td>
            <td><input type="text" name="mothername" id="mother name" value="<?php echo $mothername;  ?>" ></td>
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
          <td id="contact Address"><textarea rows="3" cols="25" name="contactaddress" id="contactaddress" ><?php echo $address;  ?></textarea></td>
          <td>State:</td>
          <td><input type="text" name="state" id="state" value="<?php echo $state;  ?>" ></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="30">Mobile Number:</td>
          <td><p id="mobile  number">
            <input type="text" name="mobilenumber" id="mobileno" value="<?php echo $mobilenumber;  ?>" >
          </p></td>
          <td>District:</td>
          <td><input type="text" name="district" id="district" value="<?php echo $district;  ?>" ></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="40">Email:</td>
          <td><input name="email" type="text" id="email" value="<?php echo $email;  ?>" ></td>
          <td>City / Town / Suburb:</td>
          <td><input name="citytown" type="text" id="citytown" value="<?php echo $citytown;  ?>" ></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="30">Alternate Contact Number:</td>
          <td><input type="text" name="alternatenumber" id="alternatenumber" value="<?php echo $alternatenumber;  ?>" ></td>
           <td><p>Postal / Zip Code:</p></td>
          <td><p>
            <input type="text" name="zipcode" id="zipcode" value="<?php echo $zipcode;  ?>" >
          </p></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="30"><p>Country:</p></td>
          <td><p id="email">
            <input type="text" name="country" id="country" value="<?php echo $country;  ?>" >
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
              <option><?php echo $religion;  ?></option><option value='Hindu'>Hindu</option><option value='Muslim'>Muslim</option><option value='Christian'>Christian</option><option value='Jain'>Jain</option><option value='Other'>Other</option>              </select>
            </p>
            </td>
            <td><p>Mother Language:</p></td>
            <td><p>
              <input type="text" name="mothertoungue" id="mothertoungue" value="<?php echo $motherlanguage;  ?>">
            </p></td>
          </tr>
          <tr style="background-color:#CFF">
            <td height="30">Student Category:</td>
            <td><select name="studentcategory" id="studentcategory" style="width:100px;">
            <option value='Select'><?php echo $category;  ?></option><option value='General'>General</option><option value='SC'>SC</option><option value='ST'>ST</option><option value='OBC'>OBC</option><option value='BC'>BC</option>           </select></td>
            <td>Nationality:</td>
            <td><input type="text" name="nationality" id="nationality" value="<?php echo $nationality;  ?>"></td>
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
          <td height="40"><input type="text" name="sub" value="<?php echo $sub;  ?>" ></td>
          <td><input type="text" name="maxmark" value="<?php echo $maxmark;  ?>" ></td>
          <td><input name="marksobtained" type="text" placeholder="0" value="<?php echo $marksobtained;  ?>" /></td>
          <td><input type="text" name="percent" value="<?php echo $percent;  ?>" ></td>
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
          <td><input type="nameandlocation" name="nameandlocation" id="nameandlocation" value="<?php echo $nameandlocation;  ?>"></td>
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
              
              <input type="text" name="place" id="place" value="<?php echo $place;  ?>">
          </p></td>
          <td width="52%"></td>
          </tr>
        </table>
        </div> 
        
      
        
        <input style="margin-left:20px; padding:2px 5px; cursor: pointer; " type="submit" name="update" value="update">
        
       
      
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