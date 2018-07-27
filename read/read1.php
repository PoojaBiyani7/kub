<?php
if(file_exists("newfile1.txt"))
{
$myfile=fopen("newfile1.txt","r");
echo fread($myfile,filesize("newfile1.txt"));
fclose($myfile);}
else 
{echo " file doesn't exists";
}
?>
