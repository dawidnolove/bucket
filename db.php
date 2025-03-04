<?php

/*$host = '127.0.0.1';      
$dbname = 'lore';  
$uname = 'root';      
$passwd= '';        
*/
$host = 'sql101.infinityfree.com';      
$dbname = 'if0_38422307_lore_nest';  
$uname = 'if0_38422307';      
$passwd= 'ad17dp07';

$dsn = "mysql:host=$host;dbname=$dbname";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $uname, $passwd, $options);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>