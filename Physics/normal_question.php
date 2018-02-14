<div class="row">
			<div class="col-md-6">
				<?php echo "<b>Question. </b>"; echo $info['question']; ?>			
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-6">
				<table class="table">
				<?php
					$qry = mysqli_query(conn(), "select * from answers where question = '".$info['id']."'");
					while($answer = mysqli_fetch_array($qry)){
				?>
					<tr class="text-primary">
						
						<td width="3%">
						<?php echo $answer['option']; ?>
						</td>
						
						<td width="3%">
						<div class="options" align="left">
						<input required type="radio" id="<?php echo $answer['option']; ?>" name="answer" class="custom-control-input">
								
						</div>
						</td>


						<td>
						<div class="options" align="left">
						
								<label class="custom-control-label" for="answer"><?php echo $answer['answer']; ?></label>
						</div>
						</td>
						
						
					</tr>
				<?php
					}
					?>
					
					
					<?php
					$a = mysqli_query(conn(), "select * from answers where question = '".$info['id']."' and state='correct'");
					$b = mysqli_fetch_array($a);
					$option = $b['option'];
					$correct = $b['answer'];
				?>
				
					<tr>
					<td>
					
					</td>
					<td colspan="2">
					<div class="your_choice" id="your_choice" hidden></div>
					<div class="the_answer" hidden><hr>The correct answer is <?php echo $option.". ".$correct; ?></div>
					</td>
					
					</tr>
				</table>
						<button class="btn btn-success btn-xs checkAnswer">Submit Answer</button>
						<button class="btn btn-success btn-xs nextQuestion hidden">Next Question</button>						
			</div>
			
			<div class="col-md-6" id="read_more" hidden>
				<b><u>Read More On <?php echo $info['topic']; ?></u></b>
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