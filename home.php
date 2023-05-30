<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

    
if (isset($_POST['Submit'])) {
    echo $name.'  '.$email.'  '.$phone.'  '.$message;
}
?>

