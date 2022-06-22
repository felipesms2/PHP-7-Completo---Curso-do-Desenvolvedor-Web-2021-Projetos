<?php
$file = fopen('fileTest.txt', 'r');
echo fread($file, 10);  // 10 determines bites num to read
echo '<br>';
echo fread($file, 10);
fclose($file);

echo '<hr>';

$file = fopen('fileTest.txt', 'r');
$sizeFile = filesize('fileTest.txt');
echo $sizeFile, '<br>';
echo fread($file, $sizeFile);
fclose($file);

echo '<hr>';

$file = fopen('fileTest.txt', 'r');
echo fgets($file), '<br>'; //Fgets read the whole line starting from first
echo fgets($file), '<br>'; // Fgets again in the same var read the next
var_dump(fgets($file));
echo '<br>';
fclose($file);

echo '<hr>';

$file = fopen('fileTest.txt', 'r');
while(!feof($file)) {
    echo fgets($file), '<br>';
}
fclose($file);

echo '<hr>';
$file = fopen('fileTest.txt', 'r');
// function to read de whole file lines
while(!feof($file)) {
    echo fgetc($file);
}
// fgetc to read specifc file
echo '<br>';
fclose($file);

echo '<hr>';

$file = fopen('fileTest.txt', 'r+'); /*Open in read and write mode*/ 
echo fgets($file), '<br>';
echo fgets($file), '<br>';
fwrite($file, "\n Added during the ----");
fclose($file);

echo "END!";
