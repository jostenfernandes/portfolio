<?php

$con = mysqli_connect('localhost', 'root');

if($con){
  echo "Connection successful";
}else{
  echo "No connection";
}

mysqli_select_db($con, 'portfoliouserdata');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];

$query = " insert into userinfodata (name, email, mobile, message) 
values('$name', '$email', '$mobile', '$message') ";

mysqli_query($con, $query);



?>








