<?php
   echo "test";
   $out  = shell_exec('python3 /var/www/html/server/servo.py');
   echo $out;
?>
