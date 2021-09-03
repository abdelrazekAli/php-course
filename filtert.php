<?php
	
	$input =  $_POST['user'];
	$AlwaysgoodInput = filter_var($input, FILTER_SANITIZE_NUMBER_INT);
	if (filter_var($AlwaysgoodInput, FILTER_VALIDATE_INT,
		 array(
		 	'options' => array('min_range' => 1,'max_range' => 999) ,
		 	'flags' => FILTER_FLAG_ALLOW_HEX
		 )
	))
	{
		echo "Good";
	}
	else
	{
		echo "Bad";
	}
	//Revise Types of Filters from php manual
