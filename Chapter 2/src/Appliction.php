<?php
namespace Lsu;
use Lsu\HtmlDocument;
use Lsu\DocumentTest;
require 'vendor/autoload.php';

$document = new DocumentStore();

$documentTest = new DocumentTest();
$document->addDocument($documentTest);

$htmlDocument = new HtmlDocument('https://php.net');
$document->addDocument($htmlDocument);



print_r($document->getDocuments());
 ?>
