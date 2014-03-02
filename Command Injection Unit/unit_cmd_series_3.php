<?php
/**
 * Test Case For SCA Tools
 * 
 * Test Unit : Command Injection Execution
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

// Test Case 1~2: exec()
exec("cat /var/log/apache2/access.log | grep ".addslashes($_GET['id']));
exec("cat /var/log/apache2/access.log | grep ".htmlspecialchars($_GET['id']));

// Test Case 3~4: system()
system("cat /var/log/apache2/access.log | grep ".addslashes($_GET['id']));
system("cat /var/log/apache2/access.log | grep ".htmlspecialchars($_GET['id']));

// Test Case 5~6: passthru()
passthru("cat /var/log/apache2/access.log | grep ".addslashes($_GET['id']));
passthru("cat /var/log/apache2/access.log | grep ".htmlspecialchars($_GET['id']));
?>