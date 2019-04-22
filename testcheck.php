<html>
<?php
session_start();
$username= $_SESSION["username"];
if($username=="admin"){
header("Location: testmainpage.html");
}
else if($username!="admin"){
header("Location: testmainpage.html");
}
?>
</html>