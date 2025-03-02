<?php
define('PHONE_NUMBER', '0115218104');

function formatPhoneNumber($number) {
    return preg_replace('/(\d{3})(\d{3})(\d{4})/', '$1 $2 $3', $number);
}
$formattedPhoneNumber = formatPhoneNumber(PHONE_NUMBER);

// Database
/*
$host = 'localhost';
$dbname = 'tecnoservice';
$user = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Errore nella connessione al database: " . $e->getMessage());
}

*/
?>
