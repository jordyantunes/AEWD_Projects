<?php 
	
	$default = "Advanced Enterprise Web Programming";

	#funtion for listing all the assignments in the folder
	
	function dir_listing($name)
	{
		global $base_path;
		$Assigments_url = $base_path.$name;
		$entry_list = array();
		if ($handle = opendir($Assigments_url)) {
			while (false !== ($entry = readdir($handle))) {
				if ($entry != "." && $entry != "..") 
					$entry_list[] = $entry;
			}
			
			closedir($handle);
		}
		
		return $entry_list;
	}
	
	function create_project($name)
	{
		global $base_path;
		$same_name_files = check_name_availablity($name);
		
		$suffix = "";
		$return_message = "Success <br> Project <span style=\"font-weight : 600 ;\">".$name."</span> created!";
		if ($same_name_files >= 1)
		{
			$suffix = $same_name_files + 1;
			$return_message = "A project with the same name already exists, the name has been altered to <span style=\"font-weight : 600;\">".$name.$suffix."</span>";
		}
		
		$name = $name.$suffix;
		
		#create new PHP file
		$file = fopen($base_path."Assignments/".$name.".php", 'wr');
		
		#get page template
		$content = file_get_contents($base_path."Template/Page.php");
		
		#replace title
		$content = str_replace('Assignment Title', $name, $content);
		$content = str_replace('This Will Be The Title', $name, $content);
		
		#add CSS link
		#this doesnt look right, though
		$content = str_replace('//$custom_css_files = array(...);', '$custom_css_files = array("'.$name.'.css");', $content);
		
		fwrite($file, $content);
		fclose($file);
		
		#create SCSS file
		copy($base_path."Template/style_template.scss", $base_path."Sass/".$name.".scss");
		
		#create CSS file
		$file = fopen($base_path."Styles/".$name.".css", 'wr');
		fclose($file);
		
		
		return array("return_message" => $return_message,
					"file_name" => $name);
	}
	
	function check_name_availablity($name)
	{
		global $base_path;
		$files = dir_listing("Assignments");
		$counter = 0;
		
		foreach ($files as $file)
		{
			if (preg_match("#".$name."[0-9]*?\.php#", $file))
				$counter++;	
		}
		
		return $counter;
	}
	
	function insert_css_files()
	{
		global $base_path, $custom_css_files;
		
		if (isset($custom_css_files))
		{
			foreach ($custom_css_files as $file)
			{
				echo '<link rel="stylesheet" href="'.$base_path.'Styles/'.$file.'"/>';
			}	
		}
	}
	
	function delete_project($name)
	{
		global $base_path;
		
		unlink($base_path.'Assignments/'.$name.'.php');
		unlink($base_path.'Sass/'.$name.'.scss');
		unlink($base_path.'Styles/'.$name.'.css');
		
		return "Project $name Deleted!";
	}
	
	//----------TEMPLATING FUNCTIONS-------------
	
	function insert_css_internal()
	{
		global $base_path, $custom_css_internal;
		
		if (isset($custom_css_internal))
		{
			echo $custom_css_internal;	
		}
	}
	
	function load_language_file($name)
	{
		global $base_path;
		$file = simplexml_load_file($base_path."Languages/".$name);
		return $file;
	}
	
	function check_language()
	{
		if (isset($_COOKIE['language']))
		{
			load_language_file($_COOKIE['language']);
		}
		else
		{
			
		}
		
	}
?>