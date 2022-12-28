<?php include 'Database/database.php';?>

<?php
// Database credentials
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "law";

try
{
    // Connect to MYSQL Database using PDO
    $pdo = new PDO("mysql:host={$db_server};dbname={$db_name}", $db_username, $db_password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
}
catch(PDOException $error) {
	echo "Error: Unable to Connect: " . $error->getMessage();
	exit(0);
}

session_start();