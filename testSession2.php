<?php
	session_start();
	echo "Hello " . $_SESSION['userName'] . "</br>";
	echo "Your Favourite Sport Is " . $_SESSION['favSport'];
	session_unset();
	session_destroy();