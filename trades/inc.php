<?php 

$link = mysqli_connect("db707274193.db.1and1.com", "dbo707274193", "hello123", "db707274193");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>