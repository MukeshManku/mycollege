<?php



include('dbconnection.php');

if(isset($_GET['btnadd']))
{
	$sql ="INSERT INTO time_table(course_id, subject_id, semister, week_day, time, status) VALUES ('$_GET[course]','$_GET[subject]','$_GET[semester]','$_GET[day]','$_GET[time]','Active')";
	if(!$qsql = mysqli_query($conn,$sql))
	{
		echo mysqli_error($conn);
	}
	echo "<script>alert('New Time table record inserted Succcessfully !!!');</script>";
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
      <h1><a href="Admin.php">TIME TABLE RECORDS</a></h1>
  </div> 
    <div id="clear"></div>
   
   
    
        <!--contener-->
    <div id="time_table">
        <div class="set_time_table">
           <h2><a href="view_add_subject.php">View Time Table</a> | <a href="add_subject.php">Add Subject</a></h2> 
    <form method="get" action="">
    
    <div id="tableset1">
<table  border="1">
  <tr>
    <th scope="row">&nbsp;Course :</th>
    <td>&nbsp;
 <select name="course">
    <option value="">Select</option>
   <?php
$sqlsubject = "SELECT * FROM  course ";
$qsqlsubject = mysqli_query($conn,$sqlsubject);
while($rssubject = mysqli_fetch_array($qsqlsubject))
{
	if($_GET[course] == $rssubject[course_id] )
	{
  echo "<option value='$rssubject[course_id]' selected>$rssubject[coursename]</option>";
	}
	else if($_GET[courseid] == $rssubject[course_id] )
	{
  echo "<option value='$rssubject[course_id]' selected>$rssubject[coursename]</option>";
	}
	else
	{
  echo "<option value='$rssubject[course_id]'>$rssubject[coursename]</option>";  
	}
}
?>
    </select>
    </td>
  </tr>
  <tr>
    <th scope="row">&nbsp;Semester :</th>
    <td>&nbsp;
    <select name="semester" onchange="loadform(courseid.value,semester.value)">
    <?php
	$arr = array("Select","PART I","PART II","PART III");
	foreach($arr as $val)
	{
		if($val == $_GET[semester])
		{
		echo "<option value='$val' selected>$val</option>";
		}
		else
		{
		echo "<option value='$val'>$val</option>";
		}
	}
	?>
    </select></td>
  </tr>
</table>
</div>

<div id="tableset2">
<table width="200" border="1">
  <tr>
    <th scope="row">&nbsp;Day</th>
    <td>&nbsp;
    <select style="width:200px;" name="day">
    <option value="">Select</option>
    <?php
	$arrdays = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
	foreach($arrdays as $val)
	{
		echo "<option value='$val'>$val</option>";
	}
	?>
    </select>
    </td>
  </tr>
  <tr>
    <th scope="row">&nbsp;Subject</th>
    <td>&nbsp;
        <select name="subject">
    <option value="">Select</option>
    <?php
	$sqlcourse = "SELECT * FROM subject WHERE status='Active'";
	$qsqlcourse = mysqli_query($conn,$sqlcourse);
	while($rs = mysqli_fetch_array($qsqlcourse))
	{
		echo "<option value='$rs[subject_id]'>$rs[subjectcode] - $rs[subject_name]</option>";
	}
	?>
    </select>
    </td>
  </tr>
  <tr>
    <th scope="row">&nbsp;Time</th>
    <td>&nbsp;
        <select name="time" style="width:200px;">
    <option value="">Select</option>
    <?php
	$arrtime = array("9.00 AM - 10.00 AM","10.05 AM - 11.00 AM","11.05 AM - 12.00 PM","12.05 PM - 01.00 PM","02.05 PM - 03.00 PM","03.05 PM - 04.00 PM","04.05 PM - 05.00 PM");
	foreach($arrtime as $val)
	{
		echo "<option value='$val'>$val</option>";
	}
	?>
    </select>
    </td>
  </tr>
  
  
</table>
<div id="addtime">
<input type="submit" value="Add Time Table" name="btnadd" />
</div>
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
    
    
    <script type="application/javascript">
function loadform(course,semester)
{
	var lnk = "time_table_admin.php?course="+course+"&semester="+semester;
	window.location.assign(lnk);
}
</script>

    </body>
</html>
