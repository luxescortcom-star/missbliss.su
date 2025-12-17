<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>POST Data Check</h1>";
echo "<pre>";
echo "POST: ";
print_r($_POST);
echo "GET: ";
print_r($_GET);
echo "SERVER: ";
print_r($_SERVER['REQUEST_METHOD']);
echo "</pre>";

if ($_POST) {
    echo "<h2 style='color:green'>POST данные получены!</h2>";
} else {
    echo "<h2 style='color:red'>POST данные НЕ получены!</h2>";
}
?>