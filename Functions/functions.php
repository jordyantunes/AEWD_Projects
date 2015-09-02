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
		
		#create new file
		$file = fopen($base_path."Assignments/".$name.".php", 'wr');
		
		#get page template
		$content = file_get_contents($base_path."Template/Page.php");
		
		#replace title
		$content = str_replace('Assignment Title', $name, $content);
		$content = str_replace('This Will Be The Title', $name, $content);
		
		fwrite($file, $content);
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
?>