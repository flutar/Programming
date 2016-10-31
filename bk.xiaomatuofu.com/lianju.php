<!doctype html>

	<html>
		
		<head>
			<meta charset="utf-8">
		</head>
			
			<?php
				
							
					$db = new mysqli('182.18.37.88', 'yuzhanchao', 'wxserver1q2w3efefar.2eefw324242');
					$db->set_charset('utf8');

					
					// Check connection
					
					if ($db->connect_error) 
					
						{
						    die("Connection failed: " . $db->connect_error);
						} 
					
					else 
						
						{
						    $query = "select * from sentense";
							
							$result= $db->query($query);
							
							if($result->num_rows)
							
								{
									
									    echo "<table border='1' width='40%' align='center' bgcolor='grey'>";
									    

										for ($i=1; ($row = $result->fetch_assoc()); $i++)
											
											{
												

												echo "<tr>";
												echo "<td><a href='singlepage.php'>".$row['description']."</a></td>";
												echo "</tr>";	
				
												
											}
											
											
									    echo "</table>";
									    				
									$result->free();
									
								} 
							
							else 
							
								{
									echo "不欢迎你";
								}
								
								$db->close();
					   }
											
			?>
	    
		
	</html>