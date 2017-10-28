<?php
SESSION_START();
$pipes = $_SESSION['test'];
fwrite($pipes['0'], "say 233333\n");
fwrite($pipes['0'], "stop\n");
echo iconv("GB2312", "UTF-8", fgets($pipes[1], 128));