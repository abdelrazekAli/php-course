<?php
setcookie("color", "Test2", time() + 3600, "/", "localhost", TRUE, TRUE);
//(name, value, expire, path, domain , secure , httponly)

if (count($_COOKIE) >0)

{	echo "Good The Cookies Are Enabled</br>";}

else

{	echo "Sorry The Cookies Are Not Enabled</br>";}

$mainColor = "#FFF";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$mainColor = $_POST['color'];
	setcookie('background' , 'mainColor', time()+3600, '/');

}
if (isset($_COOKIE['background']))
{
	$body = $_COOKIE['background'];
}
else 
{
	$body = $mainColor;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cookies</title>
	</head>
	<body style="background-color: <?php echo $body; ?>">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
			<input type="color" name="color">
			<input type="submit" value="Choose" >
		</form>

	</body>
</html>