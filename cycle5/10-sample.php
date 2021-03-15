
<html>
<head></head>
<body>
<div align="center">
<h2 style="text-align:center"><u>Insert Data</u></h2>
<form method="post" action="10-sample.php" >
Name:<input type="text" name="name">
<input type="submit" value="submit" name=submit>
</div>
<div align="center">
<form method="post" action="10-sample.php">
<h2 style="text-align:center"><u>Update Data</u></h2>
Searching ID:<input type="text" name="search_id" >
<input type="submit" name="search" value="Search">
<input type="submit" name="view" value="view">
</form>
</div>
<?php
$con=mysqli_connect("localhost","20mca023","2474","20mca023");
if(isset($_POST["submit"]))
{
if($con)
{
echo $name=$_POST["name"];

$qry="INSERT INTO student_name(name) VALUES ('$name')";

if(mysqli_query($con, $qry))
{
echo "Data inserted successfully<br>";
}
}
}
if(isset($_POST["search"]))
{
$id=$_POST["search_id"];
$qry="select*from student_name where id='$id'";
$data=mysqli_query($con, $qry);

?>
<h2 style="text-align:center"><u>Student Details</u></h2>
<table align="center" border="1">
<tr>
<th>ID</th>
<th>Name</th>
</tr>
<?php
$res=mysqli_fetch_array($data);
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['name'];?></td>
<td><a href="10-sample_update.php?id=<?php echo $res['id'];?>">update</a></td>
<td><a href="10-sample_delete.php?id=<?php echo $res['id'];?>">Delete</a></td>
</tr>
</table>
<?php
}
if(isset($_POST["view"]))
{
$qry="select*from student_name";
$data=mysqli_query($con, $qry);
?>
<h2 style="text-align:center"><u>Student Details</u></h2>
<table align="center" border="1">
<tr>
<th>ID</th>
<th>Name</th>
</tr>
<?php
while($res=mysqli_fetch_array($data))
{
?>
<tr>
<td><?php echo $res['id'];?></td>
<td><?php echo $res['name'];?></td>
</tr>

<?php
}
}
?>
</table>
</body>
</html>


