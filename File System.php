<?php
$file = "abdoo.txt";
if(file_exists($file))

	{echo "File " . $file . " Is Found<br/>";
	file_put_contents($file, "Written By PHP");}

else
	{echo "Sorry " . $file . " Is Not Found But I Created It With PHP<br/>";
	file_put_contents($file, "Written By PHP");}

$f = "abdo.txt";
if(is_writable($f))

	{echo "File " . $f . " Is Writeable<br/>";
	file_put_contents($f, "Written By PHP");}

else
	echo "Sorry " . $f . " Is Not Writeable<br/>";
	

is_dir("moh"); //check Folder
mkdir("moh"); //make New Folder With Name "moh"
rmdir("moh"); //remove Folder   ~~~~~~~~~~~~~~
echo dirname(__FILE__ , 3) . "<br/>";// to print dir ("path", level) === __DIR__
echo basename(__FILE__ ). "<br/>"; // to print file name
echo basename(__FILE__ , ".php"). "<br/>"; // to print file name
chmod( "abdoo.txt", 0444); // Make A File Read Only
chmod( "abdoo.txt", 0755); // Remove Read Only Mode
file_put_contents("abdoo.txt","New text", FILE_APPEND); //Add text to the end of file
echo file_get_contents("abdoo.txt",false,NULL,0,11)."<br/>"; //(path, include_path, context, start, length)
copy(__FILE__, basename(__FILE__).".bak"); //copy(old, new)
mkdir("backup");
rmdir("backup");// remove unempty folder
//unlink('ab.txt');// remove writtable file
// rename(__FILE__, __DIR__ . "/backup/backup.bak"); //to rename or move
print_r (pathinfo(__FILE__));//pathinfo worked as  a array
echo "</br>". pathinfo(__FILE__, PATHINFO_FILENAME); //pathinfo(path, options)
$link = __DIR__ . "/mh";
$files = scandir($link , SCANDIR_SORT_NONE);
foreach($files as $file)
{
	if (is_file($link . "/" . $file))
	{
		unlink($link . "/" . $file);
	}
}
$fileHandle = fopen('abdo.txt', 'r+');//fopen(filename, mode) modes :Go To Php Manuals
$content = fread($fileHandle, 10); //fread(handle, length)
echo "<br>". $content . "<br>";
$content = fread($fileHandle, filesize('abdo.txt'));
fwrite($fileHandle, " This Is New Text"); //fwrite(handle, string)
fseek($fileHandle, 3); //To Move The Pointer Into index 3
fwrite($fileHandle, 't'); 
fclose($fileHandle);

?>