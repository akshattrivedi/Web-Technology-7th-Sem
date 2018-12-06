<?php
$fp = fopen("counter.txt","r");
$count = fread($fp,1024);
fclose($fp);
echo "Page Views are: ".$count." counts";
$count = $count+1;
$fp = fopen("counter.txt","w");
fwrite($fp,$count);
fclose($fp);
?>
