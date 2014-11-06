<?php
$output = shell_exec('curl https://shellshocker.net/shellshock_test.sh | bash');
$formattedOutput0 = str_replace("not vulnerable", "<font color=\"green\">not vulnerable</font>", $output);
$formattedOutput = str_replace("VULERABLE", "<font color = \"red\"> VULNERABLE</font>", $formattedOutput0);
$formattedOutput1 = str_replace("[92m", " ", $formattedOutput0);
$formattedOutput2 = str_replace("[39m", " ", $formattedOutput1);
echo "<pre>$formattedOutput2</pre><br><br>If you have any <font color = \"red\"> VULNERABLE</font>'s, your bash is vulnerable.";
?>
