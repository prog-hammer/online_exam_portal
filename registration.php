<html>
<head>
<title>
Registration
</title>
</head>
<script language="javascript">
function check(){
var a=document.forms["form1"]["username"].value;
var b=document.forms["form1"]["password1"].value;
var c=document.forms["form1"]["password2"].value;

if((a==null||a=="")&&(b==null||b=="")&&(c==null||c==""))
{
alert("all fields must be filled") ;
return false;
}
if(a==null||a==""){
alert("Username should be unique and must be filled") ;
return false;
}
if(b==null||b==""){
alert("password required") ;
return false;
}
if(c==null||c==""){
alert("password required") ;
return false;
}
if(b!=c){
alert("Password does not match");
return false;
}
}
</script>

<body>
</center>
<font size=8>
Registration
</font>
<form name="form1" action="insert.php" method="post" onSubmit="return check()">
Username:
<input type="text" name="username">
<br>
Password:
<input type="password" name="password1">
<br>
Re-enter Password:
<input type="password" name="password2">
<br>
<br>
<input type="submit" name="submit">
</form>

</body>
</html>