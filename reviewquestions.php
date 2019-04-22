<html>
<?php
$con=mysqli_connect("localhost","root","","management");
?>
<title>
Review Questions
</title>
<?php
$id=$_REQUEST['id'];
echo $id;
session_start();
$username=$_SESSION["username"];
$review="no";

                $query2 = "SELECT * from records where id='$id';";
				$result2=mysqli_query($con,$query2);
                $row2=mysqli_fetch_array($result2);
				
?>
<?
if(isset($_REQUEST['summary'])){
if(isset($_POST['opt'])){
$attempt= $_POST['opt'];
$query="Update answers set attempt='$attempt' , review='$review' where qid='$id'";
mysqli_query($con,$query) or die ( mysqli_error());
header("Location: summary.php");
}
else{
$attempt="blank";
$review="blank";
$query="Update answers set attempt='$attempt' , review='$review' where qid='$id'";
mysqli_query($con,$query);
header("Location: summary.php");
}
}
?>
<body>
<form name="form1" method="post">
Question:
<br>
<input type="text" nsme="question" required value="<?php echo $row2['question']; ?>" disabled="disabled">
<br>
<input type="radio" name="opt" value="a"><?php echo $row2['opt1']; ?>
<br>
<input type="radio" name="opt" value="b"><?php echo $row2['opt2']; ?>
<br>
<input type="submit" name="summary" value="Back To Summary">
<hr>
<hr>
</form>


</body>
</html>