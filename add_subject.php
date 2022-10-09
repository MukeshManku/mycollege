<?php



include('dbconnection.php');
if(isset($_POST['submit']))
{
$sql="INSERT INTO subject (subject_name,subjectcode,course_id,semester,status) VALUES('$_POST[subject]','$_POST[subjectcode]','$_POST[course]','$_POST[semister]','Active')";
if(!$qsql=mysqli_query($conn,$sql))
{
	echo mysqli_error($conn);
}
else
{
	echo "<script>alert('New Subject Inserted Sucessfully !!!');</script>";
}
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
      <h1><a href="Admin.php">SUBJECT RECORDS</a></h1>
  </div> 
    <div id="clear"></div>
   
   
    
        <!--contener-->
   
   <div id="cantantsubject">

      <div id="addsubject" class="two_third"> 
     
        <h2><a href="view_course.php">View Subject</a> | <a href="time_table_admin.php">Add Time Table</a> | <a href="add_course.php">Add Course</a></h2>
        
        <p>&nbsp;
        <form method="post" action=""  onsubmit="return validateform()">
        <div class="subadd">
        <table width="200" border="1">
 
  <tr>
    <td height="38">Course</td>
    <td>
        <select style="width:120px; height:25px;" name="course" id="course">
    <option value="">Select</option>
    <?php
	$sql = "SELECT * FROM course";
	$qsql = mysqli_query($conn,$sql);
	while($rs = mysqli_fetch_array($qsql))
	{
		echo "<option value='$rs[course_id]'>$rs[coursename]</option>";
	}
	?>
    </select>
        
    </td>
  </tr>
  
  <tr>
    <td height="38">Semester</td>
    <td><select style="width:120px; height:25px;" name="semister" id="semister">
    <option value="">Select</option>
    <?php
	$arr = array("PART I","PART II","PART III");
	foreach($arr as $val)
	{
	echo "<option value='$val'>$val</option>";
	}
	?>
    </select>
    </td>
  </tr>
  
   <tr>
    <td height="38">Subject code</td>
    <td><input style="padding:3px; width:250px;" type="text" placeholder="Short Subject Name..."  value="<?php echo $rs['subjectcod']; ?>" name="subjectcode" id="subjectcode"></td>
  </tr>
  
  
  <tr>
    <td height="38">Subject</td>
    <td><input style="padding:3px; width:250px;" type="text" placeholder="Full Subject Name..."  name="subject" id="subject" value="<?php echo $rs['subject_name']; ?>"></td>
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
