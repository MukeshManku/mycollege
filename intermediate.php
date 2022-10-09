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
                    <li><a href="registration.php" onmousedown="bleep.play()">ADDMISSION FORM</a></li>
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
    
    <div id="contener_staff_i">
        <div id="staffs_i">
        <h1>INTERMEDIATE COURSES</h1>
          </div>
        <div id="inter_Sec1">
        <p id="para_heder">The College offers the following courses for the Intermediate, based on CBSE Curriculum of the Jharkhand Academic Council:</p>
        <p>1. I.A. (Intermediate in Arts)</p>
        <p>2. I.Sc. (Intermediate in Science)</p>
        <p>3. I.Com (Intermediate in Commerce)</p>
        </div>
        <div id="inter_Sec2">
        <h1>ELIGIBILITY</h1>
            <h2>MARKS ELIGIBILITY</h2>
            <p>A Student may be admitted to the course if he/she has passed the matriculation examination of a Board incorporated by law and have secured not less than 33% marks in the subject concerned or awarded grades A+, A, B+, B or C in five point grading system introduced by JAC or awarded grades A1, A2, B1, B2, C1, C2 or D in nine point grading system introduced by CBSE.</p>
        </div>
        <div id="inter_Sec3">
        <h2>TERRITORIAL JURISDICTION</h2>
            <p>85% seats in all Intermediate courses shall be filled up from, against the student belonging in the territorial jurisdiction of Ranchi University. Selection for the remaining 15% seats be made open for all i.e. Ranchi University as well as other University students on the basis of merit. These seats shall also be filled up by the students belonging to all categories.</p>
        
        </div>
        <div id="inter_Sec4">
        <h1>ADMISSION</h1>
            <p>The prescribed Application Form may be downloaded from the college website [Academic → Application Form → Application Form-Intermediate, Download & Print] after the publication of the results (C.B.S.E., I.C.S.E., Intermediate etc.). Separate application must be submitted in case a candidate wishes to apply for more than One Faculty/Course. Duly filled Application Form for admission to Arts/Science/Commerce must reach the college office by the prescribed date. An application for admission must be accompanied by duly Attested Copy of Marks Sheet Only.</p>

            <p><em>Internet Version of Admission Form must be Submitted along with non refundable D.D. worth Rs.500/- in favour of R U RLSY COLLEGE, RANCHI, A-II Payable at Ranchi, Jharkhand.</em></p>
        </div>
        <div id="inter_Sec5">
        <h1>COURSE STRUCTURE</h1>
        <h2>Course of Study for Intermediate (Arts)</h2>
        <div id="inter_Sec_tbl1">
            <h2>1. Compulsory</h2>
            <div class="p_inter">
                    <p>English Core-A OR Hindi Core-A</p>
                    <p1>100 Marks</p1>
               </div>
                 <div class="p_inter">
                     <p>OR Hindi Core-B + Alt. English/Urdu/Bengali//Nagpuri/Kurukh/Mundari/Kurmali</p>
                    <p1>50+50 Marks</p1>
            </div>
              <div id="clear"></div>
                    <h2>2. Optional (Any Three):</h2>
              <div class="p_inter">
                    <p>History, Political Sc., Economics, Philosophy, Psychology, Geography, Anthropology</p>
                    <p1>100 Marks</p1>
            </div>
            <div id="clear"></div>
                <h2>3. Elective:</h2>
                 <div class="p_inter">
                    <p>English/Hindi/Urdu/Bengali/Nagpuri/Kurukh/Mundari/Kurmali</p>
                    <p1>100 Marks</p1>
                </div>

        </div>
        </div>
        
            <div id="clear"></div>
        
        <div id="inter_Sec6">
        <h2>Course of Study for Intermediate (Science)</h2>
          
            <div id="inter_Sec_tbl2">
            <h2>1. Compulsory</h2>
            <div class="p_inter">
                    <p><strong>[A]</strong> English Core-A OR Hindi Core-A</p>
                    <p1>100 Marks</p1>
               </div>
                 <div class="p_inter">
                     <p>OR Hindi Core-B + Alt. English/Urdu/Bengali//Nagpuri/Kurukh/Mundari/Kurmali</p>
                    <p1>50+50 Marks</p1>
            </div>
                <div class="p_inter">
                     <p><strong>[B]</strong> Physics + Chemistry</p>
                    <p1>100+100 Marks</p1>
            </div>
                
              <div id="clear"></div>
                    <h2>2. Optional (Any One Set):</h2>
              <div class="p_inter">
                    <p>Maths &amp; Computer</p>
                    <p1>100+100 Marks</p1>
            </div>
                
                <div class="p_inter">
                    <p>Maths &amp; Economics</p>
                    <p1>100+100 Marks</p1>
            </div>
                <div class="p_inter">
                    <p>Biology &amp; Maths</p>
                    <p1>100+100 Marks</p1>
            </div>
                <div class="p_inter">
                    <p>Biology &amp; Computer</p>
                    <p1>100+100 Marks</p1>
            </div>
                 <div class="p_inter">
                    <p>Biology &amp; Economics</p>
                    <p1>100+100 Marks</p1>
                </div>
            </div>
        </div>
            <div id="clear"></div>
                
        
            
            
        <div id="inter_Sec7">
         <h2>Course of Study for Intermediate (Commerce)</h2>
            
                <div id="inter_Sec_tbl3">
            <h2>1. Compulsory</h2>
            <div class="p_inter">
                    <p><strong>[A]</strong> English Core-A OR Hindi Core-A</p>
                    <p1>100 Marks</p1>
               </div>
                    
                 <div class="p_inter">
                     <p><strong>[B]</strong> Accountancy</p>
                    <p1>100 Marks</p1>
            </div>
                <div class="p_inter">
                     <p><strong>[C]</strong> Business Studies</p>
                    <p1>100 Marks</p1>
            </div>
                
              <div id="clear"></div>
                    <h2>2. Optional (Any Two):</h2>
              <div class="p_inter">
                    <p>Computer Sc., Commercial Arithmetic, Economics, Enterpreneurship</p>
                    <p1>100+100 Marks</p1>
            </div>
            </div>
            
        </div>
        <div id="clear"></div>
        
    </div>
   
  
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