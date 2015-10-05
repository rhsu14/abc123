<?php

include 'Rating.php';
include 'sql_db.php';

$db = new sql_db();
 
$game = new \Rating\Rating(100,1000, 1, 0);
var_export($game);
?>
