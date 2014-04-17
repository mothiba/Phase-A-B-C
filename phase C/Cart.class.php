<?php
//if a user click buy it must be stored into a database as a user cart
class Cart extends Register
{
	//require "Register.class.php";
	public $price,$quality,$date,$product;
	function __constructor($price,$quality,$date,$product)
	{
		$this->price=$price;
		$this->quality=$quality;
		$this->date=$date;
		$this->product = $product;
	}
     function database()
	 {
	     mysql_connect('localhost', 'root', '','management');
		 mysql_select_db('management');	 
	 }
	 function usercart($username)
	 {
		 print " ".connectDB();
		 
		 $q = "insert into cart values '(".$quality."','".$product."','".$price."','".$date."','"."where user_name = ".$username.")'";
		 
		 mysql_query($q);
		 
		 
	  }



//if a user clicks view cart then it must retrieve everything
    function view()
	{
	    
		$q = "SELECT * FROM cart";
		
		mysql_query($q);
		
			
		
	}

}

?>