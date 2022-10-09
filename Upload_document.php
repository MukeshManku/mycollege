
<?php include('photo_upload.php'); ?>


<!DOCTYPE html>
<html lang="en-US">
<meta charset="UTF-8">
<head>
	<title>REGISTRATION FORM</title>
    <link rel="icon" href="image/monogram.png">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="student.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="admin.css" type="text/css">
    <link href="css/font-awesome.min.css"rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.cycle.all.js"></script>
     <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
     <link href="js/jquery.mCustomScrollbar.min.css"rel="stylesheet" type="text/css"/>
     
     <script type="text/javascript">
 
       
      function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img')
                        .attr('src', e.target.result);
                };
                
                reader.readAsDataURL(input.files[0]);
            }
        } 
       </script>
         <script type="text/javascript">
 
       
      function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img1')
                        .attr('src', e.target.result);
                };
                
                reader.readAsDataURL(input.files[0]);
            }
        } 
       </script>
       
       
    
	
</head>
    <body>
     <div id="toplogo">
	   <div class="logo">
           <a href="student.php"><img src="image/monogram.png" alt="LOGO" height="150px"></a>
        </div>
        <div class="College_name">
            <h1>RAM LAKHAN SINGH YADAV COLLEGE</h1>
            <h2>JHARKHAND RANCHI 834001</h2>
        </div>
    </div>
<div id="clear"></div>
<!--session-->
   
   <div id="upload_doc">
     <div class="back_button">
       
       
         <a id="back" href="student.php">BACK</a>
     </div>
     <div id="clear"></div>
   <div id="upload_doc_header">
       <h2>Upload Photo & Signature</h2> 
   </div>   
     <form id="uploadfile" action="" method="post" enctype="multipart/form-data">
        <div id="photo_sec">
         <div id="file_p">
        
           <img width="200px" height="200px" id="img" src="image/Admin2.png" />  
       </div>
         <div id="photofile">
           <input type="file" name="file" id="file" onchange="readURL(this);"/>  
           
             
         </div>
         </div>
         <div id="photo_sec">
          <div id="file_s">
             <img src="image/button/signature.png" id="img1" width="250px"  height="100px" />
             
         </div>
         <div id="sinefile">
             <input type="file" name="file1" id="file1" onchange="readURL1(this);" />  
             
         </div>
         </div>
         <div id="clear"></div>
          <div id="upload_submit">
              <input type="submit" name="submit" value="UPLOAD PHOTO & SIGNATURE" /> 
             
         </div>
       
         
     </form>
       
   </div>
    
    
    <div id="clear"></div>
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