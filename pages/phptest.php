<?php
$output = shell_exec('curl https://shellshocker.net/shellshock_test.sh | bash');
$formattedOutput = str_replace("not vulnerable", "<font color=\"green\"> not vulnerable </font>", $output);
$formattedOutput2 = str_replace("[39m", " ", $formattedOutput);
echo "<pre>$formattedOutput2</pre>";
?>
