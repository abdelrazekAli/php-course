<?php
$name = "Abdoo";
echo "My Name is " . $name;
$languages  = "<ul>";
$languages .= "<li>Html</li>";
$languages .= "<li>Css</li>";
$languages .= "</ul>";
echo "<h3>Get Type</h3><br/>";
echo gettype($name);
echo "<h3>Var_dump</h3><br/>";
var_dump($name);
$var3 = FALSE ;
echo "<br/>" ;
var_dump($var3);
echo __FILE__;
echo "<br/>";
echo __DIR__;
echo "<br/>";
echo __LINE__;
echo "<br/>";
/*
* Syntax of Constant : define(name, value, case_Insesenitive )
  by default false
* Another Syntax of Constant : const name = value <Not Preffered>
*/
define("job","Web Developer",true);
echo JOB;

const hobby = "gym";
echo "<br/>";
echo hobby;



?>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP Course</title>
	</head>
	<body>
		<h3>Languages</h3>
		<?php echo $languages; ?>
	</body>
</html>