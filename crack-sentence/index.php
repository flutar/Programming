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
							
							if (isset($_GET["page"])) 
								
									{ 
										$page  = $_GET["page"];
								    } 
							
							else 
								
									{ 
											$page=1; 
									}
									
								$start_from = ($page-1) * 20; 
								$sql = "SELECT * FROM sentense LIMIT $start_from, 2"; 
								
							
								$rs_result = $db->query($sql);

		
							
									
									    echo "<table border='1' width='40%' align='center' bgcolor='grey'>";
									    

										for ($i=1; ($row = $rs_result->fetch_assoc()); $i++)
											
											{
												

												echo "<tr>";
												echo "<td><a href='singlepage.php'>".$row['description']."</a></td>";
												echo "</tr>";	
				
												
											}
											
										echo "</table>";
																				
									$sql = "SELECT * FROM sentense"; 
									$rs_result = $db->query($sql);
									$row = $rs_result->num_rows;
									$total_records = $row;
									$total_pages = ceil($total_records / 2);
									  
									for ($i=1; $i<=$total_pages; $i++) 
									
									{ 
									     echo "<a href='pagination.php?page=".$i."'>".$i."</a> "; 
									}
									
									$db->close();

											
					 	}						

											
			?> 
	    
		
	</html>