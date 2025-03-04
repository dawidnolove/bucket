<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Główna - Posty</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header>
        <div class="logo"></div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Notifications</a>
            <a href="#">Messages</a>
        </nav>
    </header>

    <div class="layout">
        <div class="sidebar">
            <a href="#">Profile</a>
            <a href="#">Settings</a>
            <p><a href="logout.php">Wyloguj</a></p>
        </div>
        
        <div class="main-content">
            <h1>Posty użytkowników</h1>
            <div class="post">
                <h3>Użytkownik 1</h3>
                <p>To jest przykładowy post użytkownika.</p>
            </div>
            <div class="post">
                <h3>Użytkownik 2</h3>
                <p>Kolejny ciekawy post!</p>
            </div>
        </div>
        
        <div class="sidebar">
            <a href="#">Pomoc</a>
            <a href="#">Kontakt</a>
            <a href="#">Regulamin</a>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 LoreNest. Wszelkie prawa zastrzeżone. All Rights Reserved</p>
    </footer>
</body>
</html>