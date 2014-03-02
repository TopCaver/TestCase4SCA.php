<?php
/**
 * Test Case For SCA Tools
 * 
 * Test Unit : SQL Injection
 * Test Series : 1
 *
 * Description:
 *     Test for vulnerability with pure php language.
 *     These vul. must be detected.
 *
 * @author: topcaver@gmail.com
 * 
 */

// MySQL
$link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password')
    or die('Could not connect: ' . mysql_error());
mysql_select_db('my_database') or die('Could not select database');

// Test Case 1~4:
$result = mysql_query("SELECT * FROM example_table WHERE id = " . $_GET['id']); 
$result = mysql_query("SELECT * FROM example_table WHERE id = " . $_POST['id']);
$result = mysql_query("SELECT * FROM example_table WHERE id = " . $_COOKIE['id']);
$result = mysql_query("SELECT * FROM example_table WHERE id = " . $_REQUEST['id']);

mysql_free_result($result);
mysql_close($link);

// SQLite with PDO
$dbh = new PDO("sqlite:example.db");
// Test Case 5~8:
$result = $dbh->query("SELECT * FROM example_table WHERE id = ". $_GET['id']); 
$result = $dbh->query("SELECT * FROM example_table WHERE id = ". $_POST['id']);
$result = $dbh->query("SELECT * FROM example_table WHERE id = ". $_COOKIE['id']);
$result = $dbh->query("SELECT * FROM example_table WHERE id = ". $_REQUEST['id']);

?>