<?php
namespace Lsu;

require 'vendor/autoload.php';

$document = new DocumentStore();

$documentTest = new DocumentTest();
$documentTest->sayHello();
$document->addDocument($documentTest);

$htmlDocument = new HtmlDocument('https://php.net');
$document->addDocument($htmlDocument);

$streamDocument = new StreamDocument(fopen('C:\Users\bbche\Desktop\test.txt', 'rb'));
$document->addDocument($streamDocument);


print_r($document->getDocuments());
 ?>
