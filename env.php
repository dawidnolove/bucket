<?php
function loadEnv() {
    if (!file_exists('.env')) return;
    
    $lines = file('.env');
    foreach ($lines as $line) {
        $line = trim($line);
        if (!empty($line) && $line[0] != '#') {
            list($key, $value) = explode('=', $line, 2);
            putenv("{$key}={$value}");
        }
    }
}

loadEnv();
?>