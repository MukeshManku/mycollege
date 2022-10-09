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
    
    <div id="contener_staff_notice">
        <div id="staffs">
        <h1>NOTICES</h1>
        </div>
        <div id="notice">
        <table>
            
                
            <tr>
                <th>S.No.</th>
                <th>DATE</th>
                <th>NOTICES</th>
                <th>VIEW</th>
            </tr>
           <tr>
                 <td>1</td>
               <td>15/12/2017</td>
               <td class="not_td">Graduation Last date of Admission is 10th January 2018.</td>
               <td><a href="#">-</a></td>
               
            </tr>
              <tr>
                 <td>2</td>
               <td>04/04/2017</td>
               <td class="not_td">Result of Bachelor of Arts/Science/Commerce Vocational Hons. PART-III Examinations 2017 held in the month of April 2017.</td>
               <td><a href="doc/notice/2.pdf">DOWNLOAD</a></td>
               
            </tr>
               <tr>
                <td>3</td>
               <td>08/12/2017</td>
               <td class="not_td">B.A./B.Com. Part I (Hons./Gen.) Exam Result 2017 </td>
               <td><a href="doc/notice/3.pdf">DOWNLOAD</a></td>
               
            </tr>
               <tr>
                <td>4</td>
               <td>01/01/2018</td>
               <td class="not_td">Intermediate Last date of Admission is 10th January 2018.</td>
               <td><a href="#">-</a></td>
               
            </tr>
                     <tr>
                 <td>5</td>
               <td>02/06/2017</td>
               <td class="not_td">Programme for B.A/B.Sc/B.Com Part -II ( Hons/Gen/Sub) Exam 2017.</td>
               <td><a href="doc/notice/5.pdf">DOWNLOAD</a></td>
               
            </tr>
              <tr>
                 <td>6</td>
               <td>03/08/2017</td>
               <td class="not_td">Centre of Examinations for B.A/B.Sc/B.Com Part-II ( Hons/Gen/Sub) Exam 2017.</td>
               <td><a href="doc/notice/6.pdf">DOWNLOAD</a></td>
               
            </tr>
               <tr>
                <td>7</td>
               <td>06/11/2016</td>
                   <td class="not_td">Result of Bachelor of Arts/science/Commerce Hons. /Gen/ PART-I Examinations 2016 held in the month of June 2016.</td>
               <td><a href="doc/notice/7.pdf">DOWNLOAD</a></td>
               
            </tr>
               <tr>
                <td>8</td>
               <td>11/03/2017</td>
               <td class="not_td">Centre of Examinations for B.A/B.Sc/B.Com Part-I ( Hons/Gen/Sub) Exam 2017.</td>
               <td><a href="doc/notice/8.pdf">DOWNLOAD</a></td>
               
            </tr>
                       <tr>
                 <td>9</td>
               <td>02/05/2016</td>
               <td class="not_td">Result of Bachelor of science Hons. /Gen/ PART-I Examinations 2016 held in the month of June 2016.</td>
               <td><a href="doc/notice/9.pdf">DOWNLOAD</a></td>
               
            </tr>
              <tr>
                 <td>10</td>
               <td>02/09/2017</td>
              <td class="not_td">Result of Bachelor of Arts/science/Commerce Hons. /Gen/ PART-I Examinations 2016 held in the month of June 2016.td>
               <td><a href="doc/notice/7.pdf">DOWNLOAD</a></td>
               
            </tr>
               <tr>
                 <td>11</td>
               <td>11/02/2017</td>
               <td class="not_td">Result of Bachelor of Arts/Science/Commerce Vocational Hons. PART-II Examinations 2017 held in the month of April 2017.</td>
               <td><a href="doc/notice/2.pdf">DOWNLOAD</a></td>
               
            </tr>
              <tr>
                 <td>12</td>
               <td>08/04/2017</td>
               <td class="not_td">Result of Bachelor of Arts/Science/Commerce Vocational Hons. PART-I Examinations 2017 held in the month of April 2017.</td>
               <td><a href="doc/notice/2.pdf">DOWNLOAD</a></td>
               
            </tr>
               <tr>
                <td>13</td>
               <td>09/5/2017</td>
               <td class="not_td">B.A./B.Com. Part I (Hons./Gen.) Exam Result 2017 </td>
               <td><a href="doc/notice/3.pdf">DOWNLOAD</a></td>
               
            </tr>
               <tr>
                <td>14</td>
               <td>21/11/2017</td>
               <td class="not_td">Intermediate Last date of Admission is 10th January 2018.</td>
               <td><a href="#"><p>-</p></a></td>
               
            </tr>
                     <tr>
                 <td>15</td>
               <td>12/06/2017</td>
               <td class="not_td">Programme for B.A/B.Sc/B.Com Part -II ( Hons/Gen/Sub) Exam 2017.</td>
               <td><a href="doc/notice/5.pdf">DOWNLOAD</a></td>
               
            </tr>
               
        </table>
        
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