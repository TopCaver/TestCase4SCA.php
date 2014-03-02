<?php
/**
 * Test Case For SCA Tools
 * 
 * Test Unit : Command Injection Execution
 * Test Series : 2
 *
 * Description:
 *     Test for non-vulnerability with pure php language.
 *     These vul. must ~NOT~ be detected.
 *
 * @author: topcaver@gmail.com
 * 
 */

// Test Case 1~2: exec()
exec("cat /var/log/apache2/access.log | grep ".(int)$_GET['id']);
exec("cat /var/log/apache2/access.log | grep ".escapeshellarg($_GET['id']));

// Test Case 3~4: system()
system("cat /var/log/apache2/access.log | grep ".(int)$_GET['id']);
system("cat /var/log/apache2/access.log | grep ".escapeshellarg($_GET['id']));

// Test Case 5~6: passthru()
passthru("cat /var/log/apache2/access.log | grep ".(int)$_GET['id']);
passthru("cat /var/log/apache2/access.log | grep ".escapeshellarg($_GET['id']));
?>