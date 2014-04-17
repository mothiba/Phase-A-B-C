<?php
class chair extends furniture
{
	public $chairType,$woodType;
	function __constructor($chairType,$woodType)
	{
	     $this->chairType=$chairType;
		 $this->woodType=$woodType;
	}
	
	//set the variable
	function setChairType($chairType)
	{
		$this->chairType=$chairType;
	}
	
	function setWoodType($woodType)
	{
	   $this->woodType = $woodType;	
	}
	
	//get the variables
	function getChairType()
	{
	     return $this->chairType;	
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
		   
		   getChairType() = addslashes(getChairType());
		   getWoodType() = addslashes(getWoodType());
		   getType() = addslashes(getType());
			
	    }
		
    		$db = new mysqli('localhost', 'root', ' ','usermanage');
   
		if (mysqli_connect_errno())
		{
		 echo "<p> ". "Error: Could not connect to database.  Please try again later."."</p> ";
		 exit;
		}
		
	  $query = "insert into chair values('".getChairType()."','".getWoodType()."','".getType()."')";
	  $result = $db->query($query);
	  
	  return $result;
	}
}

?>