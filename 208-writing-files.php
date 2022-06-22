<?php

$fileJob = fopen('fileTest.txt', 'w');
fwrite($fileJob, "Start Value\n");
$str = "Second Line\n";
fwrite($fileJob, $str);
fclose($fileJob);

$fileJob = fopen('./fileTest.txt', 'w');
fwrite($fileJob, "New Content");
fclose($fileJob);

$fileJob = fopen('fileTest.txt', 'a');
fwrite($fileJob, " with new values\n");
fwrite($fileJob, "Added afetr create");
fclose($fileJob);

ini_set('display_errors', 1);
$fileJob = fopen('fileTest.txt', 'x');