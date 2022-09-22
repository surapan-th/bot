

<?php
require_once __DIR__ . '/vendor/autoload.php';
// connect to mongodb
$m =  new MongoDB\Client('mongodb+srv://surapan:bsn022521@kingufa.czdwq.mongodb.net/?retryWrites=true&w=majority');;


// select a database
$db = $m->GoldRazer;
$collection = $db->TransactionHistory;

$cursor = $collection->find();

foreach ($cursor as $document) {
    echo "</br>";
    var_dump($document);
    echo "</br>";
}
?>