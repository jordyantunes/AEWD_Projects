		<?php
			$is_home = true; 
			$title = "Home";
			include_once ('Template/Header.php'); ?>
		<div id="body" class="section">
			<div class="content-box">
				<h2>
					Welcome to the assignments page!
				</h2>
					
				<ul class="important-list">
					<li>
						Tap on any of the links in the menu, they will take you to the respective assignment.
					</li>
					<li>
						The menu is automatically updated as new assignments are included in the assignment folder, so you only have to worry about doing the assignment.
					</li>
					<li>
						Creating this page was actually part of <span style="font-weight : 600;">Assignment 1</span> !
					</li>
					<li>
						There is a template file in the Template folder for future assignments that have the same structure, copy it, use it and modify it to suit your needs.
					</li>	
					<li> OR...</li>
				</ul>
				<h3>
					You could simply write the name of the project in the box below and its file will be created for you!
				</h3>
				<p>
					Yes, it's that easy.
				</p>
				<div>
					<form method="post" action="Functions/create_project.php">
						<input type="text" name="project_name" />
						<input type="submit" name="submit" value="Create Project"/>
					</form>
				</div>
					
			</div>
		</div>
		<?php 
			include_once ('Template/Footer.php'); ?>
