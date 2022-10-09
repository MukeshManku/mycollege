<?php
include('dbconnection.php');

	
$results = mysqli_query($conn, "SELECT * FROM time_table");

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$sql = "DELETE FROM time_table WHERE id=$id";
     mysqli_query($conn, $sql);
   
    //header('location: view_add_subject.php');
    
     echo '<script language="javascript">alert("Time Table record Delete Sucessfully !!!")</script>';
        echo '<script language="javascript">window.location = "view_add_subject.php"</script>';
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
   
   
     <div id="record1">
        <h2><a style="color:white;" href="view_add_subject.php">View Subject</a> | <a style="color:white;" href="time_table_admin.php">Add Time Table</a></h2>
        <table>
           <thead>
              <tr>
                  <th>ID</th>
				  <th>COURSE</th>
				  <th>SUBJECT</th>
                  <th>SEMESTER</th>
				  <th>WEEK DAY</th>
                  <th>TIME</th>
                  <th>ACTION</th>
				 
                  
                  
              </tr> 
               
           </thead>
            <tbody>
             <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['course_id'] ?></td>
                    <td><?php echo $row['subject_id'] ?></td>
					<td><?php echo $row['semister'] ?></td>
					<td><?php echo $row['week_day'] ?></td>
					<td><?php echo $row['time'] ?></td>
					
                
				

                       <td><a href="view_add_subject.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a></td>
                    
                   
                </tr>
                <?php    
                }
                ?>
            </tbody>
            
            
            
        </table>
       
        
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
    
    


    </body>
</html>
