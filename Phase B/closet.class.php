<?php
class closet extends furniture
{
	public $closetType,$woodType;
	function __constructor($closetType,$woodType)
	{
	     $this->closetType=$closetType;
		 $this->woodType=$woodType;
	}
	
	//set the variable
	function setClosetType($closetType)
	{
		$this->closetType=$closetType;
	}
	
	function setWoodType($woodType)
	{
	   $this->woodType = $woodType;	
	}
	
	//get the variables
	function getClosetType()
	{
	     return $this->closetType;	
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
		   
		   getClosetType() = addslashes(getClosetType());
		   getWoodType() = addslashes(getWoodType());
		   getType() = addslashes(getType());
			
	    }
		
    		$db = new mysqli('localhost', 'root', ' ','usermanage');
   
		if (mysqli_connect_errno())
		{
		 echo "<p> ". "Error: Could not connect to database.  Please try again later."."</p> ";
		 exit;
		}
		
	  $query = "insert into closet values('".getClosetType()."','".getWoodType()."','".getType()."')";
	  $result = $db->query($query);
	  
	  return $result;
	}
}

?>