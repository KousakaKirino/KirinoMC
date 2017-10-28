<?php
OB_START();
SESSION_START();
$descriptorspec = array( 
    0 => array("pipe", "r"), 
    1 => array("pipe", "w")
); 
/*$handle = proc_close(proc_open(
    'cd E:\mctest&java -jar PaperSpigot-1.8.8-R0.1-SNAPSHOT.jar',
    $descriptorspec,
    $pipes
));*/
echo "aaaaaaaa";
ob_flush();
ob_clean();
$handle = proc_open('cd E:\mctest&java -jar PaperSpigot-1.8.8-R0.1-SNAPSHOT.jar', $descriptorspec, $test);
echo iconv("GB2312", "UTF-8", fgets($test[1]));
proc_close($handle);
