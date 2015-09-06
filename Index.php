		<?php
			$is_home = true; 
			$title = "Home";
			include_once ('Template/Header.php'); ?>
		<div id="body" class="section">
			<div class="content-box">
				<div class="left-box">
					<h2>
						<?php echo $data->title; ?>
					</h2>
						
					<ul class="important-list">
						<?php 
							foreach($data->important->item as $item)
							{
								echo "<li>$item</li>";
							}
						?>
					</ul>
					<h3>
						<?php echo $data->creating_info->title; ?>
					</h3>
					<p>
						<?php echo $data->creating_info->sentence; ?>
					</p>
					<div>
						<form method="post" action="Functions/create_project.php">
							<input type="text" name="project_name" />
							<input type="submit" name="submit" value="<?php echo $data->creating_info->button;?>"/>
						</form>
					</div>
					
				</div>
				<div class="right-box">
					<ul class="settings-list">
						<li class="settings-button"  data-status="closed">
							<span><?php echo $data->deleting_info->title; ?></span>
							<p>
								<?php echo $data->deleting_info->sentence; ?>
							</p>
							<ul class="option-list">
								<form method="post" action="<?php echo $base_path;?>Functions/delete_project.php">
								<?php 
									$items = dir_listing("Assignments");
									foreach ($items as $item)
									{
										$name = str_replace(".php", "", $item);
										echo '<li><input type="checkbox" name="project[]" value="'.$name.'">'.$name.'</input></li>';
									}
								?>
									<li>
										<input type="submit" name="submit" value="<?php echo $data->deleting_info->button;?>"></input>
									</li>
								</form>
							</ul>
						</li>
				</div>
					
			</div>
		</div>
		
		<script src="<?php echo $base_path;?>Javascript/settings.js"></script>
		<?php 
			include_once ('Template/Footer.php'); ?>
