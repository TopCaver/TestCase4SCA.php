<?php
/**
 * Test Case For SCA Tools
 * 
 * Test Unit : SQL Injection
 * Test Series : 2
 *
 * Description:
 *     Test for non-vulnerability with pure php language.
 *     These vul. must ~NOT~ be detected.
 *
 * @author: topcaver@gmail.com
 * 
 */

// MySQL
$link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password')
    or die('Could not connect: ' . mysql_error());
mysql_select_db('my_database') or die('Could not select database');

// Test Case 1~2:
$result = mysql_query("SELECT * FROM example_table WHERE id = " . (int)$_GET['id']); 
$result = mysql_query("SELECT * FROM example_table WHERE id = " . mysql_real_escape_string($_GET['id']));

mysql_free_result($result);
mysql_close($link);

// SQLite with PDO prepare
$dbh = new PDO("sqlite:example.db");
// Test Case 3:
$sql = "SELECT * FROM example_table WHERE id = ?";
$sth = $dbh->prepare($sql);
$sth->exec(array($_GET['id']));
$result = $sth->fetchAll();