<?php




$connect = mysqli_connect("localhost","root","","Mahadev_database")
or die (mysqli_error($connect));
if($connect)
echo"databse connected";
else
echo"error";
?>