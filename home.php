<?php
include('dbconnection.php');
session_start(); 
 
// variable declaration
$username = "";
$errors = array(); 



if (isset($_POST['Login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    
  

    
if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$passwords = base64_encode($password);
  	$sql = "SELECT * FROM stu_register WHERE username='$username' AND password='$passwords'";
  	$results = mysqli_query($conn, $sql);
      
        if(mysqli_num_rows($results) == 1) {
              $_SESSION['login_user'] = $username;
  	         $_SESSION['username'] = $username;
               //$_SESSION['f_name'] = $fast_name;
               //$_SESSION['l_name'] = $last_name;
               //$_SESSION['father_name'] = $father_name;
               // $_SESSION['gender'] =  $gender;
               //$_SESSION['dob'] =  $dob;
               //$_SESSION['email'] = $email;
               // $_SESSION['phone'] = $phone;
        
	
  	  //$_SESSION['success'] = "You are now logged in";
  	  header('location: student.php');
  	}

    else {
  		array_push($errors, "Wrong username/password combination");
  	}
     
      
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
    <!--college image-->
    <div id="college_image">
        <img src="image/college.jpg" alt="COLLEGE IMAGE" height="400px" width="100%">
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
    <!---cantaner-->
    <div id="style_back">
    <div id="contener">
        <div class="contener_slaid">
          <div class="pics">
        <img src="image/slides/f-bener/110034.jpg" width="800" height="300"/> 
        <img src="image/slides/f-bener/WA0002.jpg" width="800" height="300"/>  
        <img src="image/slides/f-bener/WA0027.jpg" width="800" height="300"/>
        <img src="image/slides/IMG-20171204-WA0001.jpg" width="800" height="300"/>
        <img src="image/slides/f-bener/DSC_0056.JPG" width="800" height="300"/> 
        <img src="image/slides/f-bener/l-book.jpg" width="800" height="300"/>  
        <img src="image/slides/f-bener/Exam%20Chemistry.jpg" width="800" height="300"/>
  
    </div>       
        </div>
        <div id="welcome_text">
        <img src="image/567.png" height="40px" width="700px">
        <h1>WELCOME</h1>
      <h2>ABOUT THE COLLEGE </h2>
<p>Established in 1972, this college has been pioneer in the field of education with excellent track of imparting quality education. Here you find learned faculty members with rich experience in Academia who takes personal interest in each student of ours.</p>

<p><i>The college has played a significance role in motivating and educating underprivileged group of students coming from tribal, dalit and backward populace of the state. The result of the college has always been commendable.</i></p>
    </div> 
    </div>
   
    <!--login and notice-->
   <div id="right_section">
      <div class="login">
            <H2>STUDENT LOGIN</H2>
            <form class="log" action="" method="post">
			<?php include('errors.php'); ?>
			
               <h3>Login Form!!!</h3>
	
                <p>Username:</p>
                <input class="uesr_pass" type="text" name="username" placeholder="Enter the Username">
                <p>Password:</p>
                <input class="uesr_pass" type="password" name="password" placeholder="Enter the Password"><br><br>
                
                <div id="button_log">
				<li>
                <input class="uesr_pass_sub" type="submit" name="Login" value="Login"></li>
                <li id="sing">
				<a href="registration.php">Sign Up</a></li>
               <li id="forpass">
                <a href="forget_pass.php">Forgot Password</a></li>
                </div>
            </form>
        
         
      </div>
       <div class="notice">
          <h1>NOTICE</h1>
          <div class="notice_section">
          <marquee direction="up" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();">
          <ol type="1">
        <li><a href="notices.php">Admission Will be Start on 12/12/2017 to Close Date 10/1/2018.</a>  <img src="image/new.gif"/></li>
            <li><a href="notices.php">08/12/2017 B.A./B.Com. Part I (Hons./Gen.) Exam Result 2017 </a>  <img src="image/new.gif"/></li>
            <li><a href="notices.php">Programme for B.A/B.Sc/B.Com Part -II ( Hons/Gen/Sub) Exam 2017.</a>  <img src="image/new.gif"/></li>
              <li><a href="notices.php">Result of Bachelor of Arts/science/Commerce Hons. /Gen/ PART-I Examinations 2016 held in the month of June 2016.</a>  <img src="image/new.gif"/></li>
              <li><a href="notices.php">Result of Bachelor of Arts/Science/Commerce Vocational Hons. PART-III Examinations 2017 held in the month of April 2017.</a>  <img src="image/new.gif"/></li>
              <li><a href="notices.php">Result of Bachelor of science Hons. /Gen/ PART-I Examinations 2016 held in the month of June 2016.</a>  <img src="image/new.gif"/></li>
              <li><a href="notices.php">Programme for B.A/B.Sc/B.Com Part -II ( Hons/Gen/Sub) Exam 2017.</a></li>
              <li><a href="notices.php">Intermediate Last date of Admission is 10th January 2018.</a></li>
              </ol>
             </marquee>
              
             
              
          </div> 
       </div>
   </div>
   </div>
   
   <div id="clear"></div>
   <!--contenar end-->
   
   <div id="section">
     <div class="section_A">
        <img src="image/RLSY%20Principal%20web.jpg"/>
        <h1>PROFESSOR INCHARGE</h1> 
        <h2>DR. VIJAY BAHADUR SINGH</h2> 
      </div>
      <div class="section_A">
         <img src="image/Exam%20Chemistry%204.jpg"/>
         <h1>SCIENCE LABORATORY</h1> 
        <h2>CHEMISTRY LAB</h2>  
      </div>
      <div class="section_A">
         <img src="image/computer_lab_large1.jpg"/>
         <h1>COMPUTER LAB</h1> 
        <h2>BCA DEPARTMENT</h2>  
      </div>
      <div class="section_A">
         <img src="image/Costume%20Institute_marquee.jpg"/> 
         <h1>LIBRARY</h1> 
        <h2>ALL BOOKS AVAILABLE</h2> 
      </div> 
   </div>
   
   <!--footer-->
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