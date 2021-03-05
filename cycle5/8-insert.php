<html>
<head>
<title>insert page</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "20mca023";
$password = "2474";
$dbname = "20mca023";
$conn = mysqli_connect($servername ,$username ,$password ,$dbname);
if(!$conn)
{
 die("Connection failed:" . mysqli_connect_error());
}

 $name = $_REQUEST['name'];
 $rollno = $_REQUEST['rollno'];
 $gender =$_REQUEST['gender'];
 $address = $_REQUEST['address'];

 $sql = "INSERT INTO student_reg(name,rollno,gender,address)  VALUES ('$name',  
            '$rollno','$gender','$address')";
 
 if(mysqli_query($conn, $sql))
 { 
   $select = "SELECT id, name, rollno, gender, address FROM student_reg";
   $result = mysqli_query($conn, $select);

   echo "<table border=1>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>RollNo</th>
    <th>Gender</th>
    <th>Address</th>
    </tr>";

  if (mysqli_num_rows($result) > 0) 
  {
   while($row = mysqli_fetch_assoc($result)) 
   {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['rollno']."</td>";
    echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "</tr>";
   }
   echo "</table>";
  } 
  else 
  {
   echo "No records in the table";
  }
 } 
 else
 { 
   echo "ERROR: Sorry $sql. " . mysqli_error($conn); 
  } 
          
mysqli_close($conn); 
?> 
  
</body> 
</html> 