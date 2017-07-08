<?php
try {
    $pdo = new PDO('mysql://host=wronghost;dbname=wrong_name');
} catch (Exception $e) {
    echo $e->getCode();
    echo PHP_EOL;
    echo $e->getMessage();
}finally {
    echo PHP_EOL."alwayys";
}
 ?>
