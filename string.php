<?php
$str = "I Love My Friends";
$arr= (explode(" ", $str, 9));//Convert String To Array (Seprator, string, limit)limit => positve or zero or Negative numbers
$str2 = implode(" & ",$arr); //Convert  Array To String (Seprator,array)
echo $str2;
$str2 = join(" & ",$arr); // join === implode
echo $str2;
print_r(str_split($str2,1)); // Convert String To Charcter Array(string, length)
echo chunk_split($str2, 2 , " "); // To Cut String Into pieces (string , length , end)
$s= "I \rAdmire\n Js"; // /n,/r DIDn't Affect String
$s= str_replace(array("Js") , array("PHP"), $s, $i);// (search, replace, string, count) count => NUMBER Of replaced
echo $s;
echo $s =str_repeat($s,2); //repeat(string,repeat)
echo $s =str_shuffle($s); //Random(string)
echo strlen($s); //length of string
echo "<br><br><br><br>";
$test = "I Want To School At 6 O'Clock";
$test = addslashes($test);//Make A Skip \ before Risk Charactres For Security
echo $test;
stripslashes($test); // Inverse Of addslashes(Remove \)
echo "<br><br><br><br>";
$test2= "I am <b>19</b> <a href = 'yrars.net'>Yesrs</a> <i>Old</i>";
echo $test2 . "<br>";
$test2 = strip_tags($test2, "<b><i>");  // Remove All Tags (Str , allow)
echo $test2 ;

/*
* strtolower(str)
* strtoupper(str)
* lcfirst(str) => Make First char of Str lower
* ucfirst(str) => Make First char of Str Upper
* ucwords(str) => Make First char of Words Upper
*/
/*
* \t tab
* \n new line
* \0 null
* \x0B veticle tab
*/
$sz= "      I     Want To Sc  hool";

$tr = trim($sz); //trim string(str, charlist)
echo $tr;

echo "<br><br>";
$testwc= "I Love Php";
print_r ($testwc = str_word_count($test,1));
/*
str_word_count(str, format, charlist)
format
◦ 0 - returns the number of words found  
◦ 1 - returns an array containing all the words found inside the string  
◦ 2 - returns an associative array
charlist
A list of additional characters which will be considered as 'word'
*/
$link = "name=abdoo&\nage=20";
parse_str($link); //link To String(str, "name Of array"to convert To array)
echo $name;
echo nl2br($link); //active \n
echo strpos($link, "abdoo");//(str, find , start) stripos() to caseinsenstive , strrpos, strripos
$email = "abdo@gmail.com";
$email = strstr($email, "@", false); //use true to print which before @ , stristr for case sensentive
echo $email;
$email = strchr($email, "@", false); //strchr === strstr
echo strcmp($link, $email); //Returns < 0 if str1 is less than str2; > 0 if str1is greater than str2, and 0 if they areequal
strncmp($link, $email, 4);//(str1, str2, length)
echo strrev($email); 
echo substr($email, 0, 4); //substr(str, start , length)
substr_count($email , "abdo", 0,10);//how much "abdo" repeated in $email
//substr_compare(str1,str2, pos, length , case)




?>
