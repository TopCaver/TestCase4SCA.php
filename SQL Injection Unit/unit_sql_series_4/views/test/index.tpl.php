<?php
$id = $this->data['id'];
// MySQL
$link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password')
    or die('Could not connect: ' . mysql_error());
mysql_select_db('my_database') or die('Could not select database');

// Test Case 1:
$result = mysql_query("SELECT * FROM example_table WHERE id = $id"); 

mysql_free_result($result);
mysql_close($link);

// SQLite with PDO
$dbh = new PDO("sqlite:example.db");
// Test Case 2:
$result = $dbh->query("SELECT * FROM example_table WHERE id = $id"); 

?>