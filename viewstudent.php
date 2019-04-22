<?php
$con=mysqli_connect("localhost","root","","management");
?>
<html>
<title>
View Records
</title>
<body>
<center>
<h2>View Records</h2>
<table width="70%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>S.No</strong></th><th><strong>Name</strong></th><th><strong>Age</strong></th><th><strong>Stream</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from student;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["name"]; ?></td><td align="center"><?php echo $row["age"]; ?></td>
<td align="center"><?php echo $row["stream"]; ?></td><td align="center"><a href="editstudent.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="deletestudent.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

<form name="f1" action="homepage.php">
<input type="submit" value="Homepage">
</form>
<form name="f2" action="login.php">
<input type="submit" value="Logout">
</form>
</center>
</body>
</html>