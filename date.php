<?php
		error_reporting(0); //to stop all php message error

	echo date_default_timezone_get() . "</br>";
	date_default_timezone_set('Africa/Cairo');
    $nextMonth = time() + (30*24*60*60);
	echo date('Y-m-d  h:i:s') . "</br>";//current Date
	echo date('Y-m-d h:i:s', $nextMonth). "</br>";//Date After 1 month(for defferent Format Go To Manual)
	echo 'Copyright To Pro: Abdelrazek &copy 2019-' . date('Y')."</br>";
	$now = strtotime("now");
	echo date('Y-m-d  h:i:s', $now) . "</br>";//current Date

	/*echo strtotime("10 September 2000") ;
	echo strtotime("+1 day");
	echo strtotime("+1 week");
	echo strtotime("+1 week 2 days 4 hours 2 seconds");
	echo strtotime("next Thursday");
	echo strtotime("last Monday");*/
