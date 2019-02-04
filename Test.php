<?php
    $my_command = escapeshellcmd('python C:\Users\bhatt9697\Desktop\datascience1.py');
    $command_output = shell_exec($my_command);
    echo $command_output;
 ?>