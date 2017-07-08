<?php
$handle = fopen(dirname(__FILE__).'\text.txt', 'rb');
// var_dump($handle);
while (feof($handle) !== true) {
    echo fgets($handle);
}
fclose($handle);
 ?>
