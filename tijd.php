<?php
if (strpos($argv[1], "s")){
    $sec = (int)$argv[1];
}
else{
    echo "geen seconden gezien" . PHP_EOL;
    exit;
}
echo "$sec seconden" . PHP_EOL;