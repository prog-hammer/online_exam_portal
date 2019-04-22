<html>
<?php
$con=mysqli_connect("localhost","root","","management");
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<body>
<?php			


				$final=false;
				$review="no";
				session_start();
			    $username = $_SESSION["username"];
				echo $username;

				$query1= "SELECT * FROM UQUESTIONS where username='$username' order by qid desc;";
				$result1=mysqli_query($con,$query1);
				$row1 = mysqli_fetch_row($result1);
				$qid= $row1[1];
	$query="Select*from records where id='$qid';";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_array($result);
					
				$qid=$row['id'];
				$ans=$row['answer'];
if(isset($_REQUEST['save'])){
if(isset($_POST['opt'])){
$attempt= $_POST['opt'];
}
else{
$attempt="blank";
}
$query4="Insert into answers values('$username','$qid','$ans','$attempt','$review');";
mysqli_query($con,$query4);
}
else if(isset($_REQUEST['review'])){
if(isset($_POST['opt'])){
$attempt= $_POST['opt'];
}
else{
$attempt="blank";
}
$review="yes";
$query4="Insert into answers values('$username','$qid','$ans','$attempt','$review');";
mysqli_query($con,$query4);
}
else if(isset($_REQUEST['viewsummary'])||isset($_REQUEST['skip'])){
$review="yes";
if(isset($_POST['opt'])){
$attempt= $_POST['opt'];
}
else{
$attempt="blank";
$review="blank";
}
$query4="Insert into answers values('$username','$qid','$ans','$attempt','$review');";
mysqli_query($con,$query4);
}
				
				
				
				$id=$qid+1;
				
				$query="select count(*) from records";
				$result=mysqli_query($con,$query);
				$row=mysqli_fetch_row($result);
				$count=$row[0];
				$gid=$qid+1;
				if($gid==$count){
				$final=true;
				}
				if($qid==$count){
				header("Location: summary.php");
				}
				
				
                $query2 = "SELECT * from records where id='$id';";
				$result2=mysqli_query($con,$query2);
                $row2=mysqli_fetch_array($result2);
				
				$qid=$row2['id'];
				$ans=$row2['answer'];
								
				
				$query3="insert into uquestions values('$username','$qid');";
				mysqli_query($con, $query3);
				
				
				
?>



<form onSubmit="return continue()" name="form1" action="questions.php"  method="post">
Question:
<br>
<textarea disabled="disabled" cols="100" rows="5">
<?php echo $row2['question']; ?>
</textarea>
<br>
<input type="radio" name="opt" value="a"><?php echo $row2['opt1']; ?>
<br>
<input type="radio" name="opt" value="b"><?php echo $row2['opt2']; ?>
<br>
<input type="submit" name="save" value="Submit">
<input type="submit" name="review" onClick="review" value="Review"/>
<input type="submit" name="<?php if($final==true){ echo "viewsummary" ;}else{ echo "skip";} ?>" value="<?php if($final==true){ echo "View Summary" ;}else{ echo "Skip";} ?>"/>
<br>

<hr>
<hr>
</form>

</body>
</html>