<?php
/**
 * Test Case For SCA Tools
 * 
 * Test Unit : XSS
 * Test Series : 3
 *
 * Description:
 *     Test for vulnerability with pure php language.
 *     These input data filtered by some WRONG function, 
 * so they also have some vulnerabilities.
 *     These vul. must be detected.
 *
 * @author: topcaver@gmail.com
 * 
 */

// Test Case 1:
$tainted_get_var = $_GET['id']; // tainted by user input
echo('Test Case ' . mysql_escape_string($tainted_get_var)); 