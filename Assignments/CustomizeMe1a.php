	<?php
					
		if (isset($_POST['submit']))
		{
			if (isset($_POST["fontcolor"]) && !empty($_POST["fontcolor"])
				&& isset($_POST["bgcolor"]) && !empty($_POST["bgcolor"])
				&& isset($_POST["fontfamily"]) && !empty($_POST["fontfamily"])
				&& isset($_POST["fontsize"]) && !empty($_POST["fontsize"]))
			{
				$style = 'color-'.$_POST["fontcolor"].' font-'.$_POST["fontfamily"].' fontsize-'.$_POST["fontsize"].' font-'.$_POST["fontfamily"];
				$body_class = 'bgcolor-'.$_POST["bgcolor"];
			}
			else
			{
					$style = "";
			}
		}
		else
		{
				$style = "";
		}
	?>
		<?php
			$is_home = false; 
			$title = "CustomizeMe1a";
			$custom_css_files = array("CustomizeMe1a.css");
			//$custom_css_internal = String;
			include_once ('../Template/Header.php'); 
		?>
		<div id="body" class="section <?php echo $style;?>">
			<div class="content-box">
				<h2>
					CustomizeMe1a
				</h2>
				<span> This is a very special sentence. It will change its color, font size  and other stuff you choose in the form below.</span>
				<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
					<?php $colors = array("red", "blue", "green", "yellow", "orange", "black"); ?>
						
					<label>Font Color : </label>
					<select name="fontcolor">
						<?php
							foreach ($colors as $color)
							{
								echo '<option value="'.$color.'" '. ((isset($_POST["fontcolor"]))? (($_POST["fontcolor"] == $color)? 'selected' : '') : '') .'>'.$color.'</option>';
							}
							?>
					</select>
					
					<label>Background Color : </label>
					<select name="bgcolor">
						<?php
							foreach ($colors as $color)
							{
								echo '<option value="'.$color.'" '. ((isset($_POST["bgcolor"]))? (($_POST["bgcolor"] == $color)? 'selected' : '') : '') .'>'.$color.'</option>';
							}
						?> 
					</select>
					
					<?php
						$fonts = array("impact", "palatino", "tahoma", "gothic", "lucida", "arial-black");
					?>
					<label>Font : </label>
					<select name="fontfamily">
						<?php
							foreach ($fonts as $font)
							{
								echo '<option value="'.$font.'" '. ((isset($_POST["fontfamily"]))? (($_POST["fontfamily"] == $font)? 'selected' : '') : '') .'>'.$font.'</option>';
							}
						?>
					</select>
					
					<?php
						$fontsize = array(10, 11, 12, 13, 14, 15);
					?>
					<label>Font Size : </label>
					<select name="fontsize">
						<?php
							foreach ($fontsize as $size)
							{
								echo '<option value="'.$size.'" '. ((isset($_POST["fontsize"]))? (($_POST["fontsize"] == $size)? 'selected' : '') : '') .'>'.$size.'</option>';
							}
						?>
					</select>
						
					<input type="submit" name="submit" value="Submit"/>
				</form>
			</div>
		</div>
		
		<?php
			include_once ('../Template/Footer.php'); ?>