<?php

try {
    $dsn = "mysql: dbname=id21933413_basmaa; host=localhost";
    $user = "id21933413_nolava"
    $pswd  = "Mohameed20031031%%"

    $conn  = new PDO($dsn, $user, $pswd)

    $conn->query("USE id21933413_basmaa")
} 
catch (PDOException $e) {
   die("Error Connecting: ".$e->getMessage());
}

?>