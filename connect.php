<?php
//Connect to database
$dbhost = '####';
$dbuser = '####';
$dbpass = '####';

$db = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $db){
	die('Could not connect: '.mysql_error());
}
mysql_select_db('shortener') or die('Could not select database');

?>
