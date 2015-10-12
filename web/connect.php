<?php

require 'mysql.php';

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
mysql_set_charset('utf8', $dbhandle);
$selected = mysql_select_db('hrendel_site', $dbhandle);