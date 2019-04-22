<?php
$con=mysqli_connect("localhost","root","","management");
$id1=$_POST["id"];
$name=$_POST["name"];
$age=$_POST["age"];
$stream=$_POST["stream"];
$query="Update student set name='$name',age='$age',stream='$stream' where id=$id1";
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: viewstudent.php");

?>