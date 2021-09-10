<?php
$connect = mysqli_connect("localhost","root","","mahadev_database")
or die (mysqli_error($connect));
if($connect)
echo"databse connected";
else
echo"error";
?>