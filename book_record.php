<?php
include('dbconnection.php');





	// initialize variables
	
$results = mysqli_query($conn, "SELECT * FROM book_form");

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$sql = "DELETE FROM book_form WHERE id=$id";
     mysqli_query($conn, $sql);

     //header('location: book_record.php');
    
     echo '<script language="javascript">alert("Book issue form record Delete sucessfully..")</script>';
        echo '<script language="javascript">window.location = "book_record.php"</script>';
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
      <h1><a href="Admin.php">BOOK ISSUE RECORDS</a></h1>
  </div> 
   
    <div id="aj">
    <div id="record">
        <table>
           <thead>
              <tr>
                  
                  
                  <th>ID</th>
                  <th>NAME</th>
                  <th>BOOK NAME</th>
				  <th>AUTHORS NAME</th>
                  <th>ISSUE DATE</th>
                  <th>LAST DATE</th>
				  <th>DATE OF BIRTH</th>
                  <th>GENDER</th>
                  <th>FATHER NAME</th>
                  <th>ROLL NO.</th>
                  <th>COURSE</th>
                  <th>SEMESTER</th>
				  <th>ADDRESS</th>
                  <th>STATE</th>
				  <th>DISTRICT</th>
                  <th>CITY</th>
				  <th>ZIP CODE</th>
                  <th>MOBILE NO.</th>
				  <th>EMAIL</th>
				  <th>COUNTRY</th>
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
                     <td><?php echo $row['Book_name'] ?></td>
					<td><?php echo $row['Authors_name'] ?></td>
					<td><?php echo $row['Issue_Date'] ?></td>
					<td><?php echo $row['Last_Date'] ?></td>
					<td><?php echo $row['DOB'] ?></td>
					<td><?php echo $row['Gender'] ?></td>
					<td><?php echo $row['Fathername'] ?></td>
					<td><?php echo $row['Roll_no'] ?></td>
					<td><?php echo $row['Course'] ?></td>
					<td><?php echo $row['Semester'] ?></td>
					<td><?php echo $row['Address'] ?></td>
					<td><?php echo $row['State'] ?></td>
					<td><?php echo $row['District'] ?></td>
					<td><?php echo $row['City'] ?></td>
					<td><?php echo $row['Zip_Code'] ?></td>
					<td><?php echo $row['Mobile_Number'] ?></td>
					<td><?php echo $row['Email'] ?></td>
					<td><?php echo $row['Country'] ?></td>
					<td><?php echo $row['Place'] ?></td>
                
				    <td><a href="book_record_edit.php?edit=<?php echo $row['id']; ?>" class="edit_btn">Edit</a></td>

                       <td><a href="book_record.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a></td>
                    
                   
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