<?php
require(dirname(__FILE__).'/../settings.php');
// var_dump('../settings.php');
$pdo = new PDO(
    sprintf(
        'mysql:host=%s;dbname=%s;port=%s;charset=%s',
        $settings['host'],
        $settings['name'],
        $settings['port'],
        $settings['charset']
    ),
    $settings['username'],
    $settings['password']
);
$sql = 'SELECT email FROM users WHERE id = :id';
$statement = $pdo->prepare($sql);

// $userId = filter_input('1', 'id');
$userId = 1;
$statement->bindValue(':id', $userId ,PDO::PARAM_INT);
$statement->execute();
// var_dump($statement->execute());
echo $statement->fetchColumn(0);
while (($result = $statement->fetch(PDO::FETCH_ASSOC)) !== false) {
    echo $result['email'];
}
    var_dump($pdo);
 ?>
