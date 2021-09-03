<?php

$langs = array("Html5", "Css3", "JS", "php");
echo "<ul>";
for($i=0 ; $i<count($langs) ; $i++)
{
	echo "<li>" . $langs[$i] . "</li>";
}
echo "</ul>";

echo "<br/>";


$i = 1;
for(;;)
{
	if($i>5){break;}
	echo $i . "</br>";
	$i++;
}
$a=0;
while($a<3)
{
	echo $a++ . "</br>";
}
$b=2;
do {echo $b++ . "</br>";}
while($b<8);

$friends = array("Ahmed","Ali","Mohamed"); //Indexed Array
foreach ($friends as $value)
{
	 echo $value . "</br>";
}
echo "</br></br>";

$friends = array("AR" => "Ahmed Ramy", 	 //Assocative Array
				 "YA" => "Youseef Ali",
				 "MN" =>"Mohamed Nor");

foreach ($friends as $key => $value)
{
	 echo $key . " => " . $value . "</br>";
}

?>

<select name="year">
	<?php
		for($year =2000 ; $year <=2020;$year++)
		{
			echo "<option value = $year>". $year . "</option>";
		}
	?>
</select>