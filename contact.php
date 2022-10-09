<?php
include('dbconnection.php');


if (isset($_POST['submit'])) {
 $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone']; 
    $massege = $_POST['massege']; 
    
     $sql = "INSERT INTO contact_us(name, email, phone, massege) VALUES ('$name',  '$email', '$phone', '$massege')";
   mysqli_query($conn, $sql);
     echo "<script>alert('Contact Us record inserted sucessfully..');</script>";
    
    
}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>College Website</title>
    <link rel="icon" href="image/monogram.png">
    <link rel="stylesheet" href="style.css" type="text/css">
     <link rel="stylesheet" href="page.css" type="text/css">
    <link href="css/font-awesome.min.css"rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
     <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
     <link href="js/jquery.mCustomScrollbar.min.css"rel="stylesheet" type="text/css"/>
     
    <!--script start .......
    //image slide....  -->
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
    <!--contener-->
    
    <div id="contener_staff_c">
      <address class="Admin_contact">
           
    <div id="fconteact">
        <h3 id="A_contact"><u>Contact US</u></h3>
   <div class="fsocial1">
        <a href="https://www.facebook.com" title="Facebook"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
         <a href="https://www.twitter.com" title="Twitter"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
         <a href="https://www.youtube.com" title="Youtube"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
         
			 <a href="https://plus.google.com" title="Google+"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
       
        </div>
        <address>
        <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;RAM LAKHAN SINGH YADAV COLLEGE<br>&nbsp;&nbsp;&nbsp; KOKAR, RANCHI JHARKHAND, 834001<br> 
            <p> <i class="fa fa-envelope " aria-hidden="true"></i>  rlsycollegeranchi@gmail.com</p>
            <p><i class="fa fa-phone " aria-hidden="true"></i>&nbsp;&nbsp;0651-2543439</p>
            <p><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;www.rlsycollege.ac.in</p>
        </address>
                </div>
           <img src="image/students.png" height="300" width="250">
        </address>
        <!--from-->
                     <div class="from_contact"> 
  <form id="contact" action="" method="post">
    <h3>College Contact Form</h3>
    <h4>Contact us for enquiry</h4>
    <fieldset>
      <input placeholder="Your name*" type="text" tabindex="1" name="name" required="">
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address*" type="email" name="email" tabindex="2" required="">
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number*" type="tel" name="phone" tabindex="3" required="">
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" type="text" name="massege" required=""></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>
       
        
    </div>
   
   <div id="clear"></div> 
  
  <div id="footer">
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