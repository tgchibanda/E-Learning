<div class="row">
			<div class="col-md-6">
				<?php echo "<b>Question. </b>"; echo $info['question']; ?>			
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-6">
				<table class="table">
				<?php
					$qry = mysqli_query($connection, "select * from answers where question = '".$info['id']."' AND (answers.`option`='A' or answers.`option`='C')");
					while($answer = mysqli_fetch_array($qry)){
				?>
					<tr class="text-primary">
						
						<td width="1%" align="left">
						<?php echo $answer['option']; ?>
						</td>
						
						<td>
						<div class="options">
						<input required type="radio" id="<?php echo $answer['option']; ?>" name="answer" class="custom-control-input">
								<label class="custom-control-label" for="answer"><img style="height: 100; width: auto;" src="shapes/<?php echo $answer['answer']; ?>"/></label>
						</div>
						</td>
						
						
					</tr>
				<?php
					}
					?>
					
					
					<?php
					$a = mysqli_query($connection, "select * from answers where question = '".$info['id']."' and state='correct'");
					$b = mysqli_fetch_array($a);
					$option = $b['option'];
					$correct = $b['answer'];
				?>
				
					
				</table>
										
			</div>
			
			
			
			<div class="col-md-6">
				<table class="table">
				<?php
					$qry = mysqli_query($connection, "select * from answers where question = '".$info['id']."' AND (answers.`option`='B' or answers.`option`='D')");
					while($answer = mysqli_fetch_array($qry)){
				?>
					<tr class="text-primary">
						
						<td width="3%" align="left">
						<?php echo $answer['option']; ?>
						</td>
						
						<td>
						<div class="options">
						<input required type="radio" id="<?php echo $answer['option']; ?>" name="answer" class="custom-control-input">
								<label class="custom-control-label" for="answer"><img style="height: 100; width: auto;" src="shapes/<?php echo $answer['answer']; ?>"/></label>
						</div>
						</td>
						<td></td>
						
					</tr>
				<?php
					}
					?>
					
					
					
					
					
				</table>
</div>
</div>
		
<div class="row">		
<div class="col-md-12">	

					<div class="your_choice" id="your_choice" hidden></div>
					<div class="the_answer" hidden><hr>The correct answer is <?php echo $option; ?></div>
					<button class="btn btn-success btn-xs checkAnswer">Submit Answer</button>
						<button class="btn btn-success btn-xs nextQuestion hidden">Next Question</button>		
			</div>
			</div>

		<div class="row">
			<div class="col-md-12" id="read_more" hidden>
				<b><u>Read More On <?php echo $info['topic']; ?></u></b>
				<hr>
				
				<ul>
				<?php
				$t=mysqli_query($connection, "select * from topics where topic='".$info['topic']."'");
				while($g=mysqli_fetch_array($t)){
				?>
					<li><?php echo $g['subject']; ?></li>
				<?php
				}
				?>
				</ul>
			</div>
			</div>
		