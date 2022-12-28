<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "law";

try {
  $conn = new PDO("mysql:host=$db_server", $db_username, $db_password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE {$db_name}";
  // use exec() because no results are returned
  $conn->exec($sql);
} catch (PDOException $e) {
}

$conn = null;

?>

<?php include 'users.php'; ?>
<?php include 'tracker.php'; ?>
<?php include 'history.php'; ?>
<?php include 'deferred-issues.php'; ?>