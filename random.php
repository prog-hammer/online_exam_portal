<html>
<title>
Questions
</title>


<body>


<?php
$count=1;
$con=mysqli_connect("localhost","root","","management");
$query = "SELECT * from records order by rand() limit 10;";
$result=mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<form name="form1" action="" method="post">
Question <?php echo $count;?>
<br>
<input type="text" nsme="question" required value="<?php echo $row['question']; ?>" disabled="disabled">
<br>
<input type="radio" name="opt1"><?php echo $row['opt1']; ?>
<br>
<input type="radio" name="opt2"><?php echo $row['opt2']; ?>
<br>
<hr>
<hr>
</form>
<?php $count++; }?>


<?php
/* Check user answer
if (isset($_POST['submit'])) {   
    $selected_radio = $_POST['response'];

    if ($selected_radio == $correct)
        echo "THAT ANSWER IS CORRECT";
    else
        echo "THAT ANSWER IS WRONG!";
}
*/
?>
</body>
</html>