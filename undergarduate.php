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
    
    <div id="contener_staff_g">
        <div id="staffs_i">
        <h1>UNDERGARDUATE &nbsp COURSES</h1>
          </div>
        <div id="under_g_Sec1">
       <p>The college offers the following courses for the Graduation, based on the UGC curriculum of the Ranchi University, Ranchi</p>
        </div>
        <div id="undergarduate_sec1">
         <h3>DEGREE COURSES</h3>
        <ul class="square">
            <li>B. Com. (Bachelor of Commerce)</li>
            <li>B. A. (Bachelor of Arts)</li>
            <li>B. Sc. (Bachelor of Science)</li>
        </ul>
        </div>
        <div id="undergarduate_sec1">
         <h3>VOCATIONAL DEGREE COURSES</h3>
        <ul class="square">
            <li>B. B. A. (Bachelor of Business Administration)</li>
            <li>B. C. A. (Bachelor of Computer Applications)</li>
        </ul>
        </div>
        <div id="clear"></div>
        <div id="undergarduate_sec2">
            <h1>ELIGIBILITY</h1>
        <p>
           The prescribed Application Form & Declaration Form attached with the prospectus (detach it carefully) may be obtained from the college on payment of Rs. 300/- in cash after the publication of the results (C.B.S.E., I.C.S.E., Intermediate etc.). Separate application must be submitted in case a candidate wishes to apply for more than One Faculty/Course. Duly filled Application Form for admission to Arts/Science/Commerce must reach the college office by the prescribed date. An application for admission must be accompanied by duly attested copy of marks sheet only.
        </p>

            
        </div>
         <div id="undergarduate_sec2">
            <h1>ADMISSION</h1>
        <p>
            A Student may be admitted to the course of instructions for the degree of Bachelor
            of Arts/Science/Commerce (General/Honours) if he/she has passed the Intermediate
            Examination of a Board/University established or incorporated by law, or any other
            examination recognized by the University. 
        </p>
        <p>
            For seeking of the Honours degree in any subject it shall be necessary for a student
            to have obtained <strong>not less than 45% marks</strong> at the Intermediate/10+2 Examination in
            the subject concerned or in an allied subject. 
        </p>

            
        </div>
        <div id="clear"></div>
            <div id="inter_Sec5">
        <h1>COURSE STRUCTURE</h1>
        <h2>Course of Study for B. Com. (General)</h2>
        <div id="gard_Sec_tbl1">
            <h3>Part-I</h3>
            <h2>Compulsory</h2>
            <div class="p_inter">
                    <p>	M.I.L. Hindi <strong>OR</strong></p>
                    <p1>100 Marks</p1>
               </div>
                 <div class="p_inter">
                     <p>Non-Hindi + Alt. English /Urdu /Bengali /Nagpuri /Kurukh /Mundari /Kurmali</p>
                    <p1>50+50 Marks</p1>
            </div>
              <div class="p_inter">
                    <p>Financial Accounts</p>
                    <p1>100 Marks</p1>
            </div>
                 <div class="p_inter">
                    <p>Business Organisation</p>
                    <p1>100 Marks</p1>
                </div>
              <div class="p_inter">
                    <p>Principle of Economics</p>
                    <p1>100 Marks</p1>
                </div>
            
             <h4>Part-II</h4>
            <h2>Compulsory</h2>
            <div class="p_inter">
                    <p>	M.I.L. Hindi <strong>OR</strong></p>
                    <p1>100 Marks</p1>
               </div>
                 <div class="p_inter">
                     <p>Non-Hindi + Alt. English /Urdu /Bengali /Nagpuri /Kurukh /Mundari /Kurmali</p>
                    <p1>50+50 Marks</p1>
            </div>
              <div class="p_inter">
                    <p>Business Law</p>
                    <p1>100 Marks</p1>
            </div>
                 <div class="p_inter">
                    <p>Planning & Economic Growth</p>
                    <p1>100 Marks</p1>
                </div>
              <div class="p_inter">
                    <p>Money & Banking</p>
                    <p1>100 Marks</p1>
                </div>
            
            <h4>Part-III</h4>
            <h2>Compulsory</h2>
            <div class="p_inter">
                    <p>	Environmental Science and Ethics</p>
                    <p1>100 Marks</p1>
               </div>
                 <div class="p_inter">
                     <p>Business Mathematics & Statistics</p>
                    <p1>100 Marks</p1>
            </div>
             <div id="clear"></div>
                    <h2>2. Optional</h2>
              <div class="p_inter">
                    <p>Advance Account</p>
                    <p1>100 Marks</p1>
            </div>
                 <div class="p_inter">
                    <p>Auditing</p>
                    <p1>100 Marks</p1>
                </div>
             
        </div>
                
        </div>
        
            <div id="clear"></div> 
   
         <div id="inter_Sec5">
        <h2>Course of Study for B.A. (General)</h2>
        <div id="gard_Sec_tbl2">
            <h2>Compulsory</h2>
            <div class="p_inter">
                    <p>	M.I.L. Hindi <strong>OR</strong></p>
                    <p1>100 Marks</p1>
               </div>
                 <div class="p_inter">
                     <p>Non-Hindi + Alt. English /Urdu /Bengali /Nagpuri /Kurukh /Mundari /Kurmali</p>
                    <p1>50+50 Marks</p1>
            </div>
             
             <div id="clear"></div>
                    <h2>2. Optional (Any Three):</h2>
              <div class="p_inter">
                    <p>Any three subjects among these - History, Political Sc., Economics, Philosophy, Geography, Anthropology, </p>
                    <p1>100 Marks</p1>
            </div>
               <div class="p_inter">
                    <p> Anthropology, Psychology, English, Hindi, Bengali, Urdu, Nagpuri, Kurukh, Mundari, Kurmali </p>
                    <p1>100 Marks</p1>
            </div>
             
        </div>
                
        </div>
        
            <div id="clear"></div> 
        <div id="inter_Sec5">
        <h2>Course of Study for Science (General)</h2>
        <div id="gard_Sec_tbl3">
            <h2>Compulsory</h2>
            <div class="p_inter">
                    <p>	M.I.L. Hindi <strong>OR</strong></p>
                    <p1>100 Marks</p1>
               </div>
                 <div class="p_inter">
                     <p>Non-Hindi + Alt. English /Urdu /Bengali /Nagpuri /Kurukh /Mundari /Kurmali</p>
                    <p1>50+50 Marks</p1>
            </div>
             
             <div id="clear"></div>
            
             <h2>Compulsory</h2>
            <div class="p_inter">
                    <p>	Environmental Science</p>
                    <p1>100 Marks</p1>
               </div>
             
             <div id="clear"></div>
            
                    <h2>2. Optional (Any One Set):</h2>
              <div class="p_inter">
                    <p>a) Maths, Physics, Chemistry </p>
                    <p1>3*100 Marks</p1>
            </div>
               <div class="p_inter">
                    <p> b) Zoology, Botany, Chemistry </p>
                    <p1>3*100 Marks</p1>
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