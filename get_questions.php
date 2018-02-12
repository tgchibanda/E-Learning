<?php
session_start();

?>
<div class="card">

    <div class="card-header" style="background-color :#193F72;">
        <h4 class="title">Answer Questions Below</h4>
        <p class="category"><a class="a" id="a">the a</a>Choose one answer.</p>
    </div>
    <div class="card-content">
	<hr>
<?php
$connection = mysqli_connect("http://www.cpstechnologies.co.za","c1cps_admin","xTe-p{;l7{5wdy)","c1scibono")or die(mysqli_error());

$query = mysqli_query($connection, "select *
from questions
WHERE
questions.answered = 0
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
}

?>


<div id="qn" class="qn" hidden><?php echo $info['id']; ?></div>
<div id="qnc" class="qnc" hidden></div>

<?php
$i++;
}

if(mysqli_num_rows($query)==0){
	
	$qw= mysqli_query($connection, "SELECT
submited.id,
submited.question,
submited.answer,
submited.state,
questions.question,
answers.answer,
answers.`option`
FROM
submited ,
questions ,
answers
WHERE
submited.state = '$_SESSION[session]' AND
submited.question = questions.id AND
answers.question = questions.id AND
answers.state = 'Correct' AND
submited.answer = answers.`option`");

$correct= mysqli_num_rows($qw);
	
	$rw = mysqli_query($connection, "SELECT
submited.id,
submited.question,
submited.answer,
submited.state,
questions.question,
answers.answer,
answers.`option`
FROM
submited ,
questions ,
answers
WHERE
submited.state = '$_SESSION[session]' AND
submited.question = questions.id AND
answers.question = questions.id AND
answers.state = 'Correct' AND
submited.answer NOT LIKE answers.`option`");

$wrong= mysqli_num_rows($rw);
$total = $correct + $wrong;
	echo "You got: ".$correct." out of ".$total.".<hr>";
	echo "Wrong answer(s): ".$wrong.".<hr>";
}
?>

</div>	
</div>
