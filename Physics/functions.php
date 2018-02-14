<?php
date_default_timezone_set('Africa/Harare');

function conn(){
    $conn = mysqli_connect("localhost","root","","mind")or die(mysqli_error());
    return $conn;
}

function unique_key(){
	
	return date('dmyhis');
}

function dateStamp(){
	return date('m/d/Y h:i:s', time());
}
function table_answers($question, $field){
	$qry = mysqli_query(conn(), "SELECT *
FROM `answers`
WHERE
answers.question = '$question' AND
answers.box = '$field'");

return $qry;
	}
?>