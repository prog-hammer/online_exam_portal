<html>
<title>
Edit Student
</title>
<?php
$con = mysqli_connect("localhost","root","","management");
$id1=$_REQUEST['id'];
echo $id1;
$query = "SELECT * from  student where id='".$id1."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
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
)


</script>
<body>
<center>
Edit Detalis:
<br>
<br>
<form name="form1" action="editstudentinsert.php" method="post" onSubmit="return check()">
<input type="hidden" name="id" required value="<?php echo $row['id']; ?>">
<br>
Name:
<input type="text" name="name" required value="<?php echo $row['name']; ?>">
<br>
Age:
<input type="text" name="age" required value="<?php echo $row['age']; ?>">
<br>
Stream:
<select name="stream">
<option value="science" <?php if($row['stream']=='science') {?> selected="selected" <? } ?>>Scienece</option>
<option value="EEE" <?php if($row['stream']=='commerce') {?> selected="selected" <? } ?>>Commerce</option>
<option value="ECE" <?php if($row['stream']=='arts') {?> selected="selected" <? } ?>>Arts</option>
</select>

<br>
<input type="submit">
</form>
<br>
<br>
<form name="from2" action="homepage.php">
<input type="submit" value="Homepage">
</form>
</center>
</body>
</html>