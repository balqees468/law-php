<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "law";

try {
    $conn = new PDO("mysql:host={$db_server};dbname={$db_name}", $db_username, $db_password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE deferred_issues (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(30),
    reason_postponement VARCHAR(40),
   new_date date ,
   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )
    ";
    // use exec() because no results are returned
    $conn->exec($sql);
} catch (PDOException $e) {
}
$conn = null;