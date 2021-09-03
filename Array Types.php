<?php
$students = array("Loay","Ehab","Saad"); //Indexed Array
$students[]="Mohamed"; //To Add Element In End of Array
$students[0]="Amr"; //To Add Element In 0 indexed of Array

echo "<pre>"; //html tag to make A Readble Print
print_r ($students); //Way1 To Print Indexed Array Elements
echo "</pre>";
echo "<ul>";

foreach ($students as $student) //Way2 To Print Indexed Array Elements
{
	echo "<li>" . $student ."</li" ."<br>";
}

echo "</ul>";

echo "<ul>";

for ($i =0 ; $i< count($students) ; $i++) //Way3 To Print Indexed Array Elements
{
	echo "<li>" . $students[$i] ."</li>" ."<br>";
}

echo "</ul><br>";



$teachers = array(		//Associative Array
	"Noha" => "60%",
	"Doaa" => "70%",
	"Mona" => "50%",
	"Asmaa" => "90%"
);
$teachers["Wafaa"] = "75%";
foreach($teachers as $teacher => $progress)
{
	echo $teacher . $progress . "<br>";
}

$teachers = array(		//Multidimisional Array
	"Noha" => array("69%", "40%", "30%"),
	"Doaa" => array("69%", "40%", "30%"),
	"Mona" => array("69%", "40%", "30%"),
	"Asmaa" => array("69%", "40%", "30%")
);
echo $teachers["Noha"][0];
foreach($teachers as $teacher => $progress)
{
	  echo $teacher. "<br>";
		foreach( $progress as $item)
	  {
		echo $item . "<br>";
	  }
}
?>