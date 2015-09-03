<li class="parent_menu">
					hi
					<ul class="submenu_in">
						<?php
						foreach (dir_listing("Assignments") as $file)
						{
							$short_name = str_replace(".php", "", $file);
							echo '<a href="'.$base_path.'Assignments/'.$file.'">'.
								'<li>'.$short_name.'</li></a>';
						}
						?>
					</ul>
				</li>
				<script>
					$(document).ready(
						function()
						{
							$(".parent_menu").click(function()
								{
									left_pos = $(".parent_menu").offset().left;
									top_pos = $(this).offset().top + $(this).outerHeight();
									 
									$(".submenu_in").css("left", left_pos)
									.css("top", top_pos)
									.addClass("open");
									
									width = $(".submenu_in").children().last().offset().left - $(".submenu_in").offset().left + $(".submenu_in").children().last().outerWidth();
									$(".submenu_in").css("width", width);
								})
						}
					);
				</script>
				<!--dropdown-->