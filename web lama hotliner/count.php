<?php

$COUNT_FILE = "hitcounter.dat";

if (file_exists($COUNT_FILE)) {
	$fp = fopen("$COUNT_FILE", "r+");
	flock($fp, 1);
	$count = fgets($fp, 4096);
	$count += 1; 
	fseek($fp,0);
	fputs($fp, $count);
	flock($fp, 3);
	fclose($fp);
} else {
	echo "Can't find file, check '\$file'<BR>";
}

?>
<font size="6"><b><?php echo $count; ?></b></font>

