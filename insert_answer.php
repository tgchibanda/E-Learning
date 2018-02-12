<?php
error_reporting(0);
session_start();
$connection = mysqli_connect("http://www.cpstechnologies.co.za","c1cps_admin","xTe-p{;l7{5wdy)","c1scibono")or die(mysqli_error());

mysqli_query($connection, "update questions set answered='1' where id='".$_REQUEST['question']."'");
mysqli_query($connection, "insert into submited (question, answer, state) values ('$_REQUEST[question]','$_REQUEST[answer]', '$_SESSION[session]')")or die(mysqli_error($connection));

echo "Done";

?>