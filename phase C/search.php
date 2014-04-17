<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
function MM_jumpMenuGo(objId,targ,restore){ //v9.0
  var selObj = null;  with (document) { 
  if (getElementById) selObj = getElementById(objId);
  if (selObj) eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0; }
}
</script>
<?php
       require "Search.class.php";
	   require  "Cart.class.php";
	   
	   $cart = new Cart();
	   $search = new SearchItem;
	   
	   $jump1 = $_POST['jumpMenu'];
	   $jump2 = $_POST['jumpMenu2'];
	   
	   if(isset($_POST['go_button']))
	   {
		   $search->Table($jump1);
		   }
		   else if(isset($_POST['go_button2']))
		   {
			   $search->wood($jump2);
			   }
			   
		if(isset($_POST['view_cart']))
		{
			$cart->view();
			}	   
	
	   

?>
</head>

<body>
<form id="form1" name="form1" method="post" action="search.php">
  <p>&nbsp;</p>
  <p align="center"> <label for="jumpMenu">search table: </label>
    <select name="jumpMenu" id="jumpMenu">
      <option value="picnic"> picnic table</option>
      <option value="dining">dining table</option>
      <option value="bedside">bedside table</option>
      <option value="coffee">coffee table</option>
      <option value="refectory">refectory table</option>
      <option value="workbenches">workbenches table</option>
    </select>
    <input type="button" name="go_button" id= "go_button" value="Go" onclick="MM_jumpMenuGo('jumpMenu','parent',0)" />
  </p>
  <p align="center"><label for="jumpMenu2">search wood: </label>
    <select name="jumpMenu2" id="jumpMenu2">
      <option value="pine">pine</option>
      <option value="ash">ash</option>
      <option value="hichory">hichory</option>
      <option value="beech">beech</option>
      <option value="birch">birch</option>
      <option value="cedar">cedar</option>
      <option value="redwood">redwood</option>
      <option value="hemlock">hemlock</option>
      <option value="fir">fir</option>
      <option value="spruce">spruce</option>
    </select>
    <input type="button" name="go_button2" id= "go_button2" value="Go" onclick="MM_jumpMenuGo('jumpMenu2','parent',0)" />
  </p>
  <p align="center">
    <input type="submit" name="view_cart" id="view cart" value="view cart" />
  </p>
  <p>&nbsp;</p>
</form>
</body>
</html>