<html>
<title>
Test heading
</title>
<body bgcolor="#CCCCCC">

<font color="black" size="8">
<center>
Welcome
<strong>
<?php
session_start();
 echo $_SESSION["username"];
?>
</strong>
To Online Exam Portal
</center>	
</font>
</body>


</html>
