<?php
$output = shell_exec('curl https://shellshocker.net/shellshock_test.sh | bash');
echo "<pre>$output</pre>";
?>
