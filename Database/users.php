<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "law";

try {
  $conn = new PDO("mysql:host={$db_server};dbname={$db_name}", $db_username, $db_password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) UNIQUE  NOT NULL,
    password VARCHAR(30) NOT NULL,
    type VARCHAR(30)   NOT NULL,
        firstname VARCHAR(30),
    lastname VARCHAR(30),
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )
    ";
  // use exec() because no results are returned
  $conn->exec($sql);


  
} catch(PDOException $e) {

}





$conn = null;

?>

<?php


try {
  $conn = new PDO("mysql:host=$db_server;dbname=$db_name", $db_username, $db_password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO users (firstname, lastname, email,username,password,type)
  VALUES ('Demo', '2', 'demo2@example.com','pre','pre','pre')";
  // use exec() because no results are returned
  $conn->exec($sql);

} catch(PDOException $e) {

}

$conn = null;
?>