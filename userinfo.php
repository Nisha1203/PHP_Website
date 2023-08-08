<?php

$con = mysqli_connect('localhost','root');//username = root

if($con)
{
    echo " Connection succesful";
}
else
{
    echo "connection failed";
}

mysqli_select_db($con, 'userdata'); //(connection_string, databaseName, )

$user = $_POST['user'];//we will get the value entered by user
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into userinfo (user,email,mobile,comment)
values ('$user','$email','$mobile','$comment')";

mysqli_query($con,$query);//to execute query

header('location:index.php');//for our php to stay at the same place
?>

