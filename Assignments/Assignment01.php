<?php
	
	# Months
	$months[0] = "Jan";
	$months[1] = "Feb";
	$months[2] = "Mar";
	$months[3] = "Apr";
	$months[4] = "May";
	$months[5] = "Jun";
	$months[6] = "Jul";
	$months[7] = "Aug";
	$months[8] = "Sep";
	$months[9] = "Oct";
	$months[10] = "Nov";
	$months[11] = "Dec";

	# Moons
	
	$moons["Jan"]="Old";
	$moons["Feb"]="Snow";
	$moons["Mar"]="Sap";
	$moons["Apr"]="Grass";
	$moons["May"]="Milk";
	$moons["Jun"]="Rose";
	$moons["Jul"]="Thunder";
	$moons["Aug"]="Green Corn";
	$moons["Sep"]="Fruit";
	$moons["Oct"]="Harvest";
	$moons["Nov"]="Frost";
	$moons["Dec"]="Long Night";
	
?>
		<?php
			$is_home = false; 
			$title = "Assignment01";
			include_once ('../Template/Header.php'); 
		?>
		<div id="body" class="section">
			<div class="content-box">
				<h2>
					<?php echo $title; ?>
				</h2>
				<h3> Description :  </h3>
				<p>
					Creating an array os months and an array of moons, using a random number generator to get a random month and its corresponding moon.
				</p>
				<p>
					<?php 
						$rand_num = RAND(0,11);
					?>
					<table>
						<tr>
							<td>
								Month
							</td>
							<td>
								Moon
							</td>
						</tr>
						<tr>
							<td>
								<?php echo $months[$rand_num]; ?>
							</td>
							<td>
								<?php echo $moons[$months[$rand_num]]; ?>
							</td>
						</tr>
					</table>
				</p>
			</div>
		</div>
		
		<?php
			include_once ('../Template/Footer.php'); ?>