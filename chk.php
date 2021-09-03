<?php
	session_start();
	$admins = array("abdo", "Ali", "Mahmoud");
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$user = $_POST['user'];
		if (in_array($user, $admins))
		{
			$_SESSION['user'] = $user;
			echo "Welcome Admin ". $_SESSION['user'] . " You Will Be Now Directly To Control Panel";
			header('REFRESH:2;URL=control.php');
		}
		else
			{echo "Sorry You Are Not Admin";}

	}
	else
	{
		echo "Sorry You Can\'t Brwose This Page Directly";
	}
