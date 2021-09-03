<?php
/*function sayHello($name, $age="Unknown")
{
	return "Hello " . $name . " ,Your Age Is " . $age . "</br>";
}
echo sayHELLO("Abdoo", 20); //Not Case Senstive

*/
function getTicket($name , $age)
{
	if ($age >= 18 )
	{
		$msg  = "<div class = 'get_ticket'>";
		$msg .= "Hello " . $name . " ,Your Age Is " . $age . "</br>";
		$msg .= "Your Ticket ID Is " . "<span>" . rand(1000, 99999) . "</span>". "</br>"; //To Get A Random Number From  1000 : 99999
		$msg .= "</div>";
	}
	else
	{
		$msg  = "<div class = 'get_ticket'>";
		$msg .= "Hello " . $name . " ,Your Age Is " . $age . "</br>";
		$msg .= "Sorry , You Are Not Qualified" . "</br>";
		$msg .= "</div>";

	}
	return $msg;
}


?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Function Project</title>
		<style>
			.get_ticket 
				{
					padding:  10px;
					margin:  20px auto;
					font-family: tahoma,Arial;
					border: 1px solid #CCC;
					text-align: center;
					line-height: 2;
					border-radius: 10px;
					width: 500px;
					background-color: #e9e9e94f;
	
				}
			.get_ticket span{color: red;font-weight: bold}
		</style>
	<body>
		<?php echo getTicket("Abdo",20); ?>
	</body>
	</head>
	
</html>