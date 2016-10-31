<!doctype html>

	<html>
		
		<head>
			<meta charset="utf-8">
		</head>
			
			<?php
				
								
					$db = new mysqli('localhost', 'root', 'root', 'crack_sentense');
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
												echo "<td>原文材料英文</td>";
												echo "</tr>";	

												echo "<tr>";
												echo "<td>".$row['原文材料英文']."</td>";
												echo "</tr>";	
												
											    echo "<tr>";
												echo "<td>原文材料中文</td>";
												echo "</tr>";	

												echo "<tr>";
												echo "<td>".$row['原文材料中文']."</td>";
												echo "</tr>";	
												

												echo "<tr>";
												echo "<td>句式练习中文</td>";
												echo "</tr>";
												
												echo "<tr>";
												echo "<td>".$row['句式练习中文']."</td>";
												echo "</tr>";

												echo "<tr>";
												echo "<td>句式练习英文</td>";
												echo "</tr>";
												
												echo "<tr>";
												echo "<td>".$row['句式练习英文']."</td>";
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