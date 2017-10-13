<?php
require "File.php";
use api\File;


$monfichier = fopen('new.txt', 'w+');
$template = file_get_contents("test.txt");
fputs($monfichier, $template);

$user = "al2b";

$generate = new File($user);
$generate->writeApiUser();
$generate->writeRepos();