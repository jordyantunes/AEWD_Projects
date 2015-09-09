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
					<label>Font Color : </label>
					<select name="fontcolor">
						<option value="red">Red</option>
						<option value="blue">Blue</option>
						<option value="green">Green</option>
						<option value="yellow">Yellow</option>
						<option value="orange">Orange</option>
						<option value="black">Black</option> 
					</select>
					
					<label>Background Color : </label>
					<select name="bgcolor">
						<option value="red">Red</option>
						<option value="blue">Blue</option>
						<option value="green">Green</option>
						<option value="yellow">Yellow</option>
						<option value="orange">Orange</option>
						<option value="black">Black</option> 
					</select>
					
					<label>Font : </label>
					<select name="fontfamily">
						<option value="impact">Impact</option>
						<option value="palatino">Palatino</option>
						<option value="tahoma">Tahoma</option>
						<option value="gothic">Gothic</option>
						<option value="lucida">Lucida</option>
						<option value="arial-black">Arial Black</option> 
					</select>
					
					<label>Font Size : </label>
					<select name="fontsize">
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option> 
					</select>
						
					<input type="submit" name="submit" value="Submit"/>
				</form>
			</div>
		</div>
		
		<?php
			include_once ('../Template/Footer.php'); ?>