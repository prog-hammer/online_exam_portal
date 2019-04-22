lo<html>
<?php
$con = mysqli_connect("localhost","root","","management");
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$username=$_POST["username"];
$pass1=$_POST["password1"];

$query = "SELECT * FROM `users` WHERE username='$username'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==0){


$sql = "INSERT INTO users (username,password) VALUES ('$username','$pass1')";
if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
	?>
	<a href="login.php">
	Login to proceed...
	</a>
	<?php
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
}
else if($rows==1){
echo"Username already exists";
?>
<a href="registration.php">
Back to registration...
</a>
<?php
}
mysqli_close($con);
?>
</html>


