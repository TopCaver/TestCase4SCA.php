<?php
$id = $this->data['id'];
// Test Case 1 : exec()
exec("cat /var/log/apache2/access.log | grep $id");

// Test Case 2: system()
system("cat /var/log/apache2/access.log | grep $id");

// Test Case 3: passthru()
passthru("cat /var/log/apache2/access.log | grep $id");
?>