<html>
<title>
Login
</title>
<?php
$con = mysqli_connect("localhost","root","","management");
?>
<script language="javascript">
function check(){
var a=document.form1.username.value;
var b=document.form1.password.value;
if((a==null||a=="")&&(b==null||b=="")){
alert("all fields must be filled") ;
return false;
}

if(a==null||a==""){
alert("Username cannot be blank");
return false;
}
if(b==null||b==""){
alert("Password cannot be blank");
return false;
}
}
</script>

<body>
<center>
<font size=6>
LOGIN SECURELY
<br>
</font>
<form name="form1" onSubmit="return check()" method="post" action="logininsert.php">
Username:
<input type="text" name="username">
<br>
Password:
<input type="password" name="password">
<br>
<br>
<input type="submit" name="submit">
</form>
<a href="registration.php">
Register
</a>
</centet>
</body>

</html>