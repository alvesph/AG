<?php

$read = fopen("hescolar.csv", "r");

$linha = 0;
while ($line = fgetcsv($read, 1000, ",")) {
	if ($linha++ == 0) {
		continue;
	}

	for ($i = 0; $i <= sizeof($line); $i++) {
	    echo $line[$i]."\n";
	}
	echo "<br>";
}
print $line[1];
fclose($read);
 

?>