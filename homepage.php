<html>
<head>
<title>
Dashboard
</title>
</head>
<script language="javascript">

</script>

<body>
<center>
<font size=6>
Welcome!<?php
session_start();
echo $_SESSION["uid"];	
 echo $_SESSION["username"];
?>
<br>
</font>
<font size=4>
<a href="addstudent.php">
Add Student
</a>

<br>
<a href="viewstudent.php">
View Students
</a>
<br>
<a href="testcheck.php">
Test
</a>
<br>
<form name="logout" action="login.php">
<input type="submit" value="Log Out">
</form>
</font>
</center>
</body>
</html>