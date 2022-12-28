<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "law";

try {
  $conn = new PDO("mysql:host={$db_server};dbname={$db_name}", $db_username, $db_password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE TABLE tracker (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30)   NOT NULL,
    type VARCHAR(30)   NOT NULL,
  status VARCHAR(30) DEFAULT 'success',
    track_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )
    ";
  // use exec() because no results are returned
  $conn->exec($sql);


  
} catch(PDOException $e) {

}
$conn = null;