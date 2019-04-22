<html>
<?php
$con=mysqli_connect("localhost","root","","management");
session_start();
$username = $_SESSION["username"];

?>
<head>
<title>
Summary
</title>
</head>
<body>
<form name="heading">
<input type="button" style="background-color:#00FF00" width="">
Not Left for REVIEW
<br>
<input type="button" style="background-color:#FFFF00">
Left Empty
<br>
<input type="button" style="background-color:#FF0000">
Left For Review
<br>
<hr>
</form>
<table width="70%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>Question NO</strong></th><th><strong>Attempt</strong></th><th><strong>Review</strong></th><th><strong>Change</strong></th></tr>
</thead>
<tbody>

<?php
$count=1;
$query2="select*from answers where username='$username';";
$result2 = mysqli_query($con,$query2);
while($row2 = mysqli_fetch_assoc($result2)) { 
$review= $row2["review"];
if($review=="blank"||$review==null){
$review="blank";
}
else if($review=="yes"){
$review="yes";
}
else if($review=="no"){
$review="no";
}
?>
<tr><td align="center"><?php echo "Question"; echo $row2["qid"]; ?></td><td align="center"><?php echo $row2["attempt"]; ?></td>
<td align="center"
<?php if($review=="no"){?> style="background-color:#00FF00;"<?php }
else if($review=="yes"){?> style="background-color:#FF0000;"<?php }
else if($review=="blank"){?> style="background-color:#FFFF00;"<?php } ?>>
</td>
<td align="center"><a href="reviewquestions.php?id=<?php echo $row2["qid"]; ?>"><img src="edit.jpg"></a></td></tr>
<?php 
$count++; 
} 
?>
</tbody>
</table>
<form name="form1" action="result.php"  method="post">
<input type="submit" name="result" value="Result" onClick="return confirm('do you really want to go to result page once you press ok you can not come back?');">

</form>
</body>
<html>