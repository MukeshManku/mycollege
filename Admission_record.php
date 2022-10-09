<?php
include('dbconnection.php');


	
$results = mysqli_query($conn, "SELECT * FROM addmission_form");

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$sql = "DELETE FROM addmission_form WHERE id='$id'";
     mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn) == 1)
	{
		
        //header("location: Admission_record.php");
        echo '<script language="javascript">alert("Application form record Delete sucessfully..")</script>';
        echo '<script language="javascript">window.location = "Admission_record.php"</script>';
	}
   
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   	<title>College Website</title>
    <link rel="icon" href="image/monogram.png">
     <link rel="stylesheet" href="record.css" type="text/css">
</head>
<body>

 
  <div id="record_admin">
      <a href="Admin.php"><img src="image/Admin2.png" ></a>
  </div> 
  <div id="recordheding">
      <h1><a href="Admin.php">ADMISSION RECORDS</a></h1>
  </div> 
   
    <div id="aj">
    <div id="record">
        <table>
           <thead>
              <tr>
                  <th>ID</th>
                  <th>NAME</th>
				  <th>COURSE</th>
                  <th>SEMESTER</th>
				  <th>DATE OF BIRTH</th>
                  <th>GENDER</th>
				  <th>FATHER NAME</th>
                  <th>MOTHER NAME</th>
				  <th>ADDRESS</th>
                  <th>STATE</th>
				  <th>DISTRICT</th>
                  <th>CITY</th>
				  <th>ZIP CODE</th>
                  <th>MOBILE NO.</th>
				  <th>EMAIL</th>
                  <th>SUBJECT</th>
				   <th>MAX MARKS</th>
				  <th>MARKS</th>
                  <th>PARCENT</th>
				  <th>PLACE</th>
                  <th>ACTION</th>
				  <th>ACTION</th>

                  
                  
              </tr> 
               
           </thead>
            <tbody>
             <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['First_name'] ?> <?php echo $row['Last_name'] ?></td>
                    <td><?php echo $row['Course'] ?></td>
					<td><?php echo $row['Semester'] ?></td>
					<td><?php echo $row['DOB'] ?></td>
					<td><?php echo $row['Gender'] ?></td>
					<td><?php echo $row['Father_name'] ?></td>
					<td><?php echo $row['Mother_Name'] ?></td>
					<td><?php echo $row['Address'] ?></td>
					<td><?php echo $row['State'] ?></td>
					<td><?php echo $row['District'] ?></td>
					<td><?php echo $row['City'] ?></td>
					<td><?php echo $row['Zip_Code'] ?></td>
					<td><?php echo $row['Mobile_Number'] ?></td>
					<td><?php echo $row['Email'] ?></td>
					<td><?php echo $row['Subject'] ?></td>
					<td><?php echo $row['Maximum_Marks'] ?></td>
					<td><?php echo $row['Marks_obtained'] ?></td>
					<td><?php echo $row['Percent'] ?></td>
					<td><?php echo $row['Place'] ?></td>
                
				    <td><a href="addmission_record_show.php?edit=<?php echo $row['id']; ?>" class="edit_btn">Edit</a></td>

                       <td><a href="Admission_record.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a></td>
                    
                   
                </tr>
                <?php    
                }
                ?>
            </tbody>
            
            
            
        </table>
       
        
    </div>
     
    </div>   
</body>
</html>