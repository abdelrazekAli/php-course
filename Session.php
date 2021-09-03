    <?php


    	session_start();
    	$_SESSION['userName'] = 'Abdo';
    	$_SESSION['favSport'] = 'Gym';
    	echo "<a href = 'testSession.php'>Go To Page1</a>";
    	include 'c.php';