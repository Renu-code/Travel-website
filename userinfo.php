<?php

$con = mysqli_connect('localhost','root','mysqlUsernamePassword');

if($con){
    echo "Connection successful";
}
else
{
    echo "No connection";
}
mysqli_select_db($con, 'register');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$comments = $_POST['comments'];


$query = "insert into registerationform(name,email,password,gender,comments) values($name,$email,$password,$gender,$comments)";
echo $query;

mysqli_query($con,$query);


?>