<?php
/*	include        ("string.php");
	include_once   ("string.php"); 
	require        ("string.php");
	require_once   ("string.php"); //best of them
	echo $email;                 */
$lang = "Java Script";
switch($lang)
{
	case "PHP":
		echo "Your Favourite Language Is PHP<br/>";
		break;
	case "JS":
	case "Java Script":
		echo "Your Favourite Language Is JS<br/>";
		break;
	default:
		echo "Your Favourite Language Is Not Here<br/>";		
}



?>