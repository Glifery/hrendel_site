<?php
$username = "root";
$password = "QAnnNzZyv0";
$hostname = "localhost";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");

$selected = mysql_select_db('hrendel_site', $dbhandle);

$result = mysql_query('SELECT * FROM `category`');
$categories = array();
while ($row = mysql_fetch_array($result)) {
    $categories[$row['id']] = $row['name'];
}

?>




<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Заголовок</title>
    </head>
    <body>
        <div>
            <h1>Крутой магаз!</h1>
        </div>
        <p>Категории:</p>
        <ul>
            <?php
            foreach ($categories as $id => $name) {
                echo '<li><a href="/' . $id . '">' . $name . '</a></li>';
            }
            ?>
        </ul>
    </body>
</html>

