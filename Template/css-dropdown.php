<?php ///---not yet fully implemented--- 
				
					$assign_count =  count(dir_listing("Assignments"));
					$items_per_column = 10;
					$num_columns = ceil ($assign_count / $items_per_column);
					?>
				<li class="parent-menu">
					Assignments
					<ul class="submenu_in" style="min-width : <?php echo 100 * $num_columns;?>%">
						<?php
							$i = 0;
							foreach (dir_listing("Assignments") as $file) :
								// If we've reached the end of a row, close it and start another
								if(!($i % $items_per_column))
								{
									if($i > 0)
									{
										echo "</div>"; // Close the column
									}
							
									echo '<div class="column" style="min-width : '. 100 / $num_columns.'%">';
								}
								$short_name = str_replace(".php", "", $file);
								echo '<a href="'.$base_path.'Assignments/'.$file.'">'.
									'<li>'.$short_name.'</li></a>';
								$i++;
							endforeach;
							echo "</div>";
							echo '<span class="clear"></span>';
						
							?>
					</ul>
				</li>
				<!-- testing -->