<?php
$user = 'rool';
$pass = '';
$db = 'library';

$db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

echo"Great work";
?>