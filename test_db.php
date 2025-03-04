<?php
require_once 'db.php';

try {
    $stmt = $pdo->query("SELECT 1");
    echo "✅ Połączenie z bazą danych działa!";
} catch (PDOException $e) {
    echo "⛔ Błąd połączenia: " . $e->getMessage();
}
?>
