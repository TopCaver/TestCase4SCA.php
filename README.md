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
  * Series 1 (08): mysql_query() / PDO->query();
  * Series 2 (03): mysql_real_escape_string() / PDO->prepare()
  * Series 3 (02): htmlspecialchars() / escapeshellarg()
  * Series 4 (02): As same as series 1, but implemet under a fremework.

Command Injection Unit
----------------------
  * Series 1 (12): exec() / system() / passthu()
  * Series 2 (06): (int) / escapeshellarg()
  * Series 3 (06): addslashes() / htmlspecialchars()
  * Series 4 (03): As same as series 1, but implemet under a fremework.

Test Result
-----------
[RESULT](Test Report/RESULT.md)
