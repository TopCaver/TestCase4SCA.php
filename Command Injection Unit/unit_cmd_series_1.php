<?php
/**
 * Test Case For SCA Tools
 * 
 * Test Unit : Command Injection Execution
 * Test Series : 1
 *
 * Description:
 *     Test for vulnerability with pure php language.
 *     These vul. must be detected.
 *
 * @author: topcaver@gmail.com
 * 
 */

// Test Case 1~4 : exec()
exec("cat /var/log/apache2/access.log | grep " . $_GET['id']);
exec("cat /var/log/apache2/access.log | grep " . $_POST['id']);
exec("cat /var/log/apache2/access.log | grep " . $_COOKIE['id']);
exec("cat /var/log/apache2/access.log | grep " . $_REQUEST['id']);

// Test Case 5~8: system()
system("cat /var/log/apache2/access.log | grep " . $_GET['id']);
system("cat /var/log/apache2/access.log | grep " . $_POST['id']);
system("cat /var/log/apache2/access.log | grep " . $_COOKIE['id']);
system("cat /var/log/apache2/access.log | grep " . $_REQUEST['id']);

// Test Case 9~12: passthru()
passthru("cat /var/log/apache2/access.log | grep " . $_GET['id']);
passthru("cat /var/log/apache2/access.log | grep " . $_POST['id']);
passthru("cat /var/log/apache2/access.log | grep " . $_COOKIE['id']);
passthru("cat /var/log/apache2/access.log | grep " . $_REQUEST['id']);
?>