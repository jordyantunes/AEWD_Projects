		<?php 
			ini_set("date.timezone", "US/Central");
			
			$time = date("H");
			 
			if ($time >= 5 && $time < 12)
			{
				$body_class = "morning";
				$message = "Good Morning!";
			}
			else if ($time >= 12 && $time < 18)
			{
				$body_class = "afternoon";
				$message = "Good Afternoon!";
			}
			else if ($time >= 18 && $time < 22)
			{
				$body_class = "evening";
				$message = "Good Evening!";
			}
			else if ($time >= 22 && $time < 24)
			{
				$body_class = "nightowl";
				$message = "Hey Night Owl!";
			}
		?>
		<?php
			$is_home = false; 
			$title = "Greetings01";
			$custom_css_files = array("Greetings01.css");
			include_once ('../Template/Header.php'); 
		?>
		<div id="body" class="section <?php echo $class;?>">
			<div class="content-box">
				<h2>
					Greetings01
				</h2>
				<h3><?php echo $message; ?></h3>
			</div>
		</div>
		
		<?php
			include_once ('../Template/Footer.php'); ?>