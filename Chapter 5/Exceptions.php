<?php
$exception = new Exception('Danger, Robinson!', 100);
echo $exception->getCode();
echo $exception->getMessage();
 ?>
