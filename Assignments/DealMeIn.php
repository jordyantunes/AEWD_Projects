		<?php
		
			//CREATE SET
			$suits = array("Diamonds", "Hearts", "Clubs", "Spades");
			$set = array();
			foreach ($suits as $suitset)
			{
				for ($i = 1; $i < 14; $i++)
				{
					switch ($i)
					{
						case 1 :
							$number = "A";
							break;
						case 11 :
							$number = "Jack";
							break;
						case 12 :
							$number = "Queen";
							break;
						case 13 :
							$number = "King";
							break;
						default :
							$number = $i;
					}
					
					$set[] = $number." of ".$suitset;
				}
			}
			
			if (isset($_POST["submit"])
			&& isset($_POST["players"]))
			{
				if ($_POST["submit"] == "submit")
				{
					if(empty($_POST["players"]) 
					|| $_POST["players"] > 4
					|| $_POST["players"] < 1)
					{
						$status = "error";
						$message = "You must enter a number of players between 1 and 4 to play";
					}
					else
					{
						$status = "started";
						$message = "Here are your cards";
					}	
				}
				else
				{
					$status = "awaiting";
					$message = "Insert the number of players";	
				}
				
			}
			else
			{
				$status = "awaiting";
				$message = "Insert the number of players";
			}
		?>
		<?php
			$is_home = false; 
			$title = "DealMeIn";
			$custom_css_files = array("DealMeIn.css");
			//$custom_css_internal = String;
			//$body_class = ...
			include_once ('../Template/Header.php'); 
		?>
		<div id="body" class="section">
			<div class="content-box">
				<h2>
					DealMeIn
				</h2>
				<p>
					<?php echo $message; ?>
				</p>
				<div>
					<form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
					<?php
						if ($status == "awaiting" || $status == "error"):
					?>
						<label>
							<h3>Number of players :</h3>
						</label>
						<input type="number" name="players"/>
						<input type="submit" name="submit" value="submit"/>
					
					<?php		
						elseif ($status == "started"):
							for ($player=1; $player <= $_POST["players"]; $player++) { 
								echo "<h3>Player ".$player.":</h3>";
								for ($cards = 0; $cards < 5; $cards++) { 
									shuffle($set);
									echo array_pop($set)."<br>";
								}
								echo "<br>";
							}
					?>
					
					<input type="submit" name="submit" value="reset"/>
					<?php			
						endif;
					?>
					</form>
				</div>
			</div>
		</div>
		
		<?php
			include_once ('../Template/Footer.php'); ?>