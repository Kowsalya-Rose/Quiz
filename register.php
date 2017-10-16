<?php
include 'dbcon.php';
$conn = OpenCon();
include 'register.html';
$username = $_POST['uname'];
$no = $_POST['no'];
$npwd = $_POST['npwd']; 
$cpwd = $_POST['cpwd']; 

if ( $npwd == $cpwd ) {
        $Password = $_POST['npwd'];
        $sql = "INSERT INTO quiz.users VALUES ('$username','$Password','$no');";
        if ($conn->query($sql) == TRUE) {
            header("Location:login.html");   
        } 
}
else {
            echo '<dialog open> <center><b>New Password and Confirm Password must be same</b></center></dialog>';
        }
CloseCon($conn);
?>