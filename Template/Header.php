<?php 
	
	#set base_path to avoid path problems when including file
	$base_path = (!$is_home)? '../' : './';
	
	$function_path = $base_path . 'Functions/functions.php'; 
	include ($function_path);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
		<?php echo (isset($title))? $title : $default; ?>
	</title>
	
	<link rel="stylesheet" href="<?php echo $base_path;?>Styles/Menu.css"/>
	<link rel="stylesheet" href="<?php echo $base_path;?>Styles/Assignments.css"/>
	<script src="<?php echo $base_path;?>Javascript/jquery-2.1.4.min.js"></script>
		<style type="text/css">
		
			<!-- Local Style Rules go Here -->

		</style>

</head>
<body>
    <div id="page">
		<div id="header" class="section">
			<div class="content-box">
				<h1>
					CIS476 – Advanced Enterprise Web Development
				</h1>
				<h2>
					Jordy Antunes
				</h2>
			</div>
			<ul>
				
				<a href="<?php echo $base_path; ?>Index.php">
					<li
						<?php echo ($is_home)? 'class="selected"':''; ?>
						> Home </li>
				</a>
				
				<?php
					//still in development 
					
					//CSS-only multi-column dropdown menu
					//include($base_path."Template/css-dropdown.php");
					
					//CSS and Js-only multi-column dropdown menu
					//include($base_path."Template/css_js_dropdown.php");
					
					//still in development
				?>
				
				<!---dropdown--->
				
				<?php
					foreach (dir_listing("Assignments") as $file)
					{
						$short_name = str_replace(".php", "", $file);
						echo '<a href="'.$base_path.'Assignments/'.$file.'">'.
							'<li '.
							(($short_name == $title)? 'class="selected"':'').'>'.
							$short_name.
							'</li></a>';
					}
				?>
				<span class="clear"></span>
			</ul>
			
			<!-- NOT YET FULLY IMPLEMENTED
			<ul class="submenu">
				<li> hi
				</li>
				<span class="clear"></span>
			</ul>
			-->
</div>