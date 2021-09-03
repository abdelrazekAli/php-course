<?php
	
	if (empty($_SESSION))
		{$_SESSION['counter'] = 1;}
	else
		{$_SESSION['counter']++;}
	echo "</br>" . "<div>You Visit Our Website " . "<span style=' color: red; font-weight: bold'>" . $_SESSION['counter'] ."</span>". " Times</div>";
