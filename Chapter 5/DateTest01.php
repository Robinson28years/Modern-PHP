<?php
date_default_timezone_set('Asia/Shanghai');
$datetime = new DateTime();

$datetime2 = new DateTime('2014-04-27 5:03 AM');
var_dump($datetime2);

$interval = new DateInterval('P2W');

$datetime->add($interval);
echo $datetime->format('Y-m-d H:i:s');

$period = new DatePeriod($datetime, $interval, 3);

foreach ($period  as $nextDateTime) {
    echo $nextDateTime->format('Y-m-d'), PHP_EOL;
}
 ?>
