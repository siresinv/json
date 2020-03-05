<?php


$data = parse_ini_file('config.ini', true);

echo '<pre>';
print_r($data, false);
echo '</pre>';

?>