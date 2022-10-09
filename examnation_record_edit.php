<?php
include('dbconnection.php');



        $id = $_GET['edit'];
		$res= mysqli_query($conn, "SELECT * FROM examnation_form WHERE id='$id'");
	   while($row= mysqli_fetch_array($res))
    {
            $edit = $row['id'];  
            $course = $row['Course'];
            $semester = $row['Semester'];
            $firstname = $row['First_name'];
            $lastname = $row['Last_name'];
            $dob = $row['DOB'];
            
            $gender = $row['Gender'];
            $roll = $row['Roll_no'];
            $fathername = $row['Father_name'];
            
            $address = $row['Address'];
           $state = $row['State'];
            $mobilenumber = $row['Mobile_Number'];
            $district = $row['District'];
            $email = $row['Email'];
            $citytown = $row['City'];
        $alternatenumber = $row['Alternate_Number'];
        $zipcode = $row['Zip_Code'];
        $country = $row['Country'];
        $Honors = $row['Honors'];
        $general = $row['General'];
        $language = $row['Language'];
        $Additional = $row['Additional'];
        $place = $row['Place'];
           
        
           
    }




if (isset($_POST['update'])) {
   $id = $_GET['edit'];
     $course = $_POST['course'];
    $semester = $_POST['semester'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
   
    $gender = $_POST['gender'];
    $roll = $_POST['roll'];
    $fathername = $_POST['fathername'];
    
    $contactaddress = $_POST['contactaddress'];
    $state = $_POST['state'];
    $mobilenumber = $_POST['mobilenumber'];
    $district = $_POST['district'];
    $email = $_POST['email'];
    $citytown = $_POST['citytown'];
    $alternatenumber = $_POST['alternatenumber'];
    $zipcode = $_POST['zipcode'];
    $country = $_POST['country'];
    $Honors = $_POST['Honors'];
    $general = $_POST['general'];
    $language = $_POST['language'];
    $Additional = $_POST['additional'];
    $place = $_POST['place'];
   

    $sql = "UPDATE examnation_form SET Course='$course', Semester='$semester', First_name='$firstname', Last_name='$lastname', DOB='$dob', Gender= '$gender', Father_name= '$fathername', Address= '$contactaddress', State= '$state',  District = '$district ',  City= '$citytown',  Zip_Code='$zipcode', Mobile_Number='$mobilenumber', Email='$email', Alternate_Number='$alternatenumber', Country='$country', Honors='$Honors', General='$general', Language='$language', Additional='$Additional', Place='$place' WHERE id='$id'";
     if(mysqli_query($conn, $sql))
    {
         //header('location: examnation_record.php');
          echo '<script language="javascript">alert("Examnation record update Succesfully !!!")</script>';
            echo '<script language="javascript">window.location = "examnation_record.php"</script>';
   
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
   
   
    
        <!--contener-->
   
   <div id="contener_staff_e">
    <div class="back_button">
         <a id="home" href="Admin.php">BACK</a>
     </div>
   
  <div class="container">
    <main class="rounded1">  
     <center><font size="+3">ONLINE EXAMNATION FORM</font></center>
      <p>Date: <?php echo date("d-m-y"); ?></p>
      <p1>Kindly fill the following application form with valid records...</p1>
      <div class="clear"></div>
    </main>
  </div>
  
  
  <form method="post" action="" name="appform" onsubmit="return validateform()"> 
<div class="container1">
    <div class="rounded3"> 
       
         <table border="1">
  <tr style="background-color:#FFC">
    <td colspan="4"><strong>Basic details:</strong></td>
    </tr>
  
  <tr style="background-color:#CFF">
    <td height="30">Course:</td>
    <td>
    <select name="course" id="course" style="width:100px;">
    <option><?php echo $course; ?></option>
     <option>I.A</option><option>I.Sc</option><option>I.Com</option><option>B.A</option><option>B.Sc</option><option>B.Com</option><option>BCA</option>   </select>
    </td>
    <td>Semester</td>
    <td>
    <select name="semester" id="semester" style="width:100px;">
    <option value="select"><?php echo $semester;  ?></option><option value='PART I'>PART I</option><option value='PART II'>PART II</option><option value='PART III'>PART III</option>  </select>
    </td>
  </tr>
      </table>
       
        <div id="clear"></div>
        
<div id="addform">
           
     <table width="200" height="226">
          <tr style="background-color:#FFC">
            <td height="20" colspan="4"><strong>Student details:</strong></td>
          </tr>
          <tr style="background-color:#CFF">
            <td width="27%" height="40">First name:</td>
            <td width="24%" id="firstname"><input type="text" name="firstname" id="firstname" value="<?php echo $firstname;  ?>"></td>
            <td width="26%">DOB (dd/mm/yyyy)</td>
            <td width="23%"><input type="date" name="dob" id="dob" value="<?php echo $dob;  ?>"></td>
          </tr>
          <tr style="background-color:#CFF">
            <td height="43">Last name:</td>
            <td><input type="text" name="lastname" id="lastname" value="<?php echo $lastname;  ?>"></td>
               <td height="39">Father name:</td>
            <td><input type="text" name="fathername" id="father name" value="<?php echo $fathername;  ?>"></td>
           
          </tr>
          <tr style="background-color:#CFF">
            <td height="30">Student Gender:</td>
            <td><input type="radio" name="gender" id="Male" value="Male" checked>
Male
  <input type="radio" name="gender" id="Female" value="Female">
Female </td>
            <td>Roll no.:</td>
            <td><input type="text" name="roll" id="placeofbirth" value="<?php echo $roll;  ?>"></td>
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
          <td id="contact Address"><textarea rows="3" cols="25" name="contactaddress" id="contactaddress"><?php echo $address;  ?></textarea></td>
          <td>State:</td>
          <td><input type="text" name="state" id="state" value="<?php echo $state;  ?>"></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="30">Mobile Number:</td>
          <td><p id="mobile  number">
            <input type="text" name="mobilenumber" id="mobileno" value="<?php echo $mobilenumber;  ?>">
          </p></td>
          <td>District:</td>
          <td><input type="text" name="district" id="district" value="<?php echo $district;  ?>"></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="40">Email:</td>
          <td><input name="email" type="text" id="email" value="<?php echo $email;  ?>"></td>
          <td>City / Town / Suburb:</td>
          <td><input name="citytown" type="text" id="citytownsuburb" value="<?php echo $citytown;  ?>"></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="30">Alternate Contact Number:</td>
          <td><input type="text" name="alternatenumber" id="alternatecontactnumber" value="<?php echo $alternatenumber;  ?>"></td>
           <td><p>Postal / Zip Code:</p></td>
          <td><p>
            <input type="text" name="zipcode" id="postalzipcode" value="<?php echo $zipcode;  ?>">
          </p></td>
        </tr>
        <tr style="background-color:#CFF">
          <td height="30"><p>Country:</p></td>
          <td><p id="email">
            <input type="text" name="country" id="country" value="<?php echo $country;  ?>">
          </p></td>
          <td>&nbsp;</td>
           <td>&nbsp;</td>
        </tr>
      </table>
      
        </div>
    
        
        <div id="addform">
     <table width="200" border="1">
       <tr style="background-color:#FFC">
          <td colspan="4"><strong>Subject</strong></td>
        </tr>
		 <tr style="background-color:#CFF">
          <td>Honors</td>
          <td>General</td>
          <td>Language</td>
          <td>Additional</td>
        </tr>
       
      
       
        <tr style="background-color:#CFF">
          <td height="40"><input type="text" name="Honors" value="<?php echo $Honors;  ?>"></td>
          <td><input type="text" name="general" value="<?php echo $general;  ?>"></td>
          <td><input name="language" type="text"  value="<?php echo $language;  ?>"></td>
          <td><input type="text" name="additional" value="<?php echo $Additional;  ?>"></td>
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