<?php
// test_db.php - для проверки подключения к БД
define('DB_HOST', 'sql305.infinityfree.com');
define('DB_USER', 'if0_40406087');
define('DB_PASS', 'Graniate795');
define('DB_NAME', 'if0_40406087_missbliss');

// Проверка MySQLi
echo "Testing MySQLi...<br>";
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($mysqli->connect_error) {
    echo "MySQLi failed: " . $mysqli->connect_error . "<br>";
} else {
    echo "MySQLi SUCCESS!<br>";
    $mysqli->close();
}

// Проверка PDO
echo "Testing PDO...<br>";
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    echo "PDO SUCCESS!<br>";
} catch(PDOException $e) {
    echo "PDO failed: " . $e->getMessage() . "<br>";
}

// Проверка расширений
echo "Extensions loaded: " . implode(", ", get_loaded_extensions());
?>