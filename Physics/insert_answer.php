<?php
error_reporting(0);
include "functions.php";
session_start();

mysqli_query(conn(), "update questions set answered='1' where id='".$_REQUEST['question']."'");
$qry = mysqli_query(conn(), "select * from answers where `question`='$_REQUEST[question]' and answers.`option`='$_REQUEST[answer]'");

$data = mysqli_fetch_array($qry);
$valid = $data['state'];
mysqli_query(conn(), "insert into submited (question, answer, state, validity) values ('$_REQUEST[question]','$_REQUEST[answer]', '$_SESSION[session]', '$valid')")or die(mysqli_error(conn()));

echo "Done";

?>