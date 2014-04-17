<?php
class Authentication
 {
	function Authentication()
	{
	mysql_connect('localhost', 'user', '');
	mysql_select_db('management');
	}
	
	public function addUser($email, $password)
	{
		$q = 'INSERT INTO users(email, passwd) VALUES ("'. $email. '", "'. sha1($password).'")';
		mysql_query($q);
	}
	
	public function authUser($email, $password)
	{
		$q = 'SELECT * FROM users WHERE email="'. $email. '"AND passwd ="'. sha1($password). '"';
		$r = mysql_query($q);
		
		if (mysql_num_rows($r) == 1) 
		{
			return TRUE;
		} 
		else
		{
			return FALSE;
		}
	}
}
?>