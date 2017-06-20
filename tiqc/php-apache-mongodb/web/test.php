<?php
$VENDORDIR = "/storage/wwwroot/";
require $VENDORDIR . 'vendor/autoload.php'; // include Composer's autoloader

$client = new MongoDB\Client("mongodb://mydb:27017");
$collection = $client->demo->beers;

$result = $collection->insertOne( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );

echo "Inserted with Object ID '{$result->getInsertedId()}'\n";

#$result = $collection->find( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );
$result = $collection->find();

foreach ($result as $entry) {
        echo $entry['_id'], ': ', $entry['name'], "\n";
}
?>
