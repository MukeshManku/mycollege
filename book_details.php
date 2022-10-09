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
    
    <div id="contener_staff">
        <div id="staffs">
        <h1>LIBRARY&nbsp; BOOK &nbsp;DETAILS </h1>
        </div>
        <div id="staffs_detail">
        <table class="book_img_set">
            <tr>
                <th>S.No.</th>
                <th>BOOK NAME</th>
                <th>AUTHORS NAME</th>
                <th>VIEW</th>
                
            </tr>
                 <tr>
                     <td>1</td>
                     <td>Introduction to Algorithms</td>
                        <td> Thomas H. Cormen </td>
                     <td><img src="image/book/01.jpg" height="40px" width="50px"></td>
                    
                    </tr>
                <tr>
                     <td>2</td>
                     <td>Structure and Interpretation of Computer Programs</td>
                        <td>Harold Abelson</td>
                     <td><img src="image/book/02.jpg" height="40px" width="50px"></td>
                   
                    </tr>
            
            <tr>
                     <td>3</td>
                     <td>The C Programming Language</td>
                        <td>Brian W. Kernighan</td>
                     <td><img src="image/book/03.jpg"></td>
                    </tr>
            <tr>
                     <td>4</td>
                     <td>The Pragmatic Programmer</td>
                        <td>Andy Hunt (Goodreads Author) </td>
                     <td><img src="image/book/04.jpg"></td>
                    </tr>
            <tr>
                     <td>5</td>
                     <td>Design Patterns: Elements of Reusable Object-Oriented Software</td>
                        <td>Erich Gamma</td>
                      
                     <td><img src="image/book/05.jpg"></td>
                    </tr>
            <tr>
                     <td>6</td>
                     <td>Introduction to the Theory of Computation</td>
                        <td>Michael Sipser</td>
                       
                     <td><img src="image/book/06.jpg"></td>
                    </tr>
            <tr>
                     <td>7</td>
                     <td>The Mythical Man-Month: Essays on Software Engineering</td>
                        <td>Frederick P. Brooks Jr</td>
                     
                     <td><img src="image/book/07.jpg"></td>
                    </tr>
            <tr>
                     <td>8</td>
                     <td>Artificial Intelligence: A Modern Approach</td>
                        <td>Stuart Russell</td>
                     <td><img src="image/book/08.jpg"></td>
                    </tr>
            <tr>
                     <td>9</td>
                     <td>Code Complete</td>
                        <td>Steve McConnell</td>
                     <td><img src="image/book/09.jpg"></td>
                    </tr>
                    <tr>
                     <td>10</td>
                     <td>The Protocols (TCP/IP Illustrated, Volume 1)</td>
                        <td>W. Richard Stevens</td>
                     <td><img src="image/book/010.jpg"></td>
                    </tr>
            <tr>
                     <td>11</td>
                     <td>Advanced Programming in the UNIX Environment</td>
                        <td>W. Richard Stevens </td>
                       
                     <td><img src="image/book/011.jpg"></td>
                    </tr>
            <tr>
                     <td>12</td>
                     <td>Introduction to Automata Theory, Languages, and Computation </td>
                        <td>John E. Hopcroft</td>
                     <td><img src="image/book/012.jpg"></td>
                    </tr>
                    <tr>
                     <td>13</td>
                     <td>Concrete Mathematics: A Foundation for Computer Science</td>
                        <td>Ronald L. Graham</td>
                     <td><img src="image/book/013.jpg"></td>
                    </tr>
            <tr>
                     <td>14</td>
                     <td>Compilers: Principles, Techniques, and Tools</td>
                        <td>Alfred V. Aho </td>
                     <td><img src="image/book/014.jpg"></td>
                    </tr>
            <tr>
                     <td>15</td>
                     <td>The STREAM TONE: The Future of Personal Computing.</td>
                        <td>T. Gilling (Goodreads Author)</td>
            
                     <td><img src="image/book/015.jpg"></td>
                    </tr>
            <tr>
                     <td>16</td>
                     <td>Fundamental Kotlin</td>
                        <td>Milos Vasic (Goodreads Author)</td>
                    
                     <td><img src="image/book/016.jpg"></td>
                    </tr>
            <tr>
                     <td>17</td>
                     <td>An Introduction to Functional Programming Through Lambda Calculus</td>
                        <td>Greg Michaelson</td>
                     <td><img src="image/book/017.jpg"></td>
                    </tr>
            <tr>
                     <td>18</td>
                     <td>The Algorithm Design Manual</td>
                        <td>Steven S. Skiena (Goodreads Author)</td>
                       
                     <td><img src="image/book/018.jpg"></td>
                    </tr>
            <tr>
                     <td>19</td>
                     <td>The Psychology of Computer Programming</td>
                        <td>Gerald M. Weinberg (Goodreads Author)</td>
        
                     <td><img src="image/book/019.jpg"></td>
                    </tr>
            <tr>
                     <td>20</td>
                     <td>Applied Cryptography: Protocols, Algorithms, and Source Code in C</td>
                        <td>Bruce Schneier </td>
            
                     <td><img src="image/book/020.jpg"></td>
                    </tr>
            <tr>
                     <td>21</td>
                     <td>Hacker's Delight</td>
                        <td>Henry S. Warren Jr</td>
                     
                     <td><img src="image/book/021.jpg"></td>
                    </tr>
            
            <tr>
                     <td>22</td>
                     <td>Database System Concepts</td>
                        <td>Abraham Silberschatz</td>
                        
                     <td><img src="image/book/022.jpg"></td>
                    </tr>
            <tr>
                     <td>23</td>
                     <td>Computer Systems: A Programmer's Perspective</td>
                        <td>Randal E. Bryant</td>
                     
                     <td><img src="image/book/023.jpg"></td>
                    </tr>
            <tr>
                     <td>24</td>
                     <td>Programming Pearls</td>
                        <td>Jon L. Bentley</td>
                      
                     <td><img src="image/book/024.jpg"></td>
                    </tr>
                    <tr>
                     <td>25</td>
                     <td>Quality Software Management: Systems Thinking</td>
                        <td>Gerald M. Weinberg (Goodreads Author) </td>
                       
                     <td><img src="image/book/025.jpg"></td>
                    </tr>
            <tr>
                     <td>26</td>
                     <td>Waltzing with Bears: Managing Risk on Software Projects</td>
                        <td>Tom DeMarco (Goodreads Author)</td>
                      
                     <td><img src="image/book/026.jpg"></td>
                    </tr>
            <tr>
                     <td>27</td>
                     <td>The Little Schemer</td>
                        <td>Daniel P. Friedman </td>
                      
                     <td><img src="image/book/027.jpg"></td>
                    </tr>
            <tr>
                     <td>28</td>
                     <td>Pro Git</td>
                        <td>Scott Chacon</td>
                       
                     <td><img src="image/book/028.jpg"></td>
                    </tr>
            <tr>
                     <td>29</td>
                     <td>Reviewing Java</td>
                        <td>Alex Maureau </td>
                       
                     <td><img src="image/book/029.jpg"></td>
                    </tr>
            <tr>
                     <td>30</td>
                     <td>Reviewing C++</td>
                        <td>Alex Maureau </td>
                       
                     <td><img src="image/book/030.jpg"></td>
                    </tr>
            <tr>
                     <td>31</td>
                     <td>Journey through Genius: The Great Theorems of Mathematics</td>
                        <td>William Dunham</td>
                       
                     <td><img src="image/book/031.jpg"></td>
                    </tr>
            <tr>
                     <td>32</td>
                     <td>Sync: The Emerging Science of Spontaneous Order </td>
                        <td>Steven H. Strogatz (Goodreads Author) </td>
                        
                     <td><img src="image/book/032.jpg"></td>
                    </tr>
            <tr>
                     <td>33</td>
                     <td>Engines of Creation: The Coming Era of Nanotechnology</td>
                        <td>K. Eric Drexler</td>
                      
                     <td><img src="image/book/033.jpg"></td>
                    </tr>
            <tr>
                     <td>34</td>
                     <td>The UNIX Programming Environment</td>
                        <td>Brian W. Kernighan</td>
                     
                     <td><img src="image/book/034.jpg"></td>
                    </tr>
            <tr>
                     <td>35</td>
                     <td>Refactoring: Improving the Design of Existing Code</td>
                        <td>Martin Fowler</td>
                    
                     <td><img src="image/book/035.jpg"></td>
                    </tr>
            <tr>
                     <td>36</td>
                     <td>SLambda-Calculus, Combinators and Functional Programming</td>
                        <td>Gyorgy E. Revesz</td>
                    
                     <td><img src="image/book/036.jpg"></td>
                    </tr>
            <tr>
                     <td>37</td>
                     <td>Design and Validation of Computer Protocols</td>
                        <td>Gerard J. Holzmann</td>
                     
                     <td><img src="image/book/037.jpg"></td>
                    </tr>
            <tr>
                     <td>38</td>
                     <td>File Structures: An Object-Oriented Approach with C++ </td>
                        <td>Michael J. Folk</td>
                       
                     <td><img src="image/book/038.jpg"></td>
                    </tr>
            <tr>
                     <td>39</td>
                     <td>C Primer Plus</td>
                        <td>Stephen Prata </td>
                       
                     <td><img src="image/book/039.jpg"></td>
                    </tr>
            <tr>
                     <td>40</td>
                     <td>Algorithm Design</td>
                        <td>Jon Kleinberg</td>

                     <td><img src="image/book/040.jpg"></td>
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