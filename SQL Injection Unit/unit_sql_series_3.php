<?php
/**
 * Test Case For SCA Tools
 * 
 * Test Unit : SQL Injection
 * Test Series : 3
 *
 * Test for vulnerability with pure php language.
 *     These input data filtered by some WRONG function, 
 * so they also have some vulnerabilities.
 *     These vul. must be detected.
 *
 * @author: topcaver@gmail.com
 * 
 */

// MySQL
$link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password')
    or die('Could not connect: ' . mysql_error());
mysql_select_db('my_database') or die('Could not select database');

// Test Case 1:
$result = mysql_query("SELECT * FROM example_table WHERE id = " . htmlspecialchars($_GET['id'])); 
mysql_free_result($result);
mysql_close($link);

// SQLite with PDO
$dbh = new PDO("sqlite:example.db");
// Test Case 2:
$result = $dbh->query("SELECT * FROM example_table WHERE id = ". escapeshellarg($_GET['id'])); 

?>