<?php
$host	="localhost";
$user	="root";
$password="";
$database="qurban";
$connect= mysqli_connect($host,$user,$password,$database);

$login1=mysqli_query($connect,"SELECT * FROM user");
$login2=mysqli_query($connect,"SELECT * FROM user where user_id=30");

$user=mysqli_num_rows($login1);
$user2=mysqli_fetch_array($login2);
$usernya=$user2['email'];
?>
