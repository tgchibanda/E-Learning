<?php
include "functions.php";
session_start();

?>
<div class="card">

    <div class="card-header" style="background-color :#193F72;">
        <h4 class="title">Answer Questions Below</h4>
        <p class="category">Choose one answer.</p>
    </div>
    <div class="card-content">
	<hr>
<?php

$query = mysqli_query(conn(), "select *
from questions
WHERE
questions.answered = 0 and 
subject = '$_POST[subject]' and 
chapter = '$_POST[chapter]'
ORDER BY
questions.id ASC
LIMIT 1");

while($info = mysqli_fetch_array($query)){
$i = 1;

		if($info['shape_link'] == 1){
		include 'shape_question.php';
}		else if($info['shape_link'] == 0){
		include 'normal_question.php';
}		else if($info['shape_link'] == 2){
		include 'shape_answers.php';
}		else if($info['shape_link'] == 3){
			include 'table_question.php';
}

?>


<div id="qn" class="qn" hidden><?php echo $info['id']; ?></div>
<div id="qnc" class="qnc" hidden></div>

<?php
$i++;
}

if(mysqli_num_rows($query)==0){
	
	$qw= mysqli_query(conn(), "SELECT
submited.id,
submited.question,
submited.answer,
submited.state,
questions.question
FROM
submited ,
questions 
WHERE
mind.submited.state = '$_SESSION[session]' AND
mind.submited.question = mind.questions.id AND
submited.validity = 'Correct'");

$correct= mysqli_num_rows($qw);
	
	$rw = mysqli_query(conn(), "SELECT
submited.id,
submited.question,
submited.answer,
submited.state,
questions.question
FROM
submited ,
questions 
WHERE
mind.submited.state = '$_SESSION[session]' AND
mind.submited.question = mind.questions.id AND
submited.validity = 'Wrong'");

$wrong= mysqli_num_rows($rw);
$total = $correct + $wrong;
	echo "You got: ".$correct." out of ".$total.".<hr>";
	echo "Wrong answer(s): ".$wrong.".<hr>";
}
?>

</div>	
</div>
