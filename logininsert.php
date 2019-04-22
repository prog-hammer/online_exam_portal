lo<html>
<?php
$con = mysqli_connect("localhost","root","","management");

$username=$_POST["username"];
$password=$_POST["password"];

$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
		$result = mysqli_query($con,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
		session_start();
		$_SESSION["uid"]= $uid;
		$_SESSION["username"] = $username;
		header("Location: homepage.php");
		?>
		<script language="javascript">
		alert("Login Succesfull");
		</script>
<?php
}
else if($rows!=1){
?>
<script language="javascript">
alert("User not found");
</script>
<?php
header("Location: login.php");
}

?>
</html>