<?php
 abstract class Faniture
{
	public $type,$title,$price,$quality,$date;
	function __constructor($type,$title,$price,$quality,$date)
	{
		$this->type=$type;
		$this->title=$title;
		$this->price=$price;
		$this->quality=$quality;
	}
	
	function setType($type)
	{
		$this->type=$type;
	}
	
	function setTitle($title)
	{
		$this->title=$title;
	}
	
	function setPrice($price)
	{
		$this->price=$price;
	}
	
	function setQuality($quality)
	{
		$this->quality=$quality;
	}
	
	function getType()
	{
		return $this->type;
	}
	
	function getTitle()
	{
		return $this->title;
	}
	
	function getPrice()
	{
		return $this->price;
	}
	
	function getQuality()
	{
		return $this->quality;
	}
	
	private function database()
	{
		 if (!get_magic_quotes_gpc())
		{
		   getPrice() = addslashes(getPrice());
		   getQuality() = addslashes(getQuality());
		   getTitle() = addslashes(getTitle());
		   getType() = addslashes(getType());
			
	    }
		
    $db = new mysqli('localhost', 'root', ' ','usermanage');
   
    if (mysqli_connect_errno())
    {
     echo "<p> ". "Error: Could not connect to database.  Please try again later."."</p> ";
     exit;
    }
	
	  $query = "insert into furniture values('".getPrice()."','".getQuality()."','".getTitle()."','".getType()."')";
	  $result = $db->query($query);
	  return $result;
	
	}
	
	abstract function connectDB($type);
	
}
?>