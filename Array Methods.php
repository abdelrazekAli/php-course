<?php
/*   	    Start Search     	  */

$students = array("Loay","Ehab","Saad",6);
if (in_array("Loay",$students,true))
{
	echo "Yes It Exist<br>";
};
if (array_key_exists(1,$students)) //search For Index
{
	echo "Yes It Exist<br>";
};
echo array_search("Saad", $students,true);

/*    	   End Search       	*/
/*    	   Start Add     	  */

array_push($students, "Aliaa","Mena"); //Add Elements In The End 
array_unshift($students, "Mona"); //Add Elements In The Front 
print_r ($students);
echo "<br><br>";

/*    	   End Add   	    */
/*   	    Start Remove     	  */

$lastElement = array_pop($students);  //Remove Elements From The End
$firstElement = array_shift($students);//Remove Elements From The Front 
print_r ($students);
echo "<br><br>";


/*    	   End Remove   	    */
/*   	    Start Sort     	  */
sort($students); //Ordinary Sort
rsort($students); //Reverse Sort
print_r ($students);
echo "<br><br>";

/* In Associative Array
* asort: for sort associative array(key and value)
* sort : for sort only value
* ksort: for sort only key
*/

/*   	    End Sort     	  */
/*   	    Start reverse & shuffle    	  */

$r = array_reverse($students,true); //(array,preserve) true to keep index(key) ,default = false

print_r ($r);
shuffle($students); //random Element Of Array
print_r ($students); 
echo "<br><br>";


/*   	    End reverse & shuffle    	  */

$array = array_fill(1,10,"Abdo"); //(index , number, value)
print_r($array);
echo "<br><br>";
echo array_sum($students); //Return sum Of Numbered Elements (Ignore String)
$randomIndex = array_rand($students,2); // Return 2 Random Index 
echo $students[$randomIndex[0]];
array_unique($students);// Remove Repetive Elements











