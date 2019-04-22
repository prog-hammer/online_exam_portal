<html>
<?php
include_once 'db.php';
$name=$_POST["name"];
$age=$_POST["age"];
$stream=$_POST["stream"];

$query = "Insert into student(name,age,stream) values('$name','$age','$stream')";
		$result = mysqli_query($con,$query) or die(mysqli_error());
if($result){
?>
<script>
alert("Record Added Successfully");
</script>
<?php
}else if(!$result){
echo"Cannot connect to localhost";
}
header("Location: viewstudent.php");
?>
</html>