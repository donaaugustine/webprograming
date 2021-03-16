<html>
<head>
<style>
.error {color: red ;}
body {
   background-color : lightblue;
}
</style>
</head>

<title<STUDENT REGISTRATION with validation</title>
<body>

<?php
$id=$name=$branch=$mark="";
if(isset($_POST["submit"]))
{

if(empty($_POST["name"]))
{
 $nameerror="name field required !";
}
else
{
 $name=$_POST["name"];
}

if(empty($_POST["branch"]))
{
 $brancherror="branch required !";
}
else
{
 $branch=$_POST["branch"];
}

if(empty($_POST["mark"]))
{
 $markerror="enter your mark !";
}
elseif($_POST["mark"]>500)
{ 
 $markerror1="enter a mark under 500 !";
}
else
{
 $mark=$_POST["mark"];
}

}
?>

<form method="POST" action="11-validation.php" >
<h1 style="text-align:center"><u>STUDENT REGISTRATION</u></h1>

<table align="center" border="1">

<tr>
	<td>STUDENT NAME : </td>

	<td><input type="text" name="name"><span class="error">*<?php echo $nameerror; ?></span></td>
</tr>
<tr>
	<td>BRANCH : </td>

	<td><input type="text" name="branch"><span class="error">*<?php echo $brancherror; ?></span></td>
</tr>
<tr>
	<td>MARKS : </td>

	<td><input type="text" name="mark"><span class="error">*<?php echo $markerror;echo $markerror1; ?></span></td>
</tr>
<tr>
	<td colspan="2" style="text-align:center"><input type="submit" value="submit" name="submit">
</td>
</tr>
</table>
</form>


</body>
</html>