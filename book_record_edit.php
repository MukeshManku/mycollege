<?php
include('dbconnection.php');


        $id = $_GET['edit'];
		$res= mysqli_query($conn, "SELECT * FROM book_form WHERE id='$id'");
	   while($row= mysqli_fetch_array($res))
    {
            $edit = $row['id']; 
            $bookname = $row['Book_name'];
            $authorsname = $row['Authors_name'];
            $issuedate = $row['Issue_Date'];
            $issuelastdate = $row['Last_Date'];
            $firstname = $row['First_name'];
            $lastname = $row['Last_name'];
           
            $dob = $row['DOB'];
           $fathername = $row['Fathername'];
           $gender = $row['Gender'];
            $roll = $row['Roll_no'];
          
            $course = $row['Course'];
            $semester = $row['Semester'];
            $address = $row['Address'];
           $state = $row['State'];
            $mobilenumber = $row['Mobile_Number'];
            $district = $row['District'];
            $email = $row['Email'];
            $citytown = $row['City'];
            $alternatenumber = $row['Alternate_Number'];
            $zipcode = $row['Zip_Code'];
            $country = $row['Country'];
            $place = $row['Place'];
           
        
           
    }


if (isset($_POST['update'])) {
   $id = $_GET['edit'];
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
   

    $sql = "UPDATE book_form SET Book_name='$bookname', Authors_name='$authorsname', Issue_Date='$issuedate', Last_Date='$issuelastdate', First_name='$firstname', Last_name='$lastname', DOB='$dob', Gender= '$gender', Roll_no='$roll', Fathername= '$fathername', Course='$course', Semester='$semester', Address= '$contactaddress', State= '$state',  District = '$district ',  City= '$citytown',  Zip_Code='$zipcode', Mobile_Number='$mobilenumber', Email='$email', Alternate_Number='$alternatenumber', Country='$country', Place='$place' WHERE id='$id'";
     if(mysqli_query($conn, $sql))
    {
         //header('location: book_record.php');
          echo '<script language="javascript">alert("Book issue record update Succesfully !!!")</script>';
         echo '<script language="javascript">window.location = "book_record.php"</script>';
   
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
   
   <div id="contener_staff_b">
    <div class="back_button">
         <a id="home" href="Admin.php">BACK</a>
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
            <td width="24%" id="firstname"><input type="text" name="bookname" value="<?php echo $bookname;  ?>" ></td>
            <td height="43">Authors name:</td>
            <td><input type="text" name="authorsname" value="<?php echo $authorsname;  ?>"></td>
          </tr>
          <tr style="background-color:#CFF">
            <td height="43">Issue Date:</td>
            <td width="23%"><input type="date" name="issuedate" id="dob" value="<?php echo $issuedate;  ?>"></td>
             <td height="39">Last Date:</td>
            <td width="23%"><input type="date" name="issuelastdate" id="dob" value="<?php echo $issuelastdate;  ?>"></td>
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
            <td width="24%" id="firstname"><input type="text" name="firstname" id="firstname" value="<?php echo $firstname;  ?>"></td>
            <td width="26%">DOB (dd/mm/yyyy)</td>
            <td width="23%"><input type="date" name="dob" id="dob" value="<?php echo $dob;  ?>"></td>
          </tr>
          <tr style="background-color:#CFF">
            <td height="43">Last name:</td>
            <td><input type="text" name="lastname" id="lastname" value="<?php echo $lastname;  ?>"></td>
             <td height="39">Father name:</td>
            <td><input type="text" name="fathername" id="fathername" value="<?php echo $fathername;  ?>" ></td>
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
		   <tr style="background-color:#CFF">
            <td height="43">Course:</td>
            <td><input type="text" name="course" id="course" value="<?php echo $course;  ?>"></td>
             <td height="39">Semester:</td>
            <td><input type="text" name="Semester" id="Semester" value="<?php echo $semester;  ?>"></td>
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