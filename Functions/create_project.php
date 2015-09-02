		<?php
			$is_home = false; 
			$title = "Creating New Project";
			include_once ('../Template/Header.php'); 
		?>
		<div id="body" class="section">
			<div class="content-box">
			<h2>
				<?php echo $title; ?>...
			</h2>

			<?php
				if (isset($_POST['project_name']))
				{
					if (!empty($_POST['project_name']))
					{
						$p_name = $_POST['project_name'];
					}
					else
					{
						$p_name = "new_project";
					}
					$result = create_project($p_name);
					echo "<p>".$result["return_message"]."</p>";
					echo "<a href=\"../Assignments/".$result["file_name"].".php\"><span class=\"div_button\">Go to Project</span></a>";
				}
				else
				{
					echo "<p> ERROR <br> You did not pass any parameters to create a new project </p>";
				}
			?>
			</div>
		</div>
		
		<?php
			include_once ('../Template/Footer.php'); ?>