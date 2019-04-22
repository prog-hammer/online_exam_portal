<?php
$con=mysqli_connect("localhost","root","","management");
?>
<html>
<head>
<title>
Result
</title>
</head>

<?php
$no=0;
$nooq=0;
session_start();
$username= $_SESSION["username"];
echo "Name:";
echo $username;
?>

<body>
<table width="30%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>Question NO</strong></th><th><strong>Result</strong></th></tr>
</thead>
<?php
$query1="Select* from answers where username='$username';";
$result1 = mysqli_query($con,$query1);
while($row1 = mysqli_fetch_assoc($result1)) {
$attempt=$row1["attempt"];
$answer=$row1["ans"];
if($attempt==$answer){
$no=$no+1;
$nooq=$nooq+1;
$sign="true";
}
else if($attempt!=$answer){
$sign="false";
}
?>
<tbody>
<tr><td align="center"><?php echo "Question"; echo $row1["qid"]; ?></td>
<td align="center"
<?php if($sign=="true"){?> style="background:no-repeat center url(right.jpg);"<?php }
else if($sign=="false"){?> style="background:no-repeat center url(wrong.jpg);"<?php }?>>	
</td></tr>
</tbody>
<?php 
} 
?>

</table>
<?php
$query="select count(*) as total from answers";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
$total=$row["total"];
echo "Your result";
echo $no;
echo "(Out Of".$total.")";
?>
<br>
<?php
echo "No. of questions correct:";
echo $nooq;	
?>
<form name="from2" action="">
<input type="button" name="logout" value="LOGOUT">
</form>
<hr>
</body>
</html>