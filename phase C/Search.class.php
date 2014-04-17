<?php
   class SearchItem
   {
	   function Search()
		{
			mysql_connect('localhost', 'user', 'password');
			mysql_select_db('my_own_bookshop');
		} 
		
//if a user search for a table he or she is suppose to be able to only search for one product

			function Table($searchtable)
			{
				if($searchtable == "a")
				{
				 
				 $q = 'SELECT * FROM items WHERE'.$searchtable;
						$result=mysql_query($q);
						
						if ($result) 
						{
						echo $q->getMessage();
						exit;
						}
						// get number of returned rows
						$num_results = $result->numRows();
						//$result = $db->query($query);
						
						for ($i=0; $i <$num_results; $i++) 
						{
							$row = $result->fetchRow(MDB2_FETCHMODE_ASSOC);
							echo "<p><strong>".($i+1).". Title: ";
							echo htmlspecialchars(stripslashes($row['title']));
							echo "</strong><br />Author: ";
							echo stripslashes($row['author']);
							echo "<br />ISBN: ";
							echo stripslashes($row['isbn']);
							echo "<br />Price: ";
							echo stripslashes($row['price']);
							echo "</p>";
							}
				 
				}
				else 
					if($searchtable == "b")
			    {
				 
				 $q = 'SELECT * FROM items WHERE'.$searchtable;
						$result=mysql_query($q);
						
						if ($result) 
						{
						echo $q->getMessage();
						exit;
						}
						// get number of returned rows
						$num_results = $result->numRows();
						//$result = $db->query($query);
						
						for ($i=0; $i <$num_results; $i++) 
						{
							$row = $result->fetchRow(MDB2_FETCHMODE_ASSOC);
							echo "<p><strong>".($i+1).". Title: ";
							echo htmlspecialchars(stripslashes($row['title']));
							echo "</strong><br />Author: ";
							echo stripslashes($row['author']);
							echo "<br />ISBN: ";
							echo stripslashes($row['isbn']);
							echo "<br />Price: ";
							echo stripslashes($row['price']);
							echo "</p>";
							}
			    }
			    else 
				    if($searchtable == "c")
			        {
							$q = 'SELECT * FROM items WHERE'.$searchtable;
							$result=mysql_query($q);
							
							if ($result) 
							{
							echo $q->getMessage();
							exit;
							}
							// get number of returned rows
							$num_results = $result->numRows();
							//$result = $db->query($query);
							
							for ($i=0; $i <$num_results; $i++) 
							{
								$row = $result->fetchRow(MDB2_FETCHMODE_ASSOC);
								echo "<p><strong>".($i+1).". Title: ";
								echo htmlspecialchars(stripslashes($row['title']));
								echo "</strong><br />Author: ";
								echo stripslashes($row['author']);
								echo "<br />ISBN: ";
								echo stripslashes($row['isbn']);
								echo "<br />Price: ";
								echo stripslashes($row['price']);
								echo "</p>";
								}
					}
					else 
						if($searchtable == "d")
						{
				 
								$q = 'SELECT * FROM items WHERE'.$searchtable;
								$result=mysql_query($q);
						
								if ($result) 
								{
								echo $q->getMessage();
								exit;
								}
							// get number of returned rows
							$num_results = $result->numRows();
							//$result = $db->query($query);
							
							for ($i=0; $i <$num_results; $i++) 
							{
								$row = $result->fetchRow(MDB2_FETCHMODE_ASSOC);
								echo "<p><strong>".($i+1).". Title: ";
								echo htmlspecialchars(stripslashes($row['title']));
								echo "</strong><br />Author: ";
								echo stripslashes($row['author']);
								echo "<br />ISBN: ";
								echo stripslashes($row['isbn']);
								echo "<br />Price: ";
								echo stripslashes($row['price']);
								echo "</p>";
							}
						}
						else 
							if($searchtable == "e")
							{
					
				 
							 $q = 'SELECT * FROM items WHERE'.$searchtable;
									$result=mysql_query($q);
						
								if ($result) 
								{
								echo $q->getMessage();
								exit;
								}
								// get number of returned rows
								$num_results = $result->numRows();
								//$result = $db->query($query);
								
								for ($i=0; $i <$num_results; $i++) 
								{
									$row = $result->fetchRow(MDB2_FETCHMODE_ASSOC);
									echo "<p><strong>".($i+1).". Title: ";
									echo htmlspecialchars(stripslashes($row['title']));
									echo "</strong><br />Author: ";
									echo stripslashes($row['author']);
									echo "<br />ISBN: ";
									echo stripslashes($row['isbn']);
									echo "<br />Price: ";
									echo stripslashes($row['price']);
									echo "</p>";
								}
							}
							else
								if($searchtable == "f")
								{
				 
									 $q = 'SELECT * FROM items WHERE'.$searchtable;
											$result=mysql_query($q);
											
									if ($result) 
									{
									echo $q->getMessage();
									exit;
									}
									// get number of returned rows
									$num_results = $result->numRows();
									//$result = $db->query($query);
									
									for ($i=0; $i <$num_results; $i++) 
									{
										$row = $result->fetchRow(MDB2_FETCHMODE_ASSOC);
										echo "<p><strong>".($i+1).". Title: ";
										echo htmlspecialchars(stripslashes($row['title']));
										echo "</strong><br />Author: ";
										echo stripslashes($row['author']);
										echo "<br />ISBN: ";
										echo stripslashes($row['isbn']);
										echo "<br />Price: ";
										echo stripslashes($row['price']);
										echo "</p>";
									}
								}
								else
								{
								   exit;
								}
			}
		
		function wood($wood)
		{
				
			if($wood == "pine")
			{
					 
			    $q = 'SELECT * FROM items WHERE'.$wood;
							$result=mysql_query($q);
							
				if ($result) 
				{
				    echo $q->getMessage();
					exit;
				}
					// get number of returned rows
					$num_results = $result->numRows();
					//$result = $db->query($query);
							
				for ($i=0; $i <$num_results; $i++) 
				{
					$row = $result->fetchRow(MDB2_FETCHMODE_ASSOC);
					echo "<p><strong>".($i+1).". Wood ID: ";
					echo htmlspecialchars(stripslashes($row['id']));
					echo "</strong><br />Wood Name: ";
					echo stripslashes($row['wood_name']);
					echo "<br />Wood Quality: ";
					echo stripslashes($row['wood_quality']);
					echo "<br />Wood Price: ";
					echo stripslashes($row['wood_price']);
					echo "</p>";
				}			
					 
			}
			else
				if($wood == "ash")
				{
						 
					$q = 'SELECT * FROM items WHERE'.$wood;
					
					$result=mysql_query($q);
								
					if ($result) 
					{
						echo $q->getMessage();
						exit;
					}
					// get number of returned rows
					$num_results = $result->numRows();
					//$result = $db->query($query);
								
					for ($i=0; $i <$num_results; $i++) 
					{
						$row = $result->fetchRow(MDB2_FETCHMODE_ASSOC);
						echo "<p><strong>".($i+1).". Wood ID: ";
						echo htmlspecialchars(stripslashes($row['id']));
						echo "</strong><br />Wood Name: ";
						echo stripslashes($row['wood_name']);
						echo "<br />Wood Quality: ";
						echo stripslashes($row['wood_quality']);
						echo "<br />Wood Price: ";
						echo stripslashes($row['wood_price']);
						echo "</p>";
					}
				}
				else 
				   if($wood == "hichory")
					{
					 
					 $q = 'SELECT * FROM items WHERE'.$wood;
							$result=mysql_query($q);
							
							if ($result) 
							{
							echo $q->getMessage();
							exit;
							}
							// get number of returned rows
							$num_results = $result->numRows();
							//$result = $db->query($query);
							
							for ($i=0; $i <$num_results; $i++) 
							{
								$row = $result->fetchRow(MDB2_FETCHMODE_ASSOC);
								echo "<p><strong>".($i+1).". Wood ID: ";
								echo htmlspecialchars(stripslashes($row['id']));
								echo "</strong><br />Wood Name: ";
								echo stripslashes($row['wood_name']);
								echo "<br />Wood Quality: ";
								echo stripslashes($row['wood_quality']);
								echo "<br />Wood Price: ";
								echo stripslashes($row['wood_price']);
								echo "</p>";
								}
					}
					else
						if($wood == "beech")
						{
					 
						 $q = 'SELECT * FROM items WHERE'.$wood;
								$result=mysql_query($q);
								
							if ($result) 
							{
								echo $q->getMessage();
								exit;
							}
							// get number of returned rows
							$num_results = $result->numRows();
							//$result = $db->query($query);
							
							for ($i=0; $i <$num_results; $i++) 
							{
								$row = $result->fetchRow(MDB2_FETCHMODE_ASSOC);
								echo "<p><strong>".($i+1).". Wood ID: ";
								echo htmlspecialchars(stripslashes($row['id']));
								echo "</strong><br />Wood Name: ";
								echo stripslashes($row['wood_name']);
								echo "<br />Wood Quality: ";
								echo stripslashes($row['wood_quality']);
								echo "<br />Wood Price: ";
								echo stripslashes($row['wood_price']);
								echo "</p>";
							}
						}
						else 
							if($wood == "birch")
							{
					 
								$q = 'SELECT * FROM items WHERE'.$wood;
								
								$result=mysql_query($q);
							
								if ($result) 
								{
									echo $q->getMessage();
									exit;
								}
								// get number of returned rows
								$num_results = $result->numRows();
								//$result = $db->query($query);
							
								for ($i=0; $i <$num_results; $i++) 
								{
									$row = $result->fetchRow(MDB2_FETCHMODE_ASSOC);
									echo "<p><strong>".($i+1).". Wood ID: ";
									echo htmlspecialchars(stripslashes($row['id']));
									echo "</strong><br />Wood Name: ";
									echo stripslashes($row['wood_name']);
									echo "<br />Wood Quality: ";
									echo stripslashes($row['wood_quality']);
									echo "<br />Wood Price: ";
									echo stripslashes($row['wood_price']);
									echo "</p>";
								}
							}
							else 
								if($wood == "cedar")
								{
					 
									 $q = 'SELECT * FROM items WHERE'.$wood;
											$result=mysql_query($q);
											
									if ($result) 
									{
									echo $q->getMessage();
									exit;
									}
									// get number of returned rows
									$num_results = $result->numRows();
									//$result = $db->query($query);
									
									for ($i=0; $i <$num_results; $i++) 
									{
										$row = $result->fetchRow(MDB2_FETCHMODE_ASSOC);
										echo "<p><strong>".($i+1).". Wood ID: ";
										echo htmlspecialchars(stripslashes($row['id']));
										echo "</strong><br />Wood Name: ";
										echo stripslashes($row['wood_name']);
										echo "<br />Wood Quality: ";
										echo stripslashes($row['wood_quality']);
										echo "<br />Wood Price: ";
										echo stripslashes($row['wood_price']);
										echo "</p>";
									}
								}
								else
									if($wood == "redwood")
									{
									 
									 $q = 'SELECT * FROM items WHERE'.$wood;
									  $result=mysql_query($q);
											
									    if ($result) 
										{
											echo $q->getMessage();
											exit;
										}
											// get number of returned rows
											$num_results = $result->numRows();
											//$result = $db->query($query);
											
										for ($i=0; $i <$num_results; $i++) 
										{
										 $row = $result->fetchRow(MDB2_FETCHMODE_ASSOC);
											echo "<p><strong>".($i+1).". Wood ID: ";
											echo htmlspecialchars(stripslashes($row['id']));
											echo "</strong><br />Wood Name: ";
											echo stripslashes($row['wood_name']);
											echo "<br />Wood Quality: ";
											echo stripslashes($row['wood_quality']);
											echo "<br />Wood Price: ";
											echo stripslashes($row['wood_price']);
											echo "</p>";
										}
									}
									else 
										if($wood == "hemlock")
										{
										 
										 $q = 'SELECT * FROM items WHERE'.$wood;
										   $result=mysql_query($q);
												
											if ($result) 
											{
												echo $q->getMessage();
												exit;
											}
												// get number of returned rows
												$num_results = $result->numRows();
												//$result = $db->query($query);
												
											for ($i=0; $i <$num_results; $i++) 
											{
												$row = $result->fetchRow(MDB2_FETCHMODE_ASSOC);
												echo "<p><strong>".($i+1).". Wood ID: ";
												echo htmlspecialchars(stripslashes($row['id']));
												echo "</strong><br />Wood Name: ";
												echo stripslashes($row['wood_name']);
												echo "<br />Wood Quality: ";
												echo stripslashes($row['wood_quality']);
												echo "<br />Wood Price: ";
												echo stripslashes($row['wood_price']);
												echo "</p>";
											}
										}
										else
											if($wood == "fir")
											{
											 
											 $q = 'SELECT * FROM items WHERE'.$wood;
													$result=mysql_query($q);
													
													if ($result) 
													{
													echo $q->getMessage();
													exit;
													}
													// get number of returned rows
													$num_results = $result->numRows();
													//$result = $db->query($query);
													
													for ($i=0; $i <$num_results; $i++) 
													{
														$row = $result->fetchRow(MDB2_FETCHMODE_ASSOC);
														echo "<p><strong>".($i+1).". Wood ID: ";
														echo htmlspecialchars(stripslashes($row['id']));
														echo "</strong><br />Wood Name: ";
														echo stripslashes($row['wood_name']);
														echo "<br />Wood Quality: ";
														echo stripslashes($row['wood_quality']);
														echo "<br />Wood Price: ";
														echo stripslashes($row['wood_price']);
														echo "</p>";
													}
											}
											else
											   if($wood == "spruce")
												{
												 $q = 'SELECT * FROM items WHERE'.$wood;
														$result=mysql_query($q);
														
														if ($result) 
														{
														echo $q->getMessage();
														exit;
														}
														// get number of returned rows
														$num_results = $result->numRows();
														//$result = $db->query($query);
														
														for ($i=0; $i <$num_results; $i++) 
														{
															$row = $result->fetchRow(MDB2_FETCHMODE_ASSOC);
															echo "<p><strong>".($i+1).". Wood ID: ";
															echo htmlspecialchars(stripslashes($row['id']));
															echo "</strong><br />Wood Name: ";
															echo stripslashes($row['wood_name']);
															echo "<br />Wood Quality: ";
															echo stripslashes($row['wood_quality']);
															echo "<br />Wood Price: ";
															echo stripslashes($row['wood_price']);
															echo "</p>";
															}
												}
												else
												{
												    exit;
												}
					
		}



   }
?>
