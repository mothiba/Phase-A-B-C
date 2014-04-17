<?php
class mirror extends furniture
{
	public $mirrorType,$woodType;
	function __constructor($mirrorType,$woodType)
	{
	     $this->mirrorType=$mirrorType;
		 $this->woodType=$woodType;
	}
	
	//set the variable
	function setMirrorType($mirrorType)
	{
		$this->mirrorType=$mirrorType;
	}
	
	function setWoodType($woodType)
	{
	   $this->woodType = $woodType;	
	}
	
	//get the variables
	function getMirrorType()
	{
	     return $this->mirrorType;	
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
		   
		   getMirrorType() = addslashes(getMirrorType());
		   getWoodType() = addslashes(getWoodType());
		   getType() = addslashes(getType());
			
	    }
		
    		$db = new mysqli('localhost', 'root', ' ','usermanage');
   
		if (mysqli_connect_errno())
		{
		 echo "<p> ". "Error: Could not connect to database.  Please try again later."."</p> ";
		 exit;
		}
		
	  $query = "insert into mirror values('".getMirrorType()."','".getWoodType()."','".getType()."')";
	  $result = $db->query($query);
	  
	  return $result;
	}
}

?>