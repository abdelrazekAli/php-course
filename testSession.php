<?php
	
	session_start();

	echo "Hello ".$_SESSION['userName'] . '</br>' . "Your Favourite Sport Is " . $_SESSION['favSport'];
	$_SESSION['favSport'] = 'Bodybuilding';
	echo "<a href = 'testSession2.php'>Go To Page 2</a>";
	    	include 'c.php';
