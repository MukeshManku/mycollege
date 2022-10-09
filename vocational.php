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
    
    <div id="contener_staff_v">
        <div id="staffs_i">
        <h1>VOCATIONAL COURSES</h1>
          </div>
        <div id="voc_sec1">
         <h2>Composition (for Part-I and Part-II)</h2>
        <ol>
            <li>M.I.L. Hindi (100 marks) <strong>OR</strong></li>
            <li>Non-Hindi with Alternate English/Urdu/Bengali/Nagpuri/Kurukh/Mundari/Kurmali (50 + 50 marks)</li>
        </ol>
        <h2>Composition (for Part-III)</h2>
        <ol>
            <li>Environmental Science (100 marks)</li>
        </ol>
        <h1>Honours</h1>
            <div id="voc_tble">
        <table>
            <thead>
                <tr>
                    <th rowspan="2">Paper</th>
                    <th rowspan="2">Description</th>
                    <th colspan="2" class="text-center">Marks</th>
                    <th rowspan="2">Exam Hours</th>
                    <th rowspan="2">No. of Lectures</th>
                </tr>
                <tr>
                    <th>Theory</th>
                    <th>Practical</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td text-align="center"><strong>Part-I</strong></td>
                    <td colspan="5"><strong>Theory Papers</strong></td>
                </tr>
                <tr>
                    <td>1a</td>
                    <td>Introduction to Computer Science &amp; Information Technology</td>
                    <td>50</td>
                    <td></td>
                    <td>3</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>2a</td>
                    <td>Operating System</td>
                    <td>50</td>
                    <td></td>
                    <td>3</td>
                    <td>35</td>
                </tr>
                <tr>
                    <td>3a</td>
                    <td>C &amp; Data Structure</td>
                    <td>50</td>
                    <td></td>
                    <td>3</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>4a</td>
                    <td>System Analysis &amp; Design</td>
                    <td>50</td>
                    <td></td>
                    <td>3</td>
                    <td>35</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="5"><strong>Practical Papers</strong></td>
                </tr>
                <tr>
                    <td>1b</td>
                    <td>Practical on 1a</td>
                    <td>25</td>
                    <td>25</td>
                    <td>3</td>
                    <td>6 hrs/week</td>
                </tr>
                <tr>
                    <td>2b</td>
                    <td>Practical on 2a</td>
                    <td>25</td>
                    <td>25</td>
                    <td>3</td>
                    <td>6 hrs/week</td>
                </tr>
                <tr>
                    <td>3b</td>
                    <td>Practical on 3a</td>
                    <td>25</td>
                    <td>25</td>
                    <td>3</td>
                    <td>6 hrs/week</td>
                </tr>
                <tr>
                    <td>4b</td>
                    <td>Practical on 4a</td>
                    <td>25</td>
                    <td>25</td>
                    <td>3</td>
                    <td>6 hrs/week</td>
                </tr>
                <tr>
                    <td><strong>Part-II</strong></td>
                    <td colspan="5"><strong>Theory Papers</strong></td>
                </tr>
                <tr>
                    <td>5a</td>
                    <td>Programming in C++</td>
                    <td>50</td>
                    <td></td>
                    <td>3</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>6a</td>
                    <td>Database Management System</td>
                    <td>50</td>
                    <td></td>
                    <td>3</td>
                    <td>35</td>
                </tr>
                <tr>
                    <td>7a</td>
                    <td>Networking, Data Communication</td>
                    <td>50</td>
                    <td></td>
                    <td>3</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td>8a</td>
                    <td>E-Commerce and Application</td>
                    <td>50</td>
                    <td></td>
                    <td>3</td>
                    <td>40</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="5"><strong>Practical Papers</strong></td>
                </tr>
                <tr>
                    <td>5b</td>
                    <td>Practical on 5a</td>
                    <td>25</td>
                    <td>25</td>
                    <td>3</td>
                    <td>6 hrs/week</td>
                </tr>
                <tr>
                    <td>6b</td>
                    <td>Practical on 6a</td>
                    <td>25</td>
                    <td>25</td>
                    <td>3</td>
                    <td>6 hrs/week</td>
                </tr>
                <tr>
                    <td>7b</td>
                    <td>Practical on 7a</td>
                    <td>25</td>
                    <td>25</td>
                    <td>3</td>
                    <td>6 hrs/week</td>
                </tr>
                <tr>
                    <td>8b</td>
                    <td>Practical on 8a</td>
                    <td>25</td>
                    <td>25</td>
                    <td>3</td>
                    <td>6 hrs/week</td>
                </tr>
                <tr>
                    <td><strong>Part-III</strong></td>
                    <td colspan="5"><strong>Theory Papers</strong></td>
                </tr>
                <tr>
                    <td>9a</td>
                    <td>Web Technology</td>
                    <td>50</td>
                    <td></td>
                    <td>3</td>
                    <td>30</td>
                </tr>
                <tr>
                    <td>10a</td>
                    <td>Java Programming</td>
                    <td>50</td>
                    <td></td>
                    <td>3</td>
                    <td>45</td>
                </tr>
                <tr>
                    <td>11a</td>
                    <td>Enterpreneurship Development</td>
                    <td>100</td>
                    <td></td>
                    <td>3</td>
                    <td>75</td>
                </tr>
                <tr>
                    <td></td>
                    <td><strong>Practical Papers</strong></td>
                </tr>
                <tr>
                    <td>9b</td>
                    <td>Practical on 9a</td>
                    <td>25</td>
                    <td>25</td>
                    <td>3</td>
                    <td>6 hrs/week</td>
                </tr>
                <tr>
                    <td>10b</td>
                    <td>Practical on 10a</td>
                    <td>25</td>
                    <td>25</td>
                    <td>3</td>
                    <td>6 hrs/week</td>
                </tr>
                <tr>
                    <td rowspan="2">11</td>
                    <td>(a) On the Job Training (Part I &amp; II)</td>
                    <td>100</td>
                    <td></td>
                    <td>3</td>
                    <td>30 days</td>
                </tr>
                <tr>                    
                    <td>(b) Project Report</td>
                    <td>50</td>
                    <td>50</td>
                    <td>3</td>
                    <td>90 days</td>
                </tr>
            </tbody>
        </table>
        </div>
        </div>
            <div id="clear"></div>
            <div id="voc_subsidiary">
        <h2>Subsidiary</h2>
        <p class="text-justify">
            A student selected for admission in vocational subjects shall have to select two
            non-vocational subjects as subsidiary papers for Part-I and Part-II examinations
            for the subjects mentioned below in the respective faculty:
        </p>
        <ul class="square">
            <li>For <strong>BCA (B.A. Honours)</strong>: History, Political Science, Economics,
                Philosophy, Geography, Anthropology, Phychology
            </li>
            <li>For <strong>BCA (B.Sc Honours)</strong>: Physics, Chemistry, Botany, Zoology, Geology,
                Mathematics
            </li>
            <li>For <strong>BCA (B.Com Honours)</strong>: Business Organization, Principles of Economics,
                Money and Banking, Economic Development of India, Accounts.
            </li>
        </ul>
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