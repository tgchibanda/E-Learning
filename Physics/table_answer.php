
<?php
include "functions.php";
session_start();
$query = mysqli_query(conn(), "SELECT
questions.question,
answers.`option`,
answers.answer,
answers.state
FROM
questions ,
answers
WHERE
questions.id = answers.question AND
answers.`option` = '".$_POST['answer']."' AND 
answers.`box` = '".$_POST['field']."' AND 
questions.id = '".$_POST['question']."'");
$w = mysqli_fetch_array($query);

if($w['state']=="Correct"){
	echo "<font color='green'>".$w['answer']." <i class='fa fa-check'></i></font>";
}
else {
echo "<font color='red'>".$w['answer']." <i class='fa fa-times-circle'></i></font>";
}	



mysqli_query(conn(), "update questions set answered='1' where id='".$_POST['question']."'");
$qry = mysqli_query(conn(), "select * from answers where `question`='$_POST[question]' and answers.`option`='$_POST[answer]' and `box`='$_POST[field]'");
$data = mysqli_fetch_array($qry);
$valid=$data['state'];
mysqli_query(conn(), "insert into submited (question, answer, state, validity) values ('$_POST[question]','$_POST[answer]', '$_SESSION[session]', '$valid')")or die(mysqli_error(conn()));

?>