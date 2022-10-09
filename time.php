<?php
session_start();

include("dbconnection.php");


?>



<!DOCTYPE HTML>
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
     
    <script type="text/javascript">
    $(document).ready(function(){
        $('.pics').cycle('fade');
    })   
    </script>
    
     <script type="text/javascript">
         //on click nav bar
    $(function(){
  
  $('li.dropdown > a').on('click',function(event){
    
    event.preventDefault()
    
    $(this).parent().find('ul').first().toggle(300);
    
    $(this).parent().siblings().find('ul').hide(200);
    
    //Hide menu when clicked outside
    $(this).parent().find('ul').mouseleave(function(){  
      var thisUI = $(this);
      $('html').click(function(){
        thisUI.hide();
        $('html').unbind('click');
      });
    });
    
  });
  
});
    
    </script>
   
    <script type="text/javascript">
        //sound
        var bleep = new Audio();
        bleep.src = "sound/beep-07.mp3";
    </script>
        
   
        
</head>
<body>
    

     <!--college logo and college name-->
    <div id="toplogo">
	   <div class="logo">
           <a href="home.php"><img src="image/monogram.png" alt="LOGO" height="150px"></a>
        </div>
        <div class="College_name">
            <h1>RAM LAKHAN SINGH YADAV COLLEGE</h1>
            <h2>JHARKHAND RANCHI 834001</h2>
        </div>
    </div>
    <div id="clear"></div>
    <!--nav or menu bar -->
     <div id="nav">
        <ul>
            <li><a href="home.php" onmousedown="bleep.play()">HOME</a></li>
            
           <li class="dropdown"><a href="javascript:void(0)" onmousedown="bleep.play()">ABOUT US &#9662;</a>
                <ul class="dropdown-menu">
                    <!--<span class="dirction"><i class="fa fa-caret-up" aria-hidden="true"></i></span>-->
                    <li><a href="staffs.php" onmousedown="bleep.play()">STAFFS</a></li>
                    <li><a href="teacher.php" onmousedown="bleep.play()">TEACHER</a></li>
                </ul>
            </li>
            
        <li class="dropdown"><a href="javascript:void(0)" onmousedown="bleep.play()">FACILITY &#9662;</a>
                <ul class="dropdown-menu">
                     <!--<span class="dirction"><i class="fa fa-caret-up" aria-hidden="true"></i></span>-->
                    <li><a href="time.php" onmousedown="bleep.play()">ROUTINE</a></li>
                    <li><a href="notices.php" onmousedown="bleep.play()">NOTICE BOARD</a></li>
                </ul>
            </li>
        <li class="dropdown"><a href="javascript:void(0)" onmousedown="bleep.play()">LIBRARY &#9662;</a>
                <ul class="dropdown-menu">
                     <!--<span class="dirction"><i class="fa fa-caret-up" aria-hidden="true"></i></span>-->
                    <li><a href="book_details.php" onmousedown="bleep.play()">BOOK DETAILS</a></li>
                    <li><a href="registration.php" onmousedown="bleep.play()">BOOK ISSUE FORM</a></li>
                </ul>
            </li>
        <li class="dropdown"><a href="javascript:void(0)" onmousedown="bleep.play()">ACADEMIC &#9662;</a>
            
                <ul class="dropdown-menu">
                     <!--<span class="dirction"><i class="fa fa-caret-up" aria-hidden="true"></i></span>-->
                    <li><a href="registration.php" onmousedown="bleep.play()">ADMISSION FORM</a></li>
                    <li><a href="registration.php" onmousedown="bleep.play()">EXAMNATION FORM</a></li>
                    
            <li class="dropdown"><a href="courses.php" onmousedown="bleep.play()">COURSES <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                      <ul class="dropdown-menu">
                        
                    <li><a href="intermediate.php" onmousedown="bleep.play()">INTERMEDIATE COURSES</a></li>
                    <li><a href="undergarduate.php" onmousedown="bleep.play()">UNDERGRADUATE COURSES</a></li>
                    <li><a href="vocational.php" onmousedown="bleep.play()">VOCATIONAL COURSES</a></li>
                          
                </ul>
                    
                    </li>
                    
                </ul>
            </li>
            <li><a href="notices.php" onmousedown="bleep.play()">NOTICES</a></li>
            <li><a href="gallery.php" onmousedown="bleep.play()">PHOTO GALLERY</a></li>
            <li><a href="contact.php" onmousedown="bleep.play()">CONTACT US</a></li>
        </ul>
    </div>
    <div id="clear"></div>
    <!--hading -->
   <div style="margin-top:20px;" id="recordheding">
      <h1><a href="#">TIME TABLE</a></h1>
  </div> 
    <div id="clear"></div>
   
    <!--contener-->
         
         
         
         
          
<form id="form1" name="form1" method="get" action="" >
<div id="timeserch">
<table border="1">
  <tr>
    <th scope="row">&nbsp;Course</th>
    <td>&nbsp;
    <select name="course">
    <option value="">Select</option>
     <?php
	$sql = "SELECT * FROM course where status='Active'";
	$qsql = mysqli_query($conn,$sql);
	while($rs = mysqli_fetch_array($qsql))
	{
		if($rs['course_id'] == $_GET['course'])
		{
		echo "<option selected value='$rs[course_id]'>$rs[coursename] - $rs[coursetype]</option>";
		}
		else
		{
		echo "<option value='$rs[course_id]'>$rs[coursename] - $rs[coursetype]</option>";
		}
	}
	?>
    </select>
    </td>
   
  </tr>
  <tr>
    <th scope="row">&nbsp;Semester</th>
    <td>&nbsp;
      <select name="semester">
        <?php
	$arr = array("Select","PART I","PART II","PART III");
	foreach($arr as $val)
	{
		if($val == $_GET[semester])
		{
		echo "<option selected value='$val'>$val</option>";
		}
		else
		{
		echo "<option value='$val'>$val</option>";
		}
	}
	?>
        </select>
    </td>
    </tr>
 
</table>

 <input type="submit" name="btnsearch" id="btnsearch" value="Search Time Table" />
 </div>
</form>
   
   <?php
if(isset($_GET['btnsearch']))
{
?>
<div id="showtable">
<table border="1" style="border:#000;">
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">&nbsp;9.00 AM - 10.00 AM</th>
    <th scope="col">&nbsp;10.05 AM - 11.00 AM</th>
    <th scope="col">11.05 AM - 12.00 PM</th>
    <th scope="col">12.05 PM - 01.00 PM</th>
    <th rowspan="7" scope="col">&nbsp;</th>
    <th scope="col">02.00 PM - 3.00 PM</th>
    <th scope="col">03.05 PM - 04.00 PM</th>
    <th scope="col">04.05 PM - 05.00 PM</th>
  </tr>
  <tr>
    <th scope="row">Mon <?php $day ="Monday"; ?></th>
    <td>&nbsp;<?php
	$time="9.00 AM - 10.00 AM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="10.05 AM - 11.00 AM";
	include("includetimetable.php");
   
	?></td>
    <td>&nbsp;<?php
	$time="11.05 AM - 12.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="12.05 PM - 01.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="02.05 PM - 03.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="03.05 PM - 04.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="04.05 PM - 05.00 PM";
	include("includetimetable.php");
	?></td>
  </tr>
  <tr>
    <th scope="row">Tue <?php $day ="Tuesday"; ?></th>
    <td>&nbsp;<?php
	$time="9.00 AM - 10.00 AM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="10.05 AM - 11.00 AM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="11.05 AM - 12.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="12.05 PM - 01.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="02.05 PM - 03.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="03.05 PM - 04.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="04.05 PM - 05.00 PM";
	include("includetimetable.php");
	?></td>
  </tr>
  <tr>
    <th scope="row">Wed <?php $day ="Wednesday"; ?></th>
    <td>&nbsp;<?php
	$time="9.00 AM - 10.00 AM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="10.05 AM - 11.00 AM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="11.05 AM - 12.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="12.05 PM - 01.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="02.05 PM - 03.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="03.05 PM - 04.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="04.05 PM - 05.00 PM";
	include("includetimetable.php");
	?></td>
  </tr>
  <tr>
    <th scope="row">Thu <?php $day ="Thursday"; ?></th>
    <td>&nbsp;<?php
	$time="9.00 AM - 10.00 AM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="10.05 AM - 11.00 AM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="11.05 AM - 12.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="12.05 PM - 01.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="02.05 PM - 03.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="03.05 PM - 04.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="04.05 PM - 05.00 PM";
	include("includetimetable.php");
	?></td>
  </tr>
  <tr>
    <th scope="row">Fri <?php $day ="Friday"; ?></th>
    <td>&nbsp;<?php
	$time="9.00 AM - 10.00 AM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="10.05 AM - 11.00 AM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="11.05 AM - 12.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="12.05 PM - 01.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="02.05 PM - 03.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="03.05 PM - 04.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="04.05 PM - 05.00 PM";
	include("includetimetable.php");
	?></td>
  </tr>
  <tr>
    <th height="26" scope="row">Sat <?php $day ="Saturday"; ?></th>
    <td>&nbsp;<?php
	$time="9.00 AM - 10.00 AM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="10.05 AM - 11.00 AM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="11.05 AM - 12.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="12.05 PM - 01.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="02.05 PM - 03.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="03.05 PM - 04.00 PM";
	include("includetimetable.php");
	?></td>
    <td>&nbsp;<?php
	$time="04.05 PM - 05.00 PM";
	include("includetimetable.php");
	?></td>
  </tr>
</table>
</div>
<?php
}
?> 
   
 
   <div id="clear"></div>
     <!--footer-->
     <div  style="margin-top:100px;" id="footer">
    <div id="footer_size">
     <div class="footer_B">
         <h2>About Us</h2>
          <ul> <li><a href="home.php">Home</a></li>
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
        <li><a href="registration.php">Online Form</a></li></ul>
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