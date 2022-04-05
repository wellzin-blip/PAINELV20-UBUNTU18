<?php
require_once("pages/system/pass.php");
$user = "plus";
$host = "localhost";
$dbname = "plus";

$sql_file = fopen('plus.sql', 'r');
$sql = fread($sql_file, filesize('plus.sql'));
$conn = new PDO("mysql:host=" . $host . ";dbname=" . $dbname , $user, $pass);
$conn->exec($sql); ?>