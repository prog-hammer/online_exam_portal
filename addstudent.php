<html>
<title>
Add Student
</title>
<script language="javascript">
function check(){
var a=document.form1.name.value;
var b=document.form1.age.value;
var c=document.form1.stream.value;
if((a==""||a==null)&&(b==""||b==null)&&(c==null||c=="")){
alert("All fields must be filled");
return false;
}
if(a==null||a==""){
alert("Name cannot be blank");
return false;
}
if(b==null||b==""){
alert("Age cannot be blank");
return false;
}
if(c==null||c==""){
alert("Please choose a stream");
return false;
}
}


</script>
<body>
<center>
<font size=8>
Add a Student here..
</font>
<form name="form1" action="addinsert.php" method="post" onSubmit="return check()">
<br>
Name:
<input type="text" name="name">
<br>
Age:
<input type="text" name="age">
<br>
Stream:
<select name="stream">
<option value="">Choose</option>
<option value="Science">Science</option>
<option value="Commerce">Commerce</option>
<option value="Arts">Arts</option>
</select>
<br>
<input type="submit" name="submit">
</form>
<form name="form2" action="homepage.php">
<input type="submit" value="Back">
</form>
</center>
</body>
</html>