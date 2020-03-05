<?php

$csv_file = fopen("data(ansi).csv", "rt") or die("Error!");

for ($i=0; $csv_data = fgetcsv($csv_file, 1000, ";"); i++)
{
	$num_row_csv_data = count($csv_data);

	echo "<h3>Row number $i (Fields: $num_row_csv_data): </h3>";
	for ($j=0; $j<$num_row_csv_data; $j++)  echo "[$j]: $csv_data[$j]<br>";
}


fclose($csv_file);



?>