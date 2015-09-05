		<?php
			$is_home = false; 
			$title = "Deleting Project(s)";
			include_once ('../Template/Header.php'); 
		?>
		<div id="body" class="section">
			<div class="content-box">
			<h2>
				<?php echo $title; ?>...
			</h2>

			<?php
				if (isset($_POST['project']) && isset($_POST['submit']))
				{
					if (isset($_POST['delete_confirmation']))
					//has confirmed 
					{
						if ($_POST['delete_confirmation']=="Delete")
						{
							foreach($_POST['project'] as $project_name)
							{
								$result = delete_project($project_name);
								echo "<p>".$result."</p>";	
							}
						}
					}
					else
					//still has to confirm 
					{
						//list of files to be deleted
					?>
						<h3> Are you sure you want to delete the project<?php echo (count($_POST['project']) > 1)? 's' : '';?> below? You won't be able to recover <?php echo (count($_POST['project']) > 1)? 'them' : 'it';?>.</h3>
						<ul>
						<?php
							foreach ($_POST['project'] as $project_name)
							{
								 echo '<li>'.$project_name.'</li>';
							}
							
							//confirmation form
						?>
						
						</ul>
						<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<?php foreach($_POST['project'] as $project_name)
								{
									echo '<input type="hidden" name="project[]" value="'.$project_name.'"></input>';
								}
							?>
							<input type="hidden" name="delete_confirmation" value="Delete"></input>
							<input type="submit" name="submit" value="Delete"></input>
						</form>
					<?php
					}
				}
				else
				{
					echo "<p> ERROR <br> You did not pass any parameters to delete a project </p>";
				}
			?>
			</div>
		</div>
		
		<?php
			include_once ('../Template/Footer.php'); ?>