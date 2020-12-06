<?php
session_start();

$con= mysqli_connect('localhost','root');
if($con){
    echo'Connection Successful';
}
else{
    echo"Connection Unsuccessful";
}

mysqli_select_db($con,'users');

$name= $_POST['usesr'];
$pass= $_POST['password'];

$q = "select * from signup where email = '$name' && password='$pass'";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num==1){
    header('location:index2.html');
}

else{    
    header('location:signup.html');
}

?>
