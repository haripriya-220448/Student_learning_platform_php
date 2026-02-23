<?php
require 'vendor/autoload.php'; // Include Composer autoloader

try {
    $client = new MongoDB\Client("mongodb://127.0.0.1:27017");
    $databases = $client->listDatabases();

    echo "Connected to MongoDB!\nDatabases:\n";
    foreach ($databases as $db) {
        echo $db->getName() . "\n";
    }
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}