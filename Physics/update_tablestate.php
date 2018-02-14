<?php
error_reporting(0);
include "functions.php";
session_start();

mysqli_query(conn(), "update questions set answered='1' where id='".$_REQUEST['question']."'");

echo "Done";

?>