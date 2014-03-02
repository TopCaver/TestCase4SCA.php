TestCase4SCA.php
================

A set of test case for verifying source code (security) analyze tools.

  * Series 1: The test cases contained simple & basic vulnerability.
  * Series 2: In these cases, problem have been resovled correctly. Can SCA recognize it?
  * Series 3: In these cases, problem be resovled incorrectly. Have SCA be cheated?
  * Series 4: An app implement by a framework. Tracking variables is difficult for sca tools, almost all.

XSS Unit
--------
  * Series 1 (16): echo / print ($_GET/$_POST/$_COOKIES/$_REQUEST).
  * Series 2 (03): (int) , htmlspecialchars();
  * Series 3 (01): mysql_escape_string(); 
  * Series 4 (01): As same as series 1, but implemet under a fremework.

SQL Injection Unit
------------------


Command Injection Unit
----------------------


Test Result
-----------