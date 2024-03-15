<?php

$connect=mysqli_connect('localhost','root','','book_db');

if (isset($_POST['send'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$package=$_POST['package'];
$duration=$_POST['duration'];

$request="insert into book_form(name,email,phone,address,package,duration	) values ('$name','$email','$phone','$address','$package','$duration')";

mysqli_query($connect,$request);
header('location:submit.html');

}
else {
  echo 'Something Went Wrong Try Again';
}
?>