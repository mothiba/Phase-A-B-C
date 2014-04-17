<?php
class Register
{
    
	public $db;
	
  function connectDB($Fname,$Lname,$Email,$Password,$CPassword)
  {
	    if (!get_magic_quotes_gpc())
		{
		   $Fname = addslashes($Fname);
		   $Lname = addslashes($Lname);
			$Password = addslashes($Password);
			$CPassword = addslashes($CPassword);
			$Email= addslashes($Email);
	    }
		
    $db = new mysqli('localhost', 'root', ' ','usermanage');
   
    if (mysqli_connect_errno())
    {
     echo "<p> ". "Error: Could not connect to database.  Please try again later."."</p> ";
     exit;
    }
	
	  $query = "insert into userregistration values('".$Fname."','".$Lname."','".$email."','".$password."','".$ConfPass."')";
	  $result = $db->query($query);
	  return $result;
  }
  
  function PasswordManagement($password)
	  {
		  if(preg_match('%(a-zA-Z){0,9}%',$password) )
		  {
			  return true;
			  
		  }
		  else
		  {
			  return false;
			  }
			  
	  }
	  
	  function EmailManagement($email)
 	 {
	 
	  if(preg_match('%\(a-zA-Z){0,9}\.(a-zA-Z)\.(a-z)%',$email))
	  {
		  
		return true;
	   }
	   else
		{
			  return false;
		 }
	  
	  }

 function closeBD()
 {
   return $db->close();
 }
}
?>