<?php
/**
 * Test Case For SCA Tools
 * 
 * Test Unit : XSS
 * Test Series : 1
 *
 * Description:
 *     Test for vulnerability with pure php language.
 *     These vul. must be detected.
 *
 * @author: topcaver@gmail.com
 * 
 */

// Test Case 1~8: print user's input directly.
echo $_GET['id']; 
echo $_POST['id'];
echo $_COOKIE['id'];
echo $_REQUEST['id'];

print ($_GET['id']);
print ($_POST['id']);
print ($_COOKIE['id']);
print ($_REQUEST['id']);

// Test Case 9~16: print variable that value from user's input.
$tainted_get_var = $_GET['id'];
$tainted_post_var = $_POST['id'];
$tainted_cookie_var = $_COOKIE['id'];
$tainted_request_var = $_REQUEST['id']

echo $tainted_get_var;
echo $tainted_post_var;
echo $tainted_cookie_var;
echo $tainted_request_var;

print $tainted_get_var;
print $tainted_post_var;
print $tainted_cookie_var;
print $tainted_request_var;

?>