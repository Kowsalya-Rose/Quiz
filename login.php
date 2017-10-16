<?php
include 'dbcon.php';
$conn = OpenCon();
include 'login.html';
$username = $_POST['uname'];
$password = $_POST['pwd']; 

$sql = "SELECT USERNAME FROM quiz.users WHERE USERNAME = '$username' and PASSWORD = '$password'";
$result = mysql_query($sql) or die(mysql_error());
$numrows = mysql_num_rows($result);

if ($numrows > 0) {
    header("Location:startquiz.html");   
} else {
    echo '<dialog open> <center><b>USERNAME OR PASSWORD IS WRONG</b></center></dialog>';
}
CloseCon($conn);
?>