<?phpinfo()

$list = array(
	'aaa,bbb,ccc,ddd',
	'123,456,789',
	'"aaa","bbb"'
);


$csv_file = fopen('file.csv', 'w');

foreach ($list as $line) {
	fputcsv($csv_file, explode(',', $line),";");
}

fclose($csv_file);

echo "ok";


?>