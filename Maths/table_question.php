<style>
.table td {
   text-align: center;
   width: 14.1%;   
}
.table th {
   text-align: center;   
   width: 14.1%;
}
tr td .edit {
	display:none;
}
tr td.edit .edit{
	display:initial;
}
tr  td.edit .noedit {
	display:none;
}
</style>
<?php $question_number = $info['id']; ?>
    
    <div class="card-content">
	

		<div class="row">
			<div class="col-md-12">
				<?php echo "Question. "; echo $info['question']."<hr>"; ?>			
			</div>
		</div>


		<div class="tab-pane">
                <table class="table table-bordered">
				<input type="hidden" name="question_number" id="question_number" value="<?php echo $question_number; ?>">
					<thead class="text-primary" id="table_rangu">
						<th bgcolor="#cccccc">Number Of Liters</th>
						<th>1</th>
						<th>5</th>
						<th>8</th>
						<th>10</th>
						<th>120</th>
						<th>175</th>
					</thead>
						
					<template id="table-data">
					<tr data-id="{{id}}">
						<td bgcolor="#cccccc">Price <br>in<br> Rands</td>
						<td>{{field_1}}</td>

						<td id="table_data_2" class="editF2" bgcolor="#eeeeee">
						
						<span class="noedit" id="field2Result"><i class="fa fa-question-circle"></i></span>
						<select class="edit field2" id="field2">
                        <?php
                         $qry = table_answers($question_number, 'field_2');
						 while($in = mysqli_fetch_array($qry)){
						?>
                        <option value="<?php echo $in['option']; ?>"><?php echo $in['answer']; ?></option>
                        <?php
						 }
						 ?>
                         </select><br>
						<button class="btn btn-success btn-xs edit saveF2"><i class="fa fa-paper-plane"></i></button>
						</td>

						<td id="table_data_3" class="editF3" bgcolor="#eeeeee">
						
						<span class="noedit" id="field3Result"><i class="fa fa-question-circle"></i></span>
						<select class="edit field3" id="field3">
                        <?php
                         $qry = table_answers($question_number, 'field_3');
						 while($in = mysqli_fetch_array($qry)){
						?>
                        <option value="<?php echo $in['option']; ?>"><?php echo $in['answer']; ?></option>
                        <?php
						 }
						 ?>
                         </select><br>
						<button class="btn btn-success btn-xs edit saveF3"><i class="fa fa-paper-plane"></i></button>
						</td>
						<td>{{field_4}}</td>
						<td id="table_data_5" class="editF5" bgcolor="#eeeeee">
						
						<span class="noedit" id="field5Result"><i class="fa fa-question-circle"></i></span>
						<select class="edit field5" id="field5">
                        <?php
                         $qry = table_answers($question_number, 'field_5');
						 while($in = mysqli_fetch_array($qry)){
						?>
                        <option value="<?php echo $in['option']; ?>"><?php echo $in['answer']; ?></option>
                        <?php
						 }
						 ?>
                         </select><br>
						<button class="btn btn-success btn-xs edit saveF5"><i class="fa fa-paper-plane"></i></button>
						</td>

						<td id="table_data_6" class="editF6" bgcolor="#eeeeee">
						
						<span class="noedit" id="field6Result"><i class="fa fa-question-circle"></i></span>
						<select class="edit field6" id="field6">
                        <?php
                         $qry = table_answers($question_number, 'field_6');
						 while($in = mysqli_fetch_array($qry)){
						?>
                        <option value="<?php echo $in['option']; ?>"><?php echo $in['answer']; ?></option>
                        <?php
						 }
						 ?>
                         </select><br>
						<button class="btn btn-success btn-xs edit saveF6"><i class="fa fa-paper-plane"></i></button>
						</td>
					</tr>
					</template>
	
				</table>
	</div>
	
	<div class="row">
	<div class="col-md-12">
			<div class="col-md-12" id="read_more" hidden>
				<hr><u>Read More On <?php echo $info['topic']; ?></u></b>
				<hr>
				
				<ul>
				<?php
				$t=mysqli_query(conn(), "select * from topics where topic='".$info['topic']."'");
				while($g=mysqli_fetch_array($t)){
				?>
					<li><?php echo $g['subject']; ?></li>
				<?php
				}
				?>
				</ul>
			</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
			<div class="col-md-12">
				<hr>
				<button class="btn btn-success btn-xs nextTable hidden">Next Question</button>
			</div>
	</div>
</div>





<script>
$(function(){

	var $question_number = $('#question_number').val();
	console.log("Question number is: "+$question_number);
	var myTemplate = $('#table-data').html();
	$table_rangu = $('#table_rangu');
	$.ajax({
		type: 'GET',
		url : 'slim/api/question/answers/'+$question_number,
		success : function(data){
			$.each(JSON.parse(data), function(i, value){
                console.log("The id of the question selected is: "+ value.id);
				$table_rangu.append(Mustache.render(myTemplate, value));
				});
		}
	});
	


	$(document).on('click',".editF2",function () {        
        var $td = $('#table_data_2');
			$td.addClass('edit');
    });

	$(document).on('click',".saveF2",function (e) {
		var $td = $('#table_data_2');
		var e = document.getElementById ("field2");
		var $field2Value = e.options [e.selectedIndex] .value;
		console.log("Selected is: "+$field2Value);
	
		var data = {
			answer: $field2Value,
			question: $question_number,
			field: 'field_2',
	};

	 $.ajax({
		type: 'POST',
		url : "table_answer.php",
		data: data,
		success : function(data){

			if(data.includes("fa-check")){
				swal("Information Submitted!", "Correct!", "success");
			} else if(data.indexOf("fa-times-circle") > -1){
				swal("Information Submitted!", "Wrong!", "error");
				$('#read_more').show('slow');
			} else {
				swal("Information NOT Submitted!", "Something wrong!", "error");
			}

			$('#field2Result').html(data);
			},
			error: function(){
				alert('error inserting');
			}
		});
	
		$td.removeClass('edit');
		$td.removeClass('noedit');
		e.stopPropagation();
		
		
	});		











	$(document).on('click',".editF3",function () {        
        var $td = $('#table_data_3');
			$td.addClass('edit');
    });


	$(document).on('click',".saveF3",function (e) {
		var $td = $('#table_data_3');
		var e = document.getElementById ("field3");
		var $field3Value = e.options [e.selectedIndex] .value;
		console.log("Selected is: "+$field3Value);
		var data = {
			answer: $field3Value,
			question: $question_number,
			field: 'field_3',
	};

	 $.ajax({
		type: 'POST',
		url : "table_answer.php",
		data: data,
		success : function(data){

			if(data.includes("fa-check")){
				swal("Information Submitted!", "Correct!", "success");
			} else if(data.indexOf("fa-times-circle") > -1){
				swal("Information Submitted!", "Wrong!", "error");
				$('#read_more').show('slow');
			} else {
				swal("Information NOT Submitted!", "Something wrong!", "error");
			}

			$('#field3Result').html(data);
			},
			error: function(){
				alert('error inserting');
			}
		});
	
		$td.removeClass('edit');
		$td.removeClass('noedit');
		e.stopPropagation();
		
		
	});	








	$(document).on('click',".editF5",function () {        
        var $td = $('#table_data_5');
			$td.addClass('edit');
    });


	$(document).on('click',".saveF5",function (e) {
		var $td = $('#table_data_5');
		var e = document.getElementById ("field5");
		var $field5Value = e.options [e.selectedIndex] .value;
		console.log("Selected is: "+$field5Value);
		var data = {
			answer: $field5Value,
			question: $question_number,
			field: 'field_5',
	};

	 $.ajax({
		type: 'POST',
		url : "table_answer.php",
		data: data,
		success : function(data){
			
			if(data.includes("fa-check")){
				swal("Information Submitted!", "Correct!", "success");
			} else if(data.indexOf("fa-times-circle") > -1){
				swal("Information Submitted!", "Wrong!", "error");
				$('#read_more').show('slow');
			} else {
				swal("Information NOT Submitted!", "Something wrong!", "error");
			}

			$('#field5Result').html(data);
			},
			error: function(){
				alert('error inserting');
			}
		});
	
		$td.removeClass('edit');
		$td.removeClass('noedit');
		e.stopPropagation();
		
		
	});
	
	














	$(document).on('click',".editF6",function () {        
        var $td = $('#table_data_6');
			$td.addClass('edit');
    });


	$(document).on('click',".saveF6",function (e) {
		var $td = $('#table_data_6');
		var e = document.getElementById ("field6");
		var $field6Value = e.options [e.selectedIndex] .value;
		console.log("Selected is: "+$field6Value);
		var data = {
			answer: $field6Value,
			question: $question_number,
			field: 'field_6',
	};

	 $.ajax({
		type: 'POST',
		url : "table_answer.php",
		data: data,
		success : function(data){
			
			if(data.includes("fa-check")){
				swal("Information Submitted!", "Correct!", "success");
			} else if(data.indexOf("fa-times-circle") > -1){
				swal("Information Submitted!", "Wrong!", "error");
				$('#read_more').show('slow');
			} else {
				swal("Information NOT Submitted!", "Something wrong!", "error");
			}

			$('#field6Result').html(data);
			},
			error: function(){
				alert('error inserting');
			}
		});
	
		$td.removeClass('edit');
		$td.removeClass('noedit');
		$('.nextTable').removeClass('hidden');
		e.stopPropagation();
		
		
	});


	$('.nextTable').on('click', function (){
		console.log("Next clicked");
		$.ajax({url: "update_tablestate.php?question="+$question_number, success: function(result){
			console.log(result);
        }});
		location='test.php';
	});
		
									
});
</script>