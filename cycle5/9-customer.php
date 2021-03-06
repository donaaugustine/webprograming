<?php
$servername = "localhost";
$username = "20mca023";
$password = "2474";
$dbname = "20mca023";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT c_no,c_name,item_purchased,mob_no FROM customer";
$result = mysqli_query($conn, $sql);

echo "<table border=1>
<tr>
<th>C_NO</th>
<th>C_Name</th>
<th>Item_Purchased</th>
<th>Mob_No</th>
</tr>";

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
 

echo "<tr>";
echo "<td>".$row['c_no']."</td>";
echo "<td>".$row['c_name']."</td>";
echo "<td>".$row['item_purchased']."</td>";
echo "<td>".$row['mob_no']."</td>";
echo "</tr>";

  }
echo "</table>";
} else {
  echo "No records in the table";
}

mysqli_close($conn);
?>