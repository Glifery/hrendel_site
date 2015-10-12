<?php

require 'mysql.php';

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
$selected = mysql_select_db('hrendel_site', $dbhandle);