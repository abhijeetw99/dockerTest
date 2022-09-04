<h1>Hello, World!</h1>
<?php 

$servername = "mysql";
$username = "tutorial";
$password = "secret";

try {
  $conn = new PDO("mysql:host=$servername;dbname=tutorial", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


// $pdo = new PDO('mysql:dbname=tutorial;host=mysql', 'tutorial', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

// $query = $pdo->query('SHOW VARIABLES like "version"');

// $row = $query->fetch();

// echo 'MySQL version:' . $row['Value'];

phpinfo();