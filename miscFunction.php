<?php
echo "Abdo"."</br>";
sleep(1);//sleep(seconds)
usleep(500000);//sleep(microseconds)
time_sleep_until(time()+1);//not perferred === sleep
echo "Hello</br>";
echo uniqid("Script1_", TRUE);
//to print random id uniqid(start, more random)
$handle = @fopen("abdoooo.txt", "r") or exit("Unable To find The File");
//exit === die
//add "@" to hide php error
function fileChk()
{
	if (file_exists(Abdelrazek.pch))
	{
		echo "good";
	}
	else
	{
		sleep(5);
		fileChk();
	}
}
fileChk();