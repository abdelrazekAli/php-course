
<!DOCTYPE html>
<html>
	<head>
		<title>Fucken PHP</title>
	</head>
	<body>
	<?php
	if(!isset($_POST['submit']))
	{
		?>
	<h3>What's Your Favourite City</h3>	

	<form method = "POST" action="ex.php">
		<select name="city">
			<option value="zag">Zagazig</option>
			<option selected value="cairo">Cairo</option>
		</select>
		<input type="submit" name="submit" value="go">
	<?php
}else
{
$city = $_POST['city'];
switch($city){
case 'zag':
echo "Zag is Beautiful";
break;

case "cairo":
echo "cairo is Good";
break;
deafault:
echo "Sorry";
break;}
}
?>
		
	</form>
	</body>
</html>