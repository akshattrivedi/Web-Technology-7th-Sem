<?php
$fp = fopen("counter.txt","r");
$count = fread($fp,1024);
fclose($fp);
echo "<p> Page Views:".$count,"</p>";
$count = $count+1;
$fp = fopen("counter.txt","w");
fwrite($fp,$count);
fclose($fp);
?>
