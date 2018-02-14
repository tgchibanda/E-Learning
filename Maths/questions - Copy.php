<head>
  
    <title>MindMap</title>
    
    <!-- Bootstrap core CSS     -->
    <link href="stuff/css/bootstrap.min.css" rel="stylesheet" />
	<link href="stuff/css/my_styles.css" rel="stylesheet" />
	
	
    <!--  Material Dashboard CSS    -->
    <link href="stuff/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="stuff/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    
	
</head>





<div class="card">
    <div class="card-header" style="background-color :#193F72;">
        <h4 class="title">Questions </h4>
        <p class="category"><a class="a" id="a">the a</a>Choose one answer.</p>
    </div>
    <div class="card-content">
	<hr>
<?php
$connection = mysqli_connect("localhost","root","","mind")or die(mysqli_error());

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


<div id="qn" class="qn"><?php echo $info['id']; ?></div>
<div id="qnc" class="qnc"></div>

<?php
$i++;
}
?>

</div>	
</div>
<script src = "https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function(){
	
	var a = document.getElementById('A');
	$(a).click(function(event){
        console.log("A Clicked");     
    });
	
	$("#A").click(function(){
		
		$(".qnc").html("A");
		$('.your_choice').hide();
		$.ajax({url: "answer.php?answer=A&question=<?php echo $_REQUEST['question']; ?>", success: function(result){
			console.log(result.length);
            $(".your_choice").html(result);
        }});
	
    });
	
	$("#B").click(function(){
		$(".qnc").html("B");
        $('.your_choice').hide();
		$.ajax({url: "answer.php?answer=B&question=<?php echo $_REQUEST['question']; ?>", success: function(result){
			console.log(result.length);
            $(".your_choice").html(result);
        }});
		
    });
	
	$("#C").click(function(){
		$(".qnc").html("C");
        $('.your_choice').hide();
		$.ajax({url: "answer.php?answer=C&question=<?php echo $_REQUEST['question']; ?>", success: function(result){
			console.log(result);
            $(".your_choice").html(result);
        }});
		
    });
	
	$("#D").click(function(){
		$(".qnc").html("D");
        $('.your_choice').hide();
		$.ajax({url: "answer.php?answer=D&question=<?php echo $_REQUEST['question']; ?>", success: function(result){
			console.log(result);
            $(".your_choice").html(result);
        }});
		
    });
	
	
	$(document).on('click',".checkAnswer",function (e) {
		var r = $('.your_choice').html();
		if(r.length<2){
			$(".your_choice").html("Please select an answer!");
			$(".your_choice").show('slow');
		}
		else {
		
			if(r.length != "35"){
					$('#read_more').show('slow');	
					}
		
	$(".the_answer").show('slow');
	$(".your_choice").show('slow');
	$('.options :input').attr('disabled', true);	
	$(this).addClass('hidden');	
	$('.nextQuestion').removeClass('hidden');
	
		}
	
    });	
	
	$(".nextQuestion").click(function(){
        var qn = document.getElementById("qn").innerHTML;
		var qnc = document.getElementById("qnc").innerHTML;
		var state = document.getElementById("your_choice").innerHTML;
		
		$.ajax({
					type: "GET",
					url: "insert_answer.php",
					data: {
						answer: qnc,
						question: qn,
					},
					success: function(response){
						
					console.log(response);
					}
				});
		
    });
	

	
});
</script>
