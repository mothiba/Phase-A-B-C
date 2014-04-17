<?php
class table extends furniture
{
	public $tableType,$woodType;
	function __constructor($tableType,$woodType)
	{
	     $this->tableType=$tableType;
		 $this->woodType=$woodType;
	}
	
	//set the variable
	function setTableType($tableType)
	{
		$this->tableType=$tableType;
	}
	
	function setWoodType($woodType)
	{
	   $this->woodType = $woodType;	
	}
	
	//get the variables
	function getTableType()
	{
	     return $this->tableType;	
	}
	
	function getWoodType()
	{
	     return $this->woodType;	
	}
	
	//use abstract method to connect to DB
	function connectDB($type)
	{
		 if (!get_magic_quotes_gpc())
		{
		   
		   getTableType() = addslashes(getTableType());
		   getWoodType() = addslashes(getWoodType());
		   getType() = addslashes(getType());
			
	    }
		
    		$db = new mysqli('localhost', 'root', ' ','usermanage');
   
		if (mysqli_connect_errno())
		{
		 echo "<p> ". "Error: Could not connect to database.  Please try again later."."</p> ";
		 exit;
		}
		
	  $query = "insert into table values('".getTableType()."','".getWoodType()."','".getType()."')";
	  $result = $db->query($query);
	  
	  return $result;
	}
}

?>