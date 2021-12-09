<?php
$name = $_POST['name'];
$matricnum = $_POST['matricnum'];
$dept = $_POST['dept'];
$class = $_POST['class'];

$userdata = "\r\n $name, $matricnum, $dept, $class \r\n";

$myfile = fopen("test.txt", "a") or die("Unable to open file!");
fwrite($myfile, $userdata);
fclose($myfile);
header('location: index.php');
?>