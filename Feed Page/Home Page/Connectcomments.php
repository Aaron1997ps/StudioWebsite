<?php


$user = 'root';
$pass = '';
$db = 'commentdatabase';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

echo "Great Work!!";


?>
