<?php
/**
 * Test Case For SCA Tools
 * 
 * Test Unit : XSS
 * Test Series : 2
 *
 * Description:
 *     Test for non-vulnerability with pure php language.
 *     These vul. must ~NOT~ be detected.
 *
 * @author: topcaver@gmail.com
 * 
 */

// Test Case 1: change variable type
echo (int)$_GET['id'];

// Test Case 2: escape string.
echo htmlspecialchars($_GET['id']);

// Test Case 3: check string.
if(is_numeric($_GET['id'])){
	echo $_GET['id'];
}