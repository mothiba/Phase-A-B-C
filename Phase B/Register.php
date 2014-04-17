<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet"  />
<?
	   $fname = $_POST['Fname'];
	   $Lname = $_POST['Lname'];
	   $Password = $_POST['passWord'];
	   $Email = $_POST['Email'];
	   $CPassword =$_POST['ConformPassword'];
?>
<?php

		//print($name.""."you are successfully registered ");
		require "Register.class.php";
		
	  

if (!$fname||!$Lname||!$Password||!$CPassword||!$Email)
 {
     echo "ERROR: Enter valid information";
	 
     exit;
	 
  }
 
	  
	
  $reg = new Register;
  
  
  if(isset($_POST['submit']))

  {
	  $reg->PasswordManagement($Password);
	  
	  if($Password==$CPassword)
	  {
		  echo $reg->EmailManagement($Email);
	     echo $reg-> connectDB($Fname,$Lname,$Email,$Password,$CPassword);
		//echo $reg-> insert($Fname,$Lname,$Email,$Password,$CPassword)." <br />";
		$reg->closeBD();
		}
		else
		{
			echo'ERROR:PASSWORD DOESNT MATCH';
			}
		}
	  
		
	


?>
<title>Untitled Document</title>
</head>

<body class="code">
<form name="form1" method="post" action="Register.php">
  <p>&nbsp;</p>
  <div class="table-responsive ">
  <div class="table-responsive:first-child">
  <table width="307" border="1" align="center" class="table">
    <tr>
      <td width="147">First Name</td>
      <td width="144"><label for="Fname"></label>
      <input type="text" name="Fname" id="Fname" class="textarea" /></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td><label for="Lname"></label>
      <input type="text" name="Lname" id="Lname" class="textarea" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="Email"></label>
      <input type="text" name="Email" id="Email" class="textarea" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="passWord"></label>
      <input type="password" name="passWord" id="passWord" class="textarea" /></td>
    </tr>
    <tr>
      <td>Confirm password</td>
      <td><label for="ConformPassword"></label>
      <input type="password" name="ConformPassword" id="ConformPassword" class="textarea" /></td>
    </tr>
    <tr>
   
      <td colspan="2"><input type="submit" name="submit" id="submit" value="Submit" class="btn-default:hover,btn-default:focus" /></td>
    </tr>
  </table></div></div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>


</body>
<script type="javasrcpt" src="js/bootstrap.min.js"></script>
<script type="javascrpt" src="js/jquery.js"></script>
</html>