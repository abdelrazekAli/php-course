<?php
$GLOBALS['name'] = "Abdo";

function test()
{
	echo $GLOBALS['name']. "</br>";

}
test();
$admins = array("Abdo", "Ali", "Ahmed");
$userName = $_POST['name']; //$_GET
if ( in_array($userName,$admins))
	echo "Welcome To Control Panel For Admin".'<br>';
	echo "You Use " . $_SERVER['REQUEST_METHOD'] ." Method To Send The Data <br>";

?>
<a href="<?php echo $SERVER['PHP_SELF'];?>" >Click</a> <!-- Self link "For More Go To Php Manual" -->
