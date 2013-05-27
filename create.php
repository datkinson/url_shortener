<?php
echo sqlite_libversion();
/*
echo "<br>";
echo "Creating database";

$dbhandle = sqlite_open('url.db', 0666, $error);
if (!$dbhandle) die ($error);

$stm = "CREATE TABLE shorten(Id text PRIMARY KEY, url text UNIQUE NOT NULL";
$ok = sqlite_exec($dbhandle, $stm, $error);

if (!$ok)
   die("Cannot execute query. $error");

echo "Database shorten created successfully";

sqlite_close($dbhandle);
*/
?>